<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS -->
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="sign-in.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>CasaTech</title>
  </head>
  <body>
    <header class="wrapper-header">
      <nav class="wrapper-nav">
        <div class="logo">
          <img src="./assests/tecnocasa-tn.svg" alt="" />
        </div>
        <div class="list">
          <ul>
            <li class="wrap-list">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="25"
                height="25"
                fill="currentColor"
                class="bi bi-suitcase-lg"
                viewBox="0 0 16 16"
              >
                <path
                  d="M5 2a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2h3.5A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5H14a.5.5 0 0 1-1 0H3a.5.5 0 0 1-1 0h-.5A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2zm1 0h4a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1M1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5H3V3zM15 12.5v-9a.5.5 0 0 0-.5-.5H13v10h1.5a.5.5 0 0 0 .5-.5m-3 .5V3H4v10z"
                />
              </svg>
              <a href="#"><p>Immobilier Professionnel</p></a>
            </li>
            <li class="wrap-list">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="25"
                height="25"
                fill="currentColor"
                class="bi bi-house-add"
                viewBox="0 0 16 16"
              >
                <path
                  d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h4a.5.5 0 1 0 0-1h-4a.5.5 0 0 1-.5-.5V7.207l5-5 6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"
                />
                <path
                  d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 1 0 1 0v-1h1a.5.5 0 1 0 0-1h-1v-1a.5.5 0 0 0-.5-.5"
                />
              </svg>
              <a href="evaluation.php"> <p>Evaluer mon bien</p></a>
            </li>
            <li class="wrap-list">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="25"
                height="25"
                fill="currentColor"
                class="bi bi-search"
                viewBox="0 0 16 16"
              >
                <path
                  d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"
                />
              </svg>

              <a href="trouver.php">
                <p>Chercher une agence</p></a
              >
            </li>
            <?php if(isset($_SESSION["username"])): ?>
              <li class="wrap-list">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="25"
                height="25"
                fill="currentColor"
                class="bi bi-person"
                viewBox="0 0 16 16"
              >
                <path
                  d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"
                />
              </svg>
              <a href="http://127.0.0.1/edsa-casatech/back-end/deconnecter.php"> <p>Se Deconnecter</p></a>
            </li>
              
              <?php else: ?>

              <li class="wrap-list">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="25"
                  height="25"
                  fill="currentColor"
                  class="bi bi-person"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"
                  />
                </svg>
                <a href="connecter.php"> <p>Se connecter</p></a>
              </li>
              <?php endif;
              ?>
          </ul>
        </div>
      </nav>
      <div class="bienvenu">
        <div class="wrapperCenter">
          <div class="TextAcc">Welcome <?php echo isset($_SESSION["username"]) ? $_SESSION["username"] : '' ?> </div>
          <div class="searchWrapper">
            <div class="">
              <select class="region">
                <option class="tunis1">région</option>
                <option class="tunis1">tunis</option>
                <option class="tunis2">ariana</option>
                <option class="manar">mannouba</option>
                <option class="ariana">ben arous</option>
                <option class="manouba">nabeul</option>
              </select>
            </div>
            <div classe="type_location">
              <select class="type">
                <option class="résidentiel">résidentiel</option>
                <option class="immobilier">immobilier professionel</option>
              </select>
            </div>
            <div>
              <select class="inputAcc">
                <option>municipalités</option>
                <option>tunis1</option>
                <option>aouina</option>
                <option>manar</option>
                <option>rades</option>
                <option>mrezga</option>
              </select>
            </div>
            <div class="search-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill=""
                class="bi bi-search"
                viewBox="0.1 0 16 16"
              >
                <path
                  d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"
                />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </header>
    <br />
    <div class="dessin_proximité">
      <div class="Dessin">
        <img
          class="image1"
          src="./assests/multiple-map.png"
          alt=""
          width="200"
          height="200"
        />
        <div class="img-description">
          <h1 class="titre">Dessin multiple sur carte!</h1>
          <p class="paragraphe1">
            Êtes-vous intéressé par plus d'une zone ? Vous pouvez dessiner
            plusieurs zones en même temps pour rechercher le bien dans les zones
            qui vous intéressent le plus. Identifiez les zones que vous préférez
            et dessinez-les sur la carte pour lancer immédiatement la recherche
            qui correspond à vos besoins.
          </p>
        </div>
      </div>
      <div class="Dessin">
        <img
          class="image1"
          src="./assests/poi.png"
          alt=""
          width="200"
          height="200"
        />
        <div class="img-description">
          <h1 class="titre">À proximité.</h1>
          <p class="paragraphe1">
            Découvrez tous les points d'intérêt situés à proximité du bien que
            vous avez choisi. En sélectionnant un bien,vous saurez précisément
            de quels services il est entouré et la distance réelle des
            pharmacies, des bureaux de poste, des commerces, des agences
            bancaires et bien plus encore.
          </p>
        </div>
      </div>
    </div>

    <div class="horraire">
      <img class="image3" src="./assests/horraire.png" alt="" />
    </div>
    <br />
    <br />
    <div class="services">
      <div class="CasaTech">
        <h1 class="titre4">services CasaTech</h1>
      </div>
      <div class="ensemble">
        <div class="visite">
          <div class="visiteElements">
            <img
              class="image4"
              src="./assests/visite.png"
              alt=""
              width="300px"
            />
            <h1 class="titre3">visite virtuelle</h1>
            <p class="paragraphe3">
              visitez les maison dans le confort de votre maison !
            </p>
            <a href="#"
              ><p><a href="">En savoir plus</a></p></a
            >
          </div>
        </div>
        <div class="visite">
          <div class="visiteElements">
            <img
              class="image4"
              src="./assests/biiiiiiii.jpg"
              alt=""
              width="310px"
            />
            <h1 class="titre3">evaluation des biens</h1>
            <p class="paragraphe3">
              profitez d'une Evaluertion gratuite de votre bein !
            </p>
            <a href="#"
              ><p><strong>savoir plus</strong></p></a
            >
          </div>
        </div>
      </div>
    </div>
    <br />
    <div class="inscription-section">
      <div class="inscription">
        <img
          class="image6"
          src="./assests/blob.jpg"
          alt=""
          width="600"
          height="450"
        />
      </div>
      <div class="Text">
        <h1 class="titre6">inscrivez-vous !</h1>
        <p class="paragraphe5">
          Trouvez votre prochain chez-vous dès maintenant ! Inscrivez-vous pour
          accéder à un large choix de maisons à louer ou à vendre. Parcourez nos
          annonces détaillées, découvrez des biens uniques et contactez
          directement les propriétaires ou les agents immobiliers. Ne manquez
          pas l'opportunité de trouver la maison de vos rêves ou d'investir dans
          une propriété exceptionnelle. Inscrivez-vous dès aujourd'hui !"
        </p>
        <a href="#" id="signIn-show"> s'inscrire </a>
      </div>
    </div>
    <br />
    <br />
    <div class="villes">
      <div class="containerImgs">
        <div class="imgVille">
          <h3 class="VilleName">Tunis</h3>
          <img src="./assests/jaxucs2k.png" alt="" />
          <button class="ensavoirPlus">
            <a
              href="https://www.tecnocasa.tn/vendre/immeubles/nord-est-ne/grand-tunis.html"
              >En savoir plus</a
            >
          </button>
        </div>
        <div class="imgVille">
          <h3 class="VilleName">Hammamet</h3>
          <img src="./assests/6l1a3to1.png" alt="" />
          <button class="ensavoirPlus">
            <a
              href="https://www.tecnocasa.tn/vendre/immeubles/nord-est-ne/cap-bon/hammamet.html"
              >En savoir plus</a
            >
          </button>
        </div>
        <div class="imgVille">
          <h3 class="VilleName">Sousse</h3>
          <img src="./assests/kc1u4mif.png" alt="" />
          <button class="ensavoirPlus">
            <a
              href="https://www.tecnocasa.tn/vendre/immeubles/centre-est-ce/sousse.html"
              >En savoir plus</a
            >
          </button>
        </div>
        <div class="imgVille">
          <h3 class="VilleName">Monastir</h3>
          <img src="./assests/urdwj3qe.png" alt="" />
          <button class="ensavoirPlus">
            <a
              href="https://www.tecnocasa.tn/vendre/immeubles/centre-est-ce/monastir.html"
            >
              En savoir plus</a
            >
          </button>
        </div>
        <div class="imgVille">
          <h3 class="VilleName">Mahdia</h3>
          <img src="./assests/sezg6h5j.png" alt="" />
          <button class="ensavoirPlus">
            <a
              href="https://www.tecnocasa.tn/vendre/immeubles/centre-est-ce/mahdia/mahdia.html"
              >En savoir plus</a
            >
          </button>
        </div>
      </div>
    </div>
    <div class="col-md-12" id="myModal">
      <form action="index.html" method="post" name="FormSign">
        <h1>Sign Up</h1>
        <span class="close">&times;</span>
        <fieldset>
          <legend><span class="number">1</span> Your Basic Info</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name" />
          <label for="email">Email:</label>
          <input type="email" id="mail" name="user_email" />
          <label for="password">Password:</label>
          <input type="password" id="password" name="user_password" />
          <label>Age:</label>
          <input
            type="radio"
            id="under_13"
            value="under_13"
            name="user_age"
          /><label for="under_13" class="light">Under 13</label><br />
          <input
            type="radio"
            id="over_13"
            value="over_13"
            name="user_age"
          /><label for="over_13" class="light">Over 13</label>
        </fieldset>
        <button type="submit">Sign Up</button>
      </form>
    </div>
    <footer>
      <div class="footerWrapper">
        <div class="upper">infos</div>
        <div class="bottom">Donnees</div>
      </div>
    </footer>
  </body>
  <script>
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
  </script>
</html>