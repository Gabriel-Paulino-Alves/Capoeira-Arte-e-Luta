/* Capoeira Arte Luta — interactions */
(function () {
  "use strict";

  /* ---- Mobile menu ---- */
  var toggle = document.querySelector("[data-menu-toggle]");
  var overlay = document.querySelector("[data-menu]");
  var closeBtn = document.querySelector("[data-menu-close]");

  function openMenu() {
    if (!overlay) return;
    overlay.classList.add("open");
    document.body.style.overflow = "hidden";
    overlay.setAttribute("aria-hidden", "false");
  }
  function closeMenu() {
    if (!overlay) return;
    overlay.classList.remove("open");
    document.body.style.overflow = "";
    overlay.setAttribute("aria-hidden", "true");
  }
  if (toggle) toggle.addEventListener("click", openMenu);
  if (closeBtn) closeBtn.addEventListener("click", closeMenu);
  if (overlay) {
    overlay.querySelectorAll("a").forEach(function (a) {
      a.addEventListener("click", closeMenu);
    });
  }
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") closeMenu();
  });

  /* ---- Header shadow / compact on scroll ---- */
  var header = document.querySelector(".site-header");
  var lastY = 0;
  function onScroll() {
    var y = window.scrollY || window.pageYOffset;
    if (header) {
      if (y > 12) header.style.background = "color-mix(in srgb, var(--paper) 96%, transparent)";
      else header.style.background = "color-mix(in srgb, var(--paper) 88%, transparent)";
    }
    lastY = y;
  }
  window.addEventListener("scroll", onScroll, { passive: true });
  onScroll();

  /* ---- Reveal on scroll ---- */
  var revealEls = document.querySelectorAll(".reveal");
  if ("IntersectionObserver" in window && revealEls.length) {
    var io = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (en) {
          if (en.isIntersecting) {
            en.target.classList.add("in");
            io.unobserve(en.target);
          }
        });
      },
      { threshold: 0.12, rootMargin: "0px 0px -8% 0px" }
    );
    revealEls.forEach(function (el) { io.observe(el); });
  } else {
    revealEls.forEach(function (el) { el.classList.add("in"); });
  }

  /* ---- Gallery filter ---- */
  var filterBtns = document.querySelectorAll(".gal-filter button");
  var galItems = document.querySelectorAll(".gal-item");
  if (filterBtns.length) {
    filterBtns.forEach(function (btn) {
      btn.addEventListener("click", function () {
        filterBtns.forEach(function (b) { b.classList.remove("active"); });
        btn.classList.add("active");
        var cat = btn.getAttribute("data-filter");
        galItems.forEach(function (it) {
          var show = cat === "all" || it.getAttribute("data-cat") === cat;
          it.style.display = show ? "" : "none";
        });
      });
    });
  }

  /* ---- Contact form -> mailto ---- */
  var form = document.querySelector("[data-contact-form]");
  if (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();
      var data = new FormData(form);
      var nome = (data.get("nome") || "").toString().trim();
      var email = (data.get("email") || "").toString().trim();
      var origem = (data.get("origem") || "").toString().trim();
      var msg = (data.get("mensagem") || "").toString().trim();
      var subject = "Contato pelo site — " + (nome || "Novo contato");
      var body =
        "Nome: " + nome + "\n" +
        "E-mail: " + email + "\n" +
        "Como nos encontrou: " + origem + "\n\n" +
        "Mensagem:\n" + msg;
      var status = form.querySelector("[data-form-status]");
      window.location.href =
        "mailto:aristeumestrinho@gmail.com?subject=" +
        encodeURIComponent(subject) +
        "&body=" +
        encodeURIComponent(body);
      if (status) {
        status.textContent =
          "Abrindo seu aplicativo de e-mail… Se nada acontecer, escreva para aristeumestrinho@gmail.com ou chame no WhatsApp.";
        status.style.display = "block";
      }
    });
  }

  /* ---- Footer year ---- */
  var yEl = document.querySelector("[data-year]");
  if (yEl) yEl.textContent = new Date().getFullYear();
})();
