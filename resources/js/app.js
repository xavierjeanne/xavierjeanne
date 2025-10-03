document.addEventListener("DOMContentLoaded", () => {
  const elements = document.querySelectorAll(".fade-in");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
      } else {
        entry.target.classList.remove("show");
      }
    });
  }, { threshold: 0.2 });

  elements.forEach(el => observer.observe(el));

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


