document.querySelector(".knop").addEventListener("click", lightdark);

function lightdark(event) {
  if (document.documentElement.getAttribute("data-theme") == "dark") {
    document.documentElement.setAttribute("data-theme", "light");
  } else {
    document.documentElement.setAttribute("data-theme", "dark");
  }
}

const hamburgerKnop = document.querySelector("#burger-knop");
const navbar = document.querySelector(".navbar");

if (hamburgerKnop && navbar) {
  hamburgerKnop.addEventListener("click", () => {
    navbar.classList.toggle("active");
  });
}
