<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <title>Portfolio – Morgan Urbano Vizeu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="style.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
<header id="hero" class="hero section">
  <!-- NAVBAR -->
  <div class="site-nav">
    <div class="container nav-inner">
      <!-- Logo -->
      <a href="index.php" class="nav-logo">
        Morgan<span>.</span>
      </a>

      <!-- Bouton burger -->
      <button class="nav-toggle" aria-label="Ouvrir le menu">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <!-- Liens de navigation -->
      <nav class="nav-links">
        <a href="#about" data-scroll="#about">À propos</a>
        <a href="#projects" data-scroll="#projects">Projets</a>
        <a href="#skills" data-scroll="#skills">Compétences</a>
        <a href="#contact" data-scroll="#contact">Contact</a>
        <a href="parcours.php">Parcours</a>
      </nav>
    </div>
  </div>

  <!-- Orbes animées en arrière-plan -->
  <div class="hero-orbs">
    <span class="hero-orb orb-1"></span>
    <span class="hero-orb orb-2"></span>
    <span class="hero-orb orb-3"></span>
  </div>

  <div class="hero-inner container">
    <div class="hero-content reveal">
      <p class="hero-subtitle">Développeur Web Front End</p>
      <h1 class="hero-title">
        <span class="hero-title-main">URBANO VIZEU</span>
        <span class="hero-title-sub">Morgan</span>
      </h1>
      <p class="hero-text">
        Je crée des expériences web modernes et intuitives avec React, Node.js
        et les technologies les plus récentes. Passionné par le code propre et
        les interfaces élégantes.
      </p>

      <div class="hero-actions">
        <a href="#projects" class="btn btn-primary" data-scroll="#projects">
          Voir mes projets
        </a>
        <a href="parcours.php" class="btn btn-outline">
          À propos de moi
        </a>
      </div>

      <div class="hero-socials">
        <!-- icônes réseaux -->
      </div>

      <button class="scroll-down" data-scroll="#about" aria-label="Descendre">
        ↓
      </button>
    </div>
  </div>

  <div class="hero-bg"></div>
