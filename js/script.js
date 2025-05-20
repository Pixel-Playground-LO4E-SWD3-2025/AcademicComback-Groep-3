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
