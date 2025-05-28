document.getElementById("unamebutton").addEventListener("click", function () {
  document.getElementById("wachtwoord").style.display = "none";
  document.getElementById("uname").style.display = "block";
});
document.getElementById("wachtbutton").addEventListener("click", function () {
  document.getElementById("wachtwoord").style.display = "block";
  document.getElementById("uname").style.display = "none";
});
// document.getElementById("wachtbutton").addEventListener("click", function () {
//   document.getElementById("wachtbutton").style.display = "block";
//   document.getElementById("unamebutton").style.display = "none";
// });
