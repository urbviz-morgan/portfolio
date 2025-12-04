// Smooth scroll pour les éléments avec data-scroll
document.querySelectorAll("[data-scroll]").forEach((el) => {
  el.addEventListener("click", (e) => {
    const targetSelector = el.getAttribute("data-scroll");
    const target = document.querySelector(targetSelector);
    if (target) {
      e.preventDefault();
      target.scrollIntoView({ behavior: "smooth", block: "start" });
    }
  });
});


// NAVBAR : burger + fermeture au clic
const navToggle = document.querySelector(".nav-toggle");
const navLinks = document.querySelector(".nav-links");

if (navToggle && navLinks) {
  navToggle.addEventListener("click", () => {
    document.body.classList.toggle("nav-open");
  });

  navLinks.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
      document.body.classList.remove("nav-open");
    });
  });
}

// GSAP + ScrollTrigger
gsap.registerPlugin(ScrollTrigger);

// Timeline d’entrée pour le HERO
const heroTl = gsap.timeline({
  defaults: { ease: "power3.out" },
});

heroTl
  .from(".hero-title-main", {
    duration: 1.1,
    y: 60,
    opacity: 0,
    filter: "blur(4px)",
  })
  .from(
    ".hero-title-sub",
    {
      duration: 0.9,
      y: 40,
      opacity: 0,
      filter: "blur(3px)",
    },
    "-=0.6"
  )
  .from(
    ".hero-subtitle",
    {
      duration: 0.7,
      y: 20,
      opacity: 0,
    },
    "-=0.6"
  )
  .from(
    ".hero-text",
    {
      duration: 0.7,
      y: 20,
      opacity: 0,
    },
    "-=0.4"
  )
  .from(
    ".hero-actions .btn",
    {
      duration: 0.6,
      y: 20,
      opacity: 0,
      stagger: 0.15,
    },
    "-=0.3"
  )
  .from(
    ".hero-socials .icon-btn",
    {
      duration: 0.6,
      y: 10,
      opacity: 0,
      stagger: 0.1,
    },
    "-=0.4"
  )
  .from(
    ".scroll-down",
    {
      duration: 0.5,
      opacity: 0,
    },
    "-=0.3"
  );

// Animation GSAP du logo "MORGAN."

gsap.set(".nav-logo", { "--underline-scale": 0 });

// Timeline d'entrée : slide depuis la gauche + apparition du soulignement
const logoIntroTl = gsap.timeline({ defaults: { ease: "power3.out" } });

logoIntroTl
  .from(".nav-logo", {
    x: -40,
    opacity: 0,
    duration: 0.8
  })
  .to(
    ".nav-logo",
    {
      "--underline-scale": 1,
      duration: 0.8
    },
    "-=0.4" 
  );

// Effet hover plus “vivant” sur le logo
const logo = document.querySelector(".nav-logo");

if (logo) {
  logo.addEventListener("mouseenter", () => {
    gsap.to(logo, {
      duration: 0.35,
      y: -2,
      scale: 1.04,
      textShadow: "0 0 18px rgba(172, 140, 255, 0.9)",
      ease: "power2.out"
    });
  });

  logo.addEventListener("mouseleave", () => {
    gsap.to(logo, {
      duration: 0.35,
      y: 0,
      scale: 1,
      textShadow: "0 0 0 rgba(0,0,0,0)",
      ease: "power2.inOut"
    });
  });
}


// Révélations des sections .reveal
gsap.utils.toArray(".reveal").forEach((el) => {
  gsap.to(el, {
    scrollTrigger: {
      trigger: el,
      start: "top 75%",
      toggleActions: "play none none reverse",
    },
    opacity: 1,
    y: 0,
    duration: 0.9,
    ease: "power3.out",
  });
});

// Projets
gsap.utils.toArray(".project-card").forEach((card, index) => {
  gsap.from(card, {
    scrollTrigger: {
      trigger: card,
      start: "top 80%",
    },
    opacity: 0,
    y: 40,
    duration: 0.8,
    delay: index * 0.05,
    ease: "power2.out",
  });
});

// Compétences
gsap.utils.toArray(".skill-card").forEach((card) => {
  gsap.from(card, {
    scrollTrigger: {
      trigger: card,
      start: "top 80%",
    },
    opacity: 0,
    y: 40,
    duration: 0.9,
    ease: "power2.out",
  });

  const bars = card.querySelectorAll(".skill-bar span");
  gsap.from(bars, {
    scrollTrigger: {
      trigger: card,
      start: "top 80%",
    },
    width: 0,
    duration: 0.9,
    stagger: 0.1,
    ease: "power3.out",
  });
});

