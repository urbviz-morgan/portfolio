<?php
// require_once 'config.php'; // si tu veux inclure la BDD plus tard
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <title>Plan du site – Morgan URBANO VIZEU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css" />

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" defer></script>

    <script defer>
      document.addEventListener("DOMContentLoaded", () => {
        gsap.from(".sitemap-title", {
          opacity: 0,
          y: -20,
          duration: 0.8,
          ease: "power3.out"
        });

        gsap.from(".sitemap-card", {
          opacity: 0,
          y: 25,
          duration: 0.9,
          stagger: 0.15,
          ease: "power3.out"
        });
      });
    </script>
  </head>

  <body class="page-parcours">
    <main>

      <!-- Top bar -->
      <div class="parcours-topbar">
        <a href="index.php" class="back-button">← Retour à l'accueil</a>
      </div>

      <!-- HERO -->
      <section class="section">
        <div class="container">
          <h1 class="section-title sitemap-title">
            Plan du <span>site</span>
          </h1>
          <p class="section-text center">
            Retrouvez toutes les pages et sections disponibles sur mon portfolio.
          </p>

          <div class="sitemap-grid">
            <a href="index.php" class="sitemap-card">
              <div class="sitemap-icon">🏠</div>
              <h3>Accueil</h3>
              <p>Page principale du portfolio.</p>
            </a>

            <a href="parcours.php" class="sitemap-card">
              <div class="sitemap-icon">👤</div>
              <h3>Mon Parcours</h3>
              <p>Mon histoire, mon évolution et mon orientation professionnelle.</p>
            </a>

            <a href="#skills" class="sitemap-card">
              <div class="sitemap-icon">⚡</div>
              <h3>Compétences</h3>
              <p>Compétences techniques et outils maîtrisés.</p>
            </a>

            <a href="#projects" class="sitemap-card">
              <div class="sitemap-icon">💼</div>
              <h3>Projets</h3>
              <p>Sélection de mes projets web et multimédias.</p>
            </a>

            <a href="#contact" class="sitemap-card">
              <div class="sitemap-icon">✉️</div>
              <h3>Contact</h3>
              <p>Formulaire pour me joindre facilement.</p>
            </a>

            <a href="mentions-legales.php" class="sitemap-card">
              <div class="sitemap-icon">📄</div>
              <h3>Mentions légales</h3>
              <p>Informations légales concernant mon site.</p>
            </a>

            <a href="confidentialite.php" class="sitemap-card">
              <div class="sitemap-icon">🔐</div>
              <h3>Politique de confidentialité</h3>
              <p>Traitement des données personnelles.</p>
            </a>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>
