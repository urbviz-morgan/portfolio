<?php
// contact.php — traitement du formulaire de contact

header('Content-Type: application/json; charset=UTF-8');

// On n'accepte que la méthode POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'success' => false,
        'message' => 'Méthode non autorisée.'
    ]);
    exit;
}

// Récupération / nettoyage des données
$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

$errors = [];

// Vérifications basiques
if ($name === '') {
    $errors['name'] = 'Veuillez renseigner votre nom.';
}

if ($email === '') {
    $errors['email'] = 'Veuillez renseigner votre adresse e-mail.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'L’adresse e-mail n’est pas valide.';
}

if ($message === '') {
    $errors['message'] = 'Veuillez écrire un message.';
}

// S’il y a des erreurs, on les renvoie au front
if (!empty($errors)) {
    echo json_encode([
        'success' => false,
        'message' => 'Merci de corriger les champs indiqués.',
        'errors'  => $errors
    ]);
    exit;
}

// Préparation de l’e-mail
$to      = 'morganurbanovizeu@gmail.com';
$subject = 'Nouveau message depuis le portfolio';
$body    = "Vous avez reçu un nouveau message depuis le formulaire du portfolio.\n\n"
         . "Nom : {$name}\n"
         . "Email : {$email}\n\n"
         . "Message :\n{$message}\n";

$headers  = "From: Portfolio <no-reply@morganurbanovizeu.fr>\r\n";
$headers .= "Reply-To: {$email}\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Envoi de l’e-mail
$sent = mail($to, $subject, $body, $headers);

if ($sent) {
    echo json_encode([
        'success' => true,
        'message' => 'Votre message a bien été envoyé. Merci pour votre confiance !'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => "Une erreur est survenue lors de l’envoi du message. Merci de réessayer plus tard."
    ]);
}