window.addEventListener("DOMContentLoaded", () => {
  const opgeslagenThema = localStorage.getItem("thema");
  if (opgeslagenThema) {
    document.documentElement.setAttribute("data-theme", opgeslagenThema);
  }
});

document.querySelector(".knop").addEventListener("click", lightdark);

function lightdark(event) {
  let huidigThema = document.documentElement.getAttribute("data-theme");
  let nieuwThema = huidigThema === "dark" ? "light" : "dark";
  document.documentElement.setAttribute("data-theme", nieuwThema);
  localStorage.setItem("thema", nieuwThema);
}

const hamburgerKnop = document.querySelector("#burger-knop");
const navbar = document.querySelector(".navbar");

if (hamburgerKnop && navbar) {
  hamburgerKnop.addEventListener("click", () => {
    navbar.classList.toggle("active");
  });
}

const konamiCode = [
  "ArrowUp",
  "ArrowUp",
  "ArrowDown",
  "ArrowDown",
  "ArrowLeft",
  "ArrowRight",
  "ArrowLeft",
  "ArrowRight",
  "b",
  "a",
];

let konamiIndex = 0;

document.addEventListener("keydown", function (event) {
  if (event.key === konamiCode[konamiIndex]) {
    konamiIndex++;
    if (konamiIndex === konamiCode.length) {
      alert("GEfeliciteerd! Je hebt de Konami Code ingevoerd!");
      konamiIndex = 0;
    }
  } else {
    konamiIndex = 0;
  }
});
