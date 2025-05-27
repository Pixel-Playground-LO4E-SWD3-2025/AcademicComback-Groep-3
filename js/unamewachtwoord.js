document.getElementById("unamebutton").addEventListener("click", function () {
  document.getElementById("unamebutton").style.display = "block";
  document.getElementById("wachtbutton").style.display = "none";
});
document.getElementById("wachtbutton").addEventListener("click", function () {
  document.getElementById("wachtbutton").style.display = "block";
  document.getElementById("unamebutton").style.display = "none";
});
