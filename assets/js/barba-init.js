document.addEventListener("DOMContentLoaded", function () {
  // Crea l'overlay nero una sola volta
  let overlay = document.createElement("div");
  overlay.style.position = "fixed";
  overlay.style.top = 0;
  overlay.style.left = 0;
  overlay.style.width = "100%";
  overlay.style.height = "100%";
  overlay.style.backgroundColor = "#fff";
  overlay.style.zIndex = 9999;
  overlay.style.opacity = 0;
  overlay.style.pointerEvents = "none";
  document.body.appendChild(overlay);

  barba.init({
    transitions: [
      {
        name: "fade-black",
        async leave(data) {
          // Mostra overlay nero in fade-in
          await gsap.to(overlay, {
            opacity: 1,
            duration: 0.5,
            ease: "power2.inOut",
          });
          data.current.container.remove();
        },
        async enter(data) {
          // Fade-out dell’overlay nero
          await gsap.to(overlay, {
            opacity: 0,
            duration: 0.5,
            ease: "power2.inOut",
          });
        },
      },
    ],
  });
});
