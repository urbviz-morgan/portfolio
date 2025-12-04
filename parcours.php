<?php
// si un jour tu veux charger des données depuis la BDD :
// require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <title>Mon parcours – Morgan URBANO VIZEU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="style.css" />

    <!-- GSAP + ScrollTrigger -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
      defer
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"
      defer
    ></script>
    <script src="script.js" defer></script>
  </head>

  <body class="page-parcours">
    <main>
      <!-- Barre de retour -->
      <div class="parcours-topbar">
        <a href="index.php" class="back-button">
          ← Retour à l'accueil
        </a>
      </div>

      <!-- HERO PARCOURS -->
      <section class="section parcours-hero">
        <div class="container">
          <div class="parcours-hero-inner">
            <div class="parcours-avatar-wrapper">
              <div class="parcours-avatar">
                <span>👤</span>
              </div>
              <div class="parcours-avatar-glow"></div>
            </div>

            <div class="parcours-hero-text">
              <h1 class="parcours-title">
                <span class="parcours-firstname">Morgan</span>
                <span class="parcours-lastname">URBANO VIZEU</span>
              </h1>
              <p class="parcours-subtitle">
                Développeur Web passionné par le Front-End
              </p>
            </div>
          </div>

          <!-- Carte formation actuelle -->
          <article class="parcours-card formation-card">
            <div class="formation-header">
              <div class="formation-icon">
                🎓
              </div>
              <div>
                <h2>Formation Actuelle</h2>
                <p class="formation-school">
                  <span>Bachelor Universitaire Technologique (B.U.T)</span><br />
                  Métiers du Multimédia et de l’Internet (MMI)
                </p>
                <p class="formation-track">
                  <span class="formation-tag">
                    Spécialité : Développement Web et Dispositifs Interactifs
                  </span>
                </p>
              </div>
            </div>
          </article>
        </div>
      </section>

      <!-- MON PARCOURS -->
      <section class="section parcours-timeline-section">
        <div class="container">
          <h2 class="section-title">
            Mon <span>Parcours</span>
          </h2>

          <div class="parcours-timeline">
            <div class="timeline-line"></div>

            <!-- Étape 1 -->
            <article class="timeline-item">
              <div class="timeline-bullet"></div>
              <div class="timeline-card">
                <h3>Reconversion Professionnelle</h3>
                <p class="timeline-tagline">
                  Découverte du métier de développeur web et révélation d’un nouveau
                  projet professionnel.
                </p>
                <p class="timeline-text">
                  Découverte du métier de développeur web grâce à une détection de
                  potentiel dans l’univers du numérique. Cette révélation a marqué le
                  début d’une nouvelle aventure professionnelle passionnante.
                </p>
              </div>
            </article>

            <!-- Étape 2 -->
            <article class="timeline-item">
              <div class="timeline-bullet"></div>
              <div class="timeline-card timeline-card-green">
                <h3>Formation Développeur Web &amp; Web Mobile</h3>
                <p class="timeline-tagline">
                  Obtention d’un diplôme Bac +2 et acquisition de bases solides.
                </p>
                <p class="timeline-text">
                  Formation intensive en développement web et web mobile, aboutissant
                  à l’obtention d’un diplôme Bac +2. Cette formation m’a permis
                  d’acquérir des bases solides dans les technologies web modernes.
                </p>
                <p class="timeline-label">
                  Diplôme obtenu : <span>Bac +2</span>
                </p>
              </div>
            </article>

            <!-- Étape 3 -->
            <article class="timeline-item">
              <div class="timeline-bullet"></div>
              <div class="timeline-card">
                <h3>Spécialisation Front-End</h3>
                <p class="timeline-tagline">
                  Approfondissement du développement web et des interfaces interactives.
                </p>
                <p class="timeline-text">
                  Poursuite d’études en B.U.T MMI spécialité développement web et
                  dispositifs interactifs pour approfondir mes compétences en front-end,
                  un domaine qui me passionne particulièrement pour sa dimension créative
                  et technique.
                </p>
              </div>
            </article>
          </div>
        </div>
      </section>

      <!-- POURQUOI LE DÉVELOPPEMENT WEB ? -->
      <section class="section parcours-why-section">
        <div class="container">
          <article class="parcours-card why-card">
            <h2 class="section-title">
              Pourquoi le <span>Développement Web</span> ?
            </h2>

            <div class="why-grid">
              <div class="why-item">
                <div class="why-icon">🎨</div>
                <h3>Créativité &amp; Logique</h3>
                <p>
                  J’aime concevoir des interfaces, donner vie à des idées et résoudre
                  des problèmes techniques tout en créant des expériences utiles pour
                  les utilisateurs.
                </p>
              </div>

              <div class="why-item">
                <div class="why-icon">📚</div>
                <h3>Apprentissage Continu</h3>
                <p>
                  Ce domaine évolue rapidement, ce qui me pousse à apprendre en continu
                  et à me perfectionner constamment dans les nouvelles technologies.
                </p>
              </div>

              <div class="why-item">
                <div class="why-icon">🤝</div>
                <h3>Projets Variés</h3>
                <p>
                  Travailler sur des projets variés, en équipe ou en autonomie, me
                  motive particulièrement et enrichit mon expérience professionnelle.
                </p>
              </div>

              <div class="why-item">
                <div class="why-icon">✨</div>
                <h3>Résultat Concret</h3>
                <p>
                  J’apprécie la dimension concrète : voir directement le résultat de mon
                  travail en ligne et l’impact sur les utilisateurs.
                </p>
              </div>
            </div>

            <p class="why-quote">
              "C'est un métier qui me permet d'exprimer ma curiosité, ma rigueur et ma
              passion pour le numérique."
            </p>

            <div class="why-actions">
              <a href="index.php#projects" class="btn btn-primary">
                Découvrir mes projets
              </a>
            </div>
          </article>
        </div>
      </section>
    </main>
  </body>
</html>
