function launch_toast() {
  // var form = document.querySelector("form");
  var vl = document.getElementById("vl");
  var typol = document.getElementById("typol");
  var agc = document.getElementById("agc");
  var err = document.getElementById("error");
  var nom = document.getElementById("nom");
  var prenom = document.getElementById("prenom");
  var email = document.getElementById("email");
  var tel = document.getElementById("num");
  if (vl.selectedIndex < 1) {
    err.innerHTML = "choisir la ville";
    err.style.opacity = "1";
    return false;
  } else if (typol.selectedIndex < 1) {
    err.innerHTML = "choisir le type de logement";
    err.style.opacity = "1";
    return false;
  } else if (agc.selectedIndex < 1) {
    err.innerHTML = "choisir l'agence";
    err.style.opacity = "1";
    return false;
  } else if (nom.value == "") {
    err.innerHTML = "entrer votre nom";
    err.style.opacity = "1";
    return false;
  } else if (!valid(nom)) {
    err.innerHTML = "entrer un nom valide";
    err.style.opacity = "1";
    return false;
  } else if (prenom.value == "" || !valid(prenom)) {
    err.innerHTML = "entrer votre prenom";
    err.style.opacity = "1";
    return false;
  } else if (!valid(prenom)) {
    err.innerHTML = "entrer un prenom valide";
    err.style.opacity = "1";
    return false;
  } else if (email.value == "") {
    err.innerHTML = "entrer votre email";
    err.style.opacity = "1";
    return false;
  } else if (tel.value == "") {
    err.innerHTML = "entrer votre numero de telephone";
    err.style.opacity = "1";
    return false;
  } else if (tel.value.length != 8) {
    err.innerHTML = "longuer du tel doit etre 8";
    err.style.opacity = "1";
    return false;
  } else {
    var x = document.getElementById("toast");
    x.className = "show";
    setTimeout(function () {
      x.className = x.className.replace("show", "");
      window.location.href = "index.php";
    }, 3000);
  }
  return false;
}
function valid(input) {
  var regex = /^[a-zA-Z\s]*$/;
  return regex.test(input.value);
}
