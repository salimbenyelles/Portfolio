document.addEventListener("DOMContentLoaded", () => {
  const words = ["Développeur Mobile", "Développeur Web"];
  const typeTarget = document.querySelector(".typewriter");

  if (!typeTarget) return; // ✅ Évite l'erreur si l'élément est absent

  let wordIndex = 0;
  let letterIndex = 0;
  let isDeleting = false;

  function type() {
    const currentWord = words[wordIndex];
    const visibleLetters = currentWord.substring(0, letterIndex);
    typeTarget.textContent = visibleLetters;

    if (!isDeleting) {
      if (letterIndex < currentWord.length) {
        letterIndex++;
      } else {
        isDeleting = true;
        setTimeout(type, 1500);
        return;
      }
    } else {
      if (letterIndex > 0) {
        letterIndex--;
      } else {
        isDeleting = false;
        wordIndex = (wordIndex + 1) % words.length;
      }
    }

    setTimeout(type, isDeleting ? 60 : 100);
  }

  type(); // Démarrer l'effet
});

document.addEventListener("DOMContentLoaded", () => {
  const filterButtons = document.querySelectorAll(".filter-btn");
  const projects = document.querySelectorAll(".project-card");

  filterButtons.forEach(button => {
    button.addEventListener("click", () => {
      const filter = button.getAttribute("data-filter");

      projects.forEach(project => {
        if (filter === "all" || project.classList.contains(filter)) {
          project.style.display = "block";
        } else {
          project.style.display = "none";
        }
      });
    });
  });
});
