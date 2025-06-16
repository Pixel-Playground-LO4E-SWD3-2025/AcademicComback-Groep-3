// Check of er een thema is opgeslagen en zet 'm
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