</header>


    <main>
      <!-- ABOUT  -->
      <section id="about" class="section">
        <div class="container about-grid reveal">
          <div class="about-photo-wrapper">
            <div class="about-photo-glow"></div>
            <img
              src="assets/morgan.webp"
              alt="Portrait de Morgan"
              class="about-photo"
            />
          </div>

          <div class="about-content">
            <h2 class="section-title">
              À <span>propos</span>
            </h2>
            <p class="section-text">
              Je m'appelle <strong>Morgan</strong>, développeur web avec un
              bac&nbsp;+2 en développement web et web mobile. Passionné par la
              création d'interfaces claires, modernes et accessibles, je
              m'oriente particulièrement vers le
              <span class="highlight">développement front-end</span>.
            </p>
            <p class="section-text">
              Spécialisé dans l'écosystème
              <span class="highlight">JavaScript</span>, j'aime transformer des
              idées complexes en solutions élégantes et accessibles. Mon
              approche combine <span class="highlight">expertise technique</span>
              et <span class="highlight">sensibilité design</span> pour créer
              des expériences utilisateur remarquables.
            </p>
            <p class="section-text">
              Toujours en veille sur les dernières technologies et bonnes
              pratiques, je cherche à proposer des solutions
              <span class="highlight">innovantes</span> et
              <span class="highlight">durables</span>.
            </p>

            <h3 class="section-subtitle">Mes passions</h3>
            <div class="passions-grid">
              <div class="passion-card">
                <span class="passion-icon">⟪⟫</span>
                <p>Développement</p>
              </div>
              <div class="passion-card">
                <span class="passion-icon">🎨</span>
                <p>Design UI/UX</p>
              </div>
              <div class="passion-card">
                <span class="passion-icon">👁️</span>
                <p>Veille technologique</p>
              </div>
              <div class="passion-card">
                <span class="passion-icon">🎵</span>
                <p>Festival</p>
              </div>
              <div class="passion-card">
                <span class="passion-icon">🎮</span>
                <p>Gaming</p>
              </div>
              <div class="passion-card">
                <span class="passion-icon">🚀</span>
                <p>Innovation</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- PROJECTS -->
      <section id="projects" class="section">
        <div class="container reveal">
          <h2 class="section-title">
            Mes <span>projets</span>
          </h2>
          <p class="section-text center">
            Découvrez une sélection de mes réalisations les plus récentes,
            alliant innovation technique et design moderne.
          </p>

          <div class="projects-grid">
            <article class="project-card project-card--link">
              <a href="#" class="project-card-click">
                <div class="project-media">
                  <span class="project-badge">Projet phare</span>
                  <img
                    src="assets/uprising_project.webp"
                    alt="Site événementiel UPRISING Project"
                  />
                  <div class="project-media-footer">UPRISING Project</div>
                </div>
                <div class="project-body">
                  <h3>Site événementiel</h3>
                  <p>
                    Site événementiel pour une soirée hardcore toulousaine,
                    pensé pour valoriser l'univers visuel et faciliter la
                    réservation.
                  </p>
                  <div class="project-tags">
                    <span class="tag">HTML</span>
                    <span class="tag">CSS</span>
                    <span class="tag">PHP</span>
                    <span class="tag">SQL</span>
                    <span class="tag">JavaScript</span>
                  </div>
                </div>
              </a>
            </article>

            <article class="project-card project-card--link">
              <a
                href="https://morganurbanovizeu.fr/mastermind/mastermind.php"
                target="_blank"
                rel="noopener noreferrer"
                class="project-card-click"
              >
                <div class="project-media">
                  <span class="project-badge">Projet phare</span>
                  <img
                    src="assets/background_mastermind.webp"
                    alt="Jeu Mastermind"
                  />
                  <div class="project-media-footer">Mastermind</div>
                </div>
                <div class="project-body">
                  <h3>Mastermind</h3>
                  <p>
                    Jeu de logique et de réflexion développé pour travailler les
                    mécaniques de jeu, la logique métier et l'expérience
                    utilisateur.
                  </p>
                  <div class="project-tags">
                    <span class="tag">HTML</span>
                    <span class="tag">CSS</span>
                    <span class="tag">PHP</span>
                  </div>
                </div>
              </a>
            </article>
          </div>

          <div class="center">
            <a href="https://github.com/urbviz-morgan" class="btn btn-outline">
              Voir tous mes projets sur GitHub
            </a>
          </div>
        </div>
      </section>

      <!-- SKILLS -->
      <?php
        require_once 'config.php';

        // Récupération de toutes les compétences
        $stmt = $pdo->query("
            SELECT * FROM skills
            ORDER BY 
              FIELD(category, 'frontend','backend','performance_seo','outils_devops'),
              sort_order
        ");
        $skills = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Regrouper par catégorie
        $skillsByCategory = [];
        foreach ($skills as $skill) {
            $skillsByCategory[$skill['category']][] = $skill;
        }

        // Métadonnées pour chaque colonne (titre, icône, classes)
        $categoriesMeta = [
            'frontend' => [
                'title' => 'Frontend',
                'icon'  => '⟪⟫',
                'icon_wrapper_class' => 'skill-icon-wrapper',
            ],
            'backend' => [
                'title' => 'Backend',
                'icon'  => '🖥️',
                'icon_wrapper_class' => 'skill-icon-wrapper skill-icon-green',
            ],
            'performance_seo' => [
                'title' => 'Performance & SEO',
                'icon'  => '↗',
                'icon_wrapper_class' => 'skill-icon-wrapper skill-icon-blue',
            ],
            'outils_devops' => [
                'title' => 'Outils & DevOps',
                'icon'  => '⚙️',
                'icon_wrapper_class' => 'skill-icon-wrapper skill-icon-orange',
            ],
        ];

        // Ordre d’affichage des colonnes
        $categoriesOrder = ['frontend', 'backend', 'performance_seo', 'outils_devops'];
      ?>

        <section id="skills" class="section">
          <div class="container reveal">
            <h2 class="section-title">
              Mes <span>compétences</span>
            </h2>
            <p class="section-text center">
              Une expertise technique solide construite au fil des projets et
              constamment enrichie par la veille technologique.
            </p>

            <div class="skills-grid">
              <?php foreach ($categoriesOrder as $catKey): ?>
                <?php if (!isset($skillsByCategory[$catKey])) continue; ?>
                <?php $meta = $categoriesMeta[$catKey]; ?>

                <!-- Carte de compétences -->
                <article class="skill-card">
                  <div class="skill-card-header">
                    <div class="<?= htmlspecialchars($meta['icon_wrapper_class']) ?>">
                      <span><?= htmlspecialchars($meta['icon']) ?></span>
                    </div>
                    <h3><?= htmlspecialchars($meta['title']) ?></h3>
                  </div>

                  <ul class="skill-list">
                    <?php foreach ($skillsByCategory[$catKey] as $skill): ?>
                      <li>
                        <div class="skill-row">
                          <span><?= htmlspecialchars($skill['name']) ?></span>
                          <span class="badge <?= htmlspecialchars($skill['badge_class']) ?>">
                            <?= htmlspecialchars($skill['badge_text']) ?>
                          </span>
                        </div>
                        <div class="skill-bar <?= htmlspecialchars($skill['bar_class']) ?>">
                          <span style="width: <?= (int) $skill['bar_width'] ?>%"></span>
                        </div>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

      <!-- TECHNOLOGIES -->
<section id="technologies" class="section section-soft">
  <div class="container reveal">
    <h2 class="section-title">
      Technologies <span>maîtrisées</span>
    </h2>
    <p class="section-text center">
      Un arsenal technologique complet et en constante évolution.
    </p>

    <div class="tech-marquee">
      <div class="tags-row">
        <span class="tag-pill">HTML</span>
        <span class="tag-pill">CSS</span>
        <span class="tag-pill">Tailwind CSS</span>
        <span class="tag-pill">WordPress</span>
        <span class="tag-pill">PHP</span>
        <span class="tag-pill">SQL</span>
        <span class="tag-pill">JavaScript</span>
        <span class="tag-pill">REST API</span>
        <span class="tag-pill">Node.js</span>
        <span class="tag-pill">Docker</span>
        <span class="tag-pill">SEO/SEA</span>
        <span class="tag-pill">UI/UX</span>

        <span class="tag-pill">HTML</span>
        <span class="tag-pill">CSS</span>
        <span class="tag-pill">Tailwind CSS</span>
        <span class="tag-pill">WordPress</span>
        <span class="tag-pill">PHP</span>
        <span class="tag-pill">SQL</span>
        <span class="tag-pill">JavaScript</span>
        <span class="tag-pill">REST API</span>
        <span class="tag-pill">Node.js</span>
        <span class="tag-pill">Docker</span>
        <span class="tag-pill">SEO/SEA</span>
        <span class="tag-pill">UI/UX</span>
      </div>
    </div>
  </div>
</section>


      <!-- CONTACT -->
      <section id="contact" class="section">
        <div class="container reveal">
          <h2 class="section-title">
            Restons en <span>contact</span>
          </h2>
          <p class="section-text center">
            Un projet en tête ? Une collaboration à envisager ? N'hésitez pas à
            me contacter, je serais ravi d'échanger avec vous.
          </p>

          <div class="contact-grid">
            <form
              class="contact-card contact-form"
              id="contact-form"
              action="send_mail.php"
              method="POST"
              novalidate
            >
              <h3>Envoyez-moi un message</h3>
              <p class="contact-subtext">
                Utilisez ce formulaire pour me contacter directement.
              </p>

              <label class="field">
                <span>Nom complet</span>
                <input
                  type="text"
                  name="name"
                  placeholder="Votre nom"
                  required
                />
              </label>

              <label class="field">
                <span>Email</span>
                <input
                  type="email"
                  name="email"
                  placeholder="votre@email.com"
                  required
                />
              </label>

              <label class="field">
                <span>Message</span>
                <textarea
                  name="message"
                  rows="5"
                  placeholder="Décrivez votre projet ou votre demande..."
                  required
                ></textarea>
              </label>

              <button type="submit" class="btn btn-primary btn-full">
                Envoyer le message
              </button>

              <p class="form-feedback" id="form-feedback"></p>
            </form>

            <div class="contact-right">
              <div class="contact-card">
                <h3>Informations de contact</h3>
                <ul class="contact-info-list">
                  <li>
                    <span class="contact-icon">✉</span>
                    <div>
                      <p class="contact-label">Email</p>
                      <p>morganurbanovizeu@gmail.com</p>
                    </div>
                  </li>
                  <li>
                    <span class="contact-icon">📞</span>
                    <div>
                      <p class="contact-label">Téléphone</p>
                      <p>+33 6 62 54 80 65</p>
                    </div>
                  </li>
                  <li>
                    <span class="contact-icon">⏱</span>
                    <div>
                      <p class="contact-label">Temps de réponse</p>
                      <p>Sous 24h en général</p>
                    </div>
                  </li>
                </ul>
              </div>

              <div class="contact-card">
                <h3>Retrouvez-moi sur :</h3>
                <div class="hero-socials">
                  <a href="https://github.com/urbviz-morgan" class="icon-btn" aria-label="GitHub">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <path
                        d="M12 .5C5.65.5.5 5.65.5 12c0 5.1 3.3 9.4 7.9 10.9.6.1.8-.3.8-.6v-2c-3.2.7-3.9-1.4-3.9-1.4-.5-1.1-1.1-1.4-1.1-1.4-.9-.6.1-.6.1-.6 1 .1 1.6 1 1.6 1 .9 1.6 2.4 1.1 3 .8.1-.7.4-1.1.7-1.4-2.6-.3-5.4-1.3-5.4-5.9 0-1.3.5-2.3 1.2-3.1-.1-.3-.5-1.5.1-3.1 0 0 1-.3 3.2 1.2a11 11 0 0 1 5.8 0c2.2-1.5 3.2-1.2 3.2-1.2.6 1.6.2 2.8.1 3.1.8.8 1.2 1.8 1.2 3.1 0 4.6-2.8 5.6-5.4 5.9.4.3.8 1 .8 2.1v3.1c0 .3.2.7.8.6A10.99 10.99 0 0 0 23.5 12C23.5 5.65 18.35.5 12 .5Z"
                      />
                    </svg>
                  </a>
                  <a href="https://www.linkedin.com/in/morgan-urbano-vizeu-83001633b/" class="icon-btn" aria-label="LinkedIn">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <path
                        d="M4.98 3.5C4.98 4.88 3.88 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1 4.98 2.12 4.98 3.5zM.2 8.02h4.6V24H.2V8.02zM8.34 8.02h4.41v2.17h.06c.61-1.16 2.1-2.39 4.33-2.39 4.63 0 5.48 3.05 5.48 7.01V24h-4.6v-7.58c0-1.81-.03-4.14-2.52-4.14-2.53 0-2.92 1.98-2.92 4.02V24h-4.6V8.02z"
                      />
                    </svg>
                  </a>
                  <a href="mailto:morganurbanovizeu@gmail.com" class="icon-btn" aria-label="Email">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <path
                        d="M2 4h20a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2Zm0 2v.5l10 6.25L22 6.5V6H2Zm0 3.75V18h20v-8.25l-9.46 5.9a1 1 0 0 1-1.08 0L2 9.75Z"
                      />
                    </svg>
                  </a>
                </div>
              </div>

              <div class="contact-card">
                <h3>Disponibilité</h3>
                <div class="availability">
                  <span class="status-dot"></span>
                  <p>Disponible pour de nouveaux projets</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- FOOTER -->
    <footer class="footer">
      <div class="container footer-inner">
        <p>© 2025 Morgan URBANO VIZEU.</p>
        <nav class="footer-links">
          <a href="mentions-legales.php">Mentions légales</a>
          <a href="politique-confidentialite.php">Politique de confidentialité</a>
          <a href="sitemap.php">Plan du site</a>
        </nav>
        <div class="footer-socials">
          <a href="https://github.com/urbviz-morgan" aria-label="GitHub" class="icon-btn icon-btn-ghost">
            <svg viewBox="0 0 24 24" aria-hidden="true">
              <path
                d="M12 .5C5.65.5.5 5.65.5 12c0 5.1 3.3 9.4 7.9 10.9.6.1.8-.3.8-.6v-2c-3.2.7-3.9-1.4-3.9-1.4-.5-1.1-1.1-1.4-1.1-1.4-.9-.6.1-.6.1-.6 1 .1 1.6 1 1.6 1 .9 1.6 2.4 1.1 3 .8.1-.7.4-1.1.7-1.4-2.6-.3-5.4-1.3-5.4-5.9 0-1.3.5-2.3 1.2-3.1-.1-.3-.5-1.5.1-3.1 0 0 1-.3 3.2 1.2a11 11 0 0 1 5.8 0c2.2-1.5 3.2-1.2 3.2-1.2.6 1.6.2 2.8.1 3.1.8.8 1.2 1.8 1.2 3.1 0 4.6-2.8 5.6-5.4 5.9.4.3.8 1 .8 2.1v3.1c0 .3.2.7.8.6A10.99 10.99 0 0 0 23.5 12C23.5 5.65 18.35.5 12 .5Z"
              />
            </svg>
          </a>
          <a href="https://www.linkedin.com/in/morgan-urbano-vizeu-83001633b/" aria-label="LinkedIn" class="icon-btn icon-btn-ghost">
            <svg viewBox="0 0 24 24" aria-hidden="true">
              <path
                d="M4.98 3.5C4.98 4.88 3.88 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1 4.98 2.12 4.98 3.5zM.2 8.02h4.6V24H.2V8.02zM8.34 8.02h4.41v2.17h.06c.61-1.16 2.1-2.39 4.33-2.39 4.63 0 5.48 3.05 5.48 7.01V24h-4.6v-7.58c0-1.81-.03-4.14-2.52-4.14-2.53 0-2.92 1.98-2.92 4.02V24h-4.6V8.02z"
              />
            </svg>
          </a>
          <a href="mailto:morganurbanovizeu@gmail.com" aria-label="Email" class="icon-btn icon-btn-ghost">
            <svg viewBox="0 0 24 24" aria-hidden="true">
              <path
                d="M2 4h20a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2Zm0 2v.5l10 6.25L22 6.5V6H2Zm0 3.75V18h20v-8.25l-9.46 5.9a1 1 0 0 1-1.08 0L2 9.75Z"
              />
            </svg>
          </a>
        </div>
      </div>
    </footer>

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    <!-- Script principal -->
    <script src="script.js"></script>
  </body>
</html>