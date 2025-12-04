<?php
// Toujours renvoyer du JSON
header('Content-Type: application/json; charset=utf-8');

// N'accepter que le POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'success' => false,
        'message' => 'Méthode non autorisée. Utilisez POST.'
    ]);
    exit;
}

require_once 'config.php';

// Récupération des champs envoyés par le formulaire
$name    = isset($_POST['name'])    ? trim($_POST['name'])    : '';
$email   = isset($_POST['email'])   ? trim($_POST['email'])   : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

$errors = [];

// Validation simple
if ($name === '') {
    $errors['name'] = 'Veuillez renseigner votre nom.';
}

if ($email === '') {
    $errors['email'] = 'Veuillez renseigner votre email.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Adresse e-mail invalide.';
}

if ($message === '') {
    $errors['message'] = 'Veuillez saisir un message.';
}

// Si erreurs, on renvoie directement
if (!empty($errors)) {
    echo json_encode([
        'success' => false,
        'message' => 'Certains champs sont invalides.',
        'errors'  => $errors,
    ]);
    exit;
}

/* 1) ENREGISTREMENT EN BDD */

try {
    $stmt = $pdo->prepare("
        INSERT INTO contact_messages (name, email, message, created_at, ip_address, user_agent)
        VALUES (:name, :email, :message, NOW(), :ip, :ua)
    ");

    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':message' => $message,
        ':ip' => $_SERVER['REMOTE_ADDR'] ?? null,
        ':ua' => $_SERVER['HTTP_USER_AGENT'] ?? null,
    ]);
} catch (PDOException $e) {

    echo json_encode([
        'success' => false,
        'message' => "Erreur serveur lors de l'enregistrement du message.",
    ]);
    exit;
}

/* 2) ENVOI DE L’EMAIL */

$to      = 'morganurbanovizeu@gmail.com';
$subject = 'Nouveau message depuis le portfolio';
$body    = "Nom : $name\nEmail : $email\n\nMessage :\n$message";
$headers = "From: $email\r\nReply-To: $email\r\n";

// En local XAMPP, mail() ne marche pas en général, donc :
$sent = true;
// Si je veux tester en prod plus tard :
// $sent = mail($to, $subject, $body, $headers);

if (!$sent) {
    echo json_encode([
        'success' => false,
        'message' => "Le message a été enregistré, mais l'envoi d'e-mail a échoué.",
    ]);
    exit;
}

// Tout est OK
echo json_encode([
    'success' => true,
    'message' => 'Merci ! Votre message a bien été envoyé.',
]);
exit;
