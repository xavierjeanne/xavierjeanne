document.addEventListener("DOMContentLoaded", () => {
  const elements = document.querySelectorAll(".fade-in");

  // Configuration différente pour mobile et desktop
  const isMobile = window.innerWidth <= 768;
  const isVerySmall = window.innerWidth <= 480;
  
  // Sur très petits écrans, afficher immédiatement tout le contenu
  if (isVerySmall) {
    elements.forEach(el => el.classList.add('show'));
    return; // Sortir de la fonction, pas besoin d'observer
  }
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
      } else {
        // Ne pas retirer la classe 'show' une fois ajoutée pour éviter les saccades
        // entry.target.classList.remove("show");
      }
    });
  }, { 
    threshold: isMobile ? 0.1 : 0.2,  // Seuil plus bas sur mobile
    rootMargin: isMobile ? '0px 0px -50px 0px' : '0px 0px -100px 0px'  // Marge différente
  });

  elements.forEach(el => observer.observe(el));

  // Debug pour mobile - afficher les éléments après un délai si ils ne sont pas visibles
  if (isMobile) {
    setTimeout(() => {
      elements.forEach(el => {
        if (!el.classList.contains('show')) {
          // Force l'affichage si l'élément n'est pas visible après 2 secondes
          el.classList.add('show');
          console.log('Force show element:', el.id || el.className);
        }
      });
    }, 2000);
  }

  // Vérifier le redimensionnement de la fenêtre
  let resizeTimer;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      // Réinitialiser l'observer après redimensionnement
      observer.disconnect();
      elements.forEach(el => observer.observe(el));
    }, 250);
  });

  const menuBubble = document.getElementById("menuBubble");
  const mobileMenu = document.getElementById("mobileMenu");
  const mobileMenuPanel = document.getElementById("mobileMenuPanel");
  const closeMenu = document.getElementById("closeMenu");

  menuBubble.addEventListener("click", () => {
    mobileMenu.classList.remove("hidden");
    setTimeout(() => {
      mobileMenuPanel.classList.remove("translate-x-full");
    }, 10);
  });

  closeMenu.addEventListener("click", () => {
    mobileMenuPanel.classList.add("translate-x-full");
    setTimeout(() => mobileMenu.classList.add("hidden"), 300);
  });

  document.querySelectorAll("#mobileMenu nav a").forEach(link => {
    link.addEventListener("click", () => {
      mobileMenuPanel.classList.add("translate-x-full");
      setTimeout(() => mobileMenu.classList.add("hidden"), 300);
    });
  });

  mobileMenu.addEventListener("click", (e) => {
    if (e.target === mobileMenu) {
      mobileMenuPanel.classList.add("translate-x-full");
      setTimeout(() => mobileMenu.classList.add("hidden"), 300);
    }
  });
  const backToTop = document.getElementById("backToTop");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
     
      backToTop.classList.remove("hidden");
    } else {

      backToTop.classList.add("hidden");
    }
  });
  backToTop.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
});


