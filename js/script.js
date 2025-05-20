const slides = document.querySelectorAll(".slide");

let currentSlide = 0;

function showSlide() {
  for (let slide of slides) {
    slide.style.display = "none";
  }
  slides[currentSlide].style.display = "block";
  currentSlide++;

  if (currentSlide == slides.length) {
    currentSlide = 0;
  }
}

showSlide();
setInterval(showSlide, 3000);
// showSlide();
// showSlide();
// showSlide();
// showslide();
document.querySelector(".knop").addEventListener("click", lightdark);

function lightdark(event) {
  if (document.documentElement.getAttribute("data-theme") == "dark") {
    document.documentElement.setAttribute("data-theme", "light");
  } else {
    document.documentElement.setAttribute("data-theme", "dark");
  }
}