// Tags de technologies
gsap.from(".tags-row .tag-pill", {
  scrollTrigger: {
    trigger: ".tags-row",
    start: "top 80%",
  },
  opacity: 0,
  y: 20,
  duration: 0.6,
  stagger: 0.05,
  ease: "power2.out",
});

// Cartes de contact
gsap.utils.toArray(".contact-card").forEach((card, i) => {
  gsap.from(card, {
    scrollTrigger: {
      trigger: card,
      start: "top 80%",
    },
    opacity: 0,
    y: 40,
    duration: 0.8,
    delay: i * 0.05,
    ease: "power2.out",
  });
});


// Formulaire de contact (validation + envoi AJAX)
document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("contact-form");
  const feedback = document.getElementById("form-feedback");

  if (!form || !feedback) return;

  const fields = ["name", "email", "message"];

  form.addEventListener("submit", async (e) => {
    e.preventDefault(); 

    feedback.textContent = "";
    feedback.style.color = "#d3d3dd";

    let hasError = false;

    // Réinitialise l’état visuel des champs
    fields.forEach((fieldName) => {
      const field = form.elements[fieldName];
      if (!field) return;
      field.classList.remove("input-error");
    });

    // Vérifie les champs vides
    fields.forEach((fieldName) => {
      const field = form.elements[fieldName];
      if (!field) return;

      if (!field.value.trim()) {
        hasError = true;
        field.classList.add("input-error");
      }
    });

    // Vérifie le format de l’email
    const emailField = form.elements["email"];
    const emailValue = emailField ? emailField.value.trim() : "";
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (emailValue && !emailPattern.test(emailValue)) {
      hasError = true;
      emailField.classList.add("input-error");
    }

    if (hasError) {
      feedback.textContent = "Certains champs sont invalides.";
      feedback.style.color = "#ff7b7b";
      return;
    }

    // Si tout est OK : envoi au backend (send_mail.php)
    feedback.textContent = "Envoi en cours...";
    feedback.style.color = "#d3d3dd";

    const formData = new FormData(form);

    try {
      const response = await fetch(form.action, {
        method: "POST",
        body: formData,
      });

      const data = await response.json();

      if (data.success) {
        feedback.textContent =
          data.message || "Merci ! Votre message a bien été envoyé.";
        feedback.style.color = "#b9ffd1";
        form.reset();
      } else {
        if (data.errors) {
          Object.keys(data.errors).forEach((key) => {
            const field = form.elements[key];
            if (field) {
              field.classList.add("input-error");
            }
          });
        }

        feedback.textContent =
          data.message ||
          "Une erreur est survenue lors de l’envoi du message. Merci de réessayer.";
        feedback.style.color = "#ff7b7b";
      }
    } catch (err) {
      console.error(err);
      feedback.textContent =
        "Erreur réseau : impossible d’envoyer le message pour le moment.";
      feedback.style.color = "#ff7b7b";
    }
  });
});

// Halo autour de la photo
gsap.to(".about-photo-glow", {
  scale: 1.3,
  opacity: 1,
  duration: 2,
  repeat: -1,
  yoyo: true,
  ease: "power2.inOut",
});

// Orbes HERO – mouvement libre + rebonds bords + collisions
const hero = document.getElementById("hero");
const heroOrbs = document.querySelectorAll(".hero-orb");

