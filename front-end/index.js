var modal = document.getElementById("myModal");
var btn = document.getElementById("signIn-show");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function () {
  // modal.style.display = "block";
  modal.classList.add("show");
};
span.onclick = function () {
  // modal.style.display = "none";
  modal.classList.remove("show");
};
window.onclick = function (event) {
  if (event.target == modal) {
    // modal.style.display = "none";
    modal.classList.remove("show");
  }
};

function validSignInIndex() {
  var email = document.getElementById("mail").value;
  var password = document.getElementById("password").value;
  var nom = document.getElementById("name").value;
  var tel = document.getElementById("tel").value;
  console.log(email, password, nom, tel);
  if (email == "" || password == "" || nom == "" || tel == "") {
    alert("Please fill all the fields");
    return false;
  }
  if (isNaN(tel) || tel.length != 8) {
    alert("Please enter a valid phone number");
    return false;
  }
  return true;
}
