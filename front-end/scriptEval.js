function launch_toast() {
  var form = document.querySelector("form");
  var vl = document.getElementById("vl");
  var typol = document.getElementById("typol");
  var agc = document.getElementById("agc");
  if (vl.selectedIndex < 1) {
    alert("choisir vente ou location");
    return false;
  } else if (typol.selectedIndex < 1) {
    alert("choisir le type de logement");
    return false;
  } else if (agc.selectedIndex < 1) {
    alert("choisir l'agence");
    return false;
  } else {
    var x = document.getElementById("toast");
    x.className = "show";
    setTimeout(function () {
      x.className = x.className.replace("show", "");
      window.location.href = "index.html";
    }, 3000);
  }
  return false;
}