if (hero && heroOrbs.length > 0) {
  let areaRect = hero.getBoundingClientRect();

  const orbData = [];

  heroOrbs.forEach((orb) => {
    const orbRect = orb.getBoundingClientRect();
    const size = orbRect.width;

    // position initiale de l’orbe dans le repère du hero
    const startX = orbRect.left - areaRect.left;
    const startY = orbRect.top - areaRect.top;

    // On neutralise left/top et on contrôle tout via x/y
    gsap.set(orb, { left: 0, top: 0, x: startX, y: startY });

    const vx = (Math.random() * 1.5 + 0.8) * (Math.random() < 0.5 ? -1 : 1);
    const vy = (Math.random() * 1.5 + 0.8) * (Math.random() < 0.5 ? -1 : 1);

    orbData.push({
      orb,
      x: startX,
      y: startY,
      vx,
      vy,
      size,
    });
  });

  function animateOrbs() {
    // recalcule la taille du hero au cas où (responsive)
    areaRect = hero.getBoundingClientRect();

    // Mouvements + rebonds bords
    for (let i = 0; i < orbData.length; i++) {
      const o = orbData[i];

      o.x += o.vx;
      o.y += o.vy;

      // rebond sur les bords (0 → width - size)
      if (o.x <= 0 || o.x + o.size >= areaRect.width) {
        o.vx *= -1;
        o.x = Math.max(0, Math.min(o.x, areaRect.width - o.size));
      }
      if (o.y <= 0 || o.y + o.size >= areaRect.height) {
        o.vy *= -1;
        o.y = Math.max(0, Math.min(o.y, areaRect.height - o.size));
      }
    }

    // Collisions entre orbes (réponse simple type "rebond")
    for (let i = 0; i < orbData.length; i++) {
      for (let j = i + 1; j < orbData.length; j++) {
        const a = orbData[i];
        const b = orbData[j];

        const ax = a.x + a.size / 2;
        const ay = a.y + a.size / 2;
        const bx = b.x + b.size / 2;
        const by = b.y + b.size / 2;

        const dx = ax - bx;
        const dy = ay - by;
        const dist = Math.sqrt(dx * dx + dy * dy);
        const minDist = (a.size + b.size) / 2;

        if (dist > 0 && dist < minDist) {
          // vecteur normal
          const nx = dx / dist;
          const ny = dy / dist;

          // léger "push" pour séparer les deux orbes
          const overlap = minDist - dist;
          a.x += (nx * overlap) / 2;
          a.y += (ny * overlap) / 2;
          b.x -= (nx * overlap) / 2;
          b.y -= (ny * overlap) / 2;

          // inversion simple des vitesses le long de la normale
          const avn = a.vx * nx + a.vy * ny;
          const bvn = b.vx * nx + b.vy * ny;

          const impulse = (bvn - avn) * 0.8;

          a.vx += impulse * nx;
          a.vy += impulse * ny;
          b.vx -= impulse * nx;
          b.vy -= impulse * ny;
        }
      }
    }

    // Application visuelle
    orbData.forEach((o) => {
      gsap.set(o.orb, { x: o.x, y: o.y });
    });

    requestAnimationFrame(animateOrbs);
  }

  animateOrbs();
}

// Animations spécifiques à la page Parcours
if (document.body.classList.contains("page-parcours")) {
  gsap.registerPlugin(ScrollTrigger);

  // Avatar + titre
  gsap.from(".parcours-avatar", {
    y: -30,
    opacity: 0,
    duration: 0.8,
    ease: "power3.out",
  });

  gsap.from([".parcours-title", ".parcours-subtitle"], {
    y: 30,
    opacity: 0,
    duration: 0.8,
    ease: "power3.out",
    stagger: 0.15,
    delay: 0.1,
  });

  // Glow de l'avatar (respiration légère)
  gsap.to(".parcours-avatar-glow", {
    scale: 1.2,
    opacity: 0.9,
    duration: 2.5,
    repeat: -1,
    yoyo: true,
    ease: "sine.inOut",
  });

  // Carte formation actuelle
  gsap.from(".formation-card", {
    y: 40,
    opacity: 0,
    duration: 0.9,
    ease: "power3.out",
    delay: 0.2,
  });

  // Timeline : apparition des cartes au scroll
  gsap.utils.toArray(".timeline-item").forEach((item, index) => {
    gsap.from(item.querySelector(".timeline-card"), {
      scrollTrigger: {
        trigger: item,
        start: "top 80%",
      },
      x: 40,
      opacity: 0,
      duration: 0.8,
      ease: "power3.out",
      delay: index * 0.05,
    });
  });

  // Bloc "Pourquoi le développement web ?"
  gsap.from(".why-card", {
    scrollTrigger: {
      trigger: ".why-card",
      start: "top 80%",
    },
    y: 50,
    opacity: 0,
    duration: 0.9,
    ease: "power3.out",
  });

  gsap.from(".why-item", {
    scrollTrigger: {
      trigger: ".why-grid",
      start: "top 80%",
    },
    y: 25,
    opacity: 0,
    duration: 0.7,
    stagger: 0.1,
    ease: "power2.out",
  });

  gsap.from(".why-quote", {
    scrollTrigger: {
      trigger: ".why-quote",
      start: "top 85%",
    },
    opacity: 0,
    y: 15,
    duration: 0.6,
    ease: "power2.out",
  });
}
