const form = document.getElementById("friendForm");
const bevestigBox = document.getElementById("bevestigBox");
const bevestigJa = document.getElementById("bevestigJa");
const bevestigNee = document.getElementById("bevestigNee");

let submitToestaan = false;

form.addEventListener("submit", function (e) {
  if (!submitToestaan) {
    e.preventDefault();
    bevestigBox.style.display = "block";
  }
});

bevestigJa.addEventListener("click", function () {
  bevestigBox.style.display = "none";
  submitToestaan = true;
  form.submit(); // Dit verstuurt het formulier
});

bevestigNee.addEventListener("click", () => {
  bevestigBox.style.display = "none";
});