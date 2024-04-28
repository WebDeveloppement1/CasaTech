function valideform() {
    var element1 = document.forms["form"]["s-ibs"].value;
    var element2 = document.forms["form"]["s-t"].value;
    var element3 = document.forms["form"]["s-a"].value;

    if (element1 === "") {
        alert("Veuillez choisir une option pour s-ibs.");
        document.forms["form"]["s-ibs"].focus();
        return false;
    }
    if (element2 === "") {
        alert("Veuillez choisir une option pour s-t.");
        document.forms["form"]["s-t"].focus();
        return false;
    }
    if (element3 === "") {
        alert("Veuillez choisir une option pour s-a.");
        document.forms["form"]["s-a"].focus();
        return false;
    }

    return true;
}
