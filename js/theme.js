document.querySelector(".knop").addEventListener("click", lightdark);

function lightdark(event) {
  if (document.documentElement.getAttribute("data-theme") == "dark") {
    document.documentElement.setAttribute("data-theme", "light");
  } else {
    document.documentElement.setAttribute("data-theme", "dark");
  }
}
