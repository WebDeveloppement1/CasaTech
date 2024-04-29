<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="evaluation.css" />
    <link rel="stylesheet" href="index.css" />
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
              <a href="index.php"><p>Immobilier Professionnel</p></a>
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

              <a href="trouver.php"> <p>Chercher une agence</p></a>
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
      <!--  -->
      </div>
    </header>
    <div class="titreEval">
      <h1>Evaluer Mon Bien</h1>
    </div>
    <section class="sec-eval">
      <div class="mon-bien-page">
        <div class="evaluer">
            <div class="img-left">
                <img src="./assests/Eval-left-image.jpg" alt="">
            </div>
          <div class="Text">
            <h1 classe="premier">
              Remplissez le formulaire pour être contacté
            </h1>
            <p class="deuxieme">
              Grâce à notre connaissance approfondie du marché local, nous
              sommes en mesure de réaliser une évaluation du marché dans des
              termes précis et en respectans les délais impartis.
            </p>
          </div>
        </div>
        <div class="evaluation-section">
          <div class="evaluation-container">
            <div class="evaluation-form-container">
              <form  onsubmit="return launch_toast()" >
                <div class="first-row-info">
                  <h1>Saisissez les informations de votre bien</h1>

                  <div class="wrap-sl-info-bien">
                    <div class="twofirst-select">
                      <select id="vl" class="info-bien-sl" >
                        <option disabled selected hidden>vente ou louer</option>
                        <option value="vente">vente</option>
                        <option value="louer">louer</option>
                      </select>
                      <select id="typol" class="sl-typologie">
                        <option disabled selected hidden>typologie</option>
                        <option value="villa">villa</option>
                        <option value="appartement">appartement</option>
                      </select>
                    </div>
                    <div class="sl-agence">
                      <select id="agc" class="agence">
                        <option disabled selected hidden >agence</option>
                        <option value="ain-zagh">agence ain zaghouan</option>
                        <option value="manar">agence manar</option>
                        <option value="ariana">agence ariana</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="second-row-donne">
                  <div><h1>inserer vos donnée</h1></div>

                  <div classe="">
                    <div class="inp-nom-prenom">
                      <input type="text" id="nom"  class="nom" placeholder="nom" />
                      <input type="text" id="prenom"  class="prenom" placeholder="prenom" />
                      <br />
                    </div>

                    <div class="inp-mail-numb">
                      <input
                        type="email"
                        class="input"
                        name="email"
                        id="email"
                        placeholder="entrer votre e-mail"
                        required
                      />
                      <input id="num" type="number"  placeholder=" + 216 " />
                    </div>
                  </div>

                  <div class="inp-msg-are">
                    <h1>laissez votre message</h1>
                    <!-- <input type="text" placeholder="meesage" /> -->
                    <textarea
                      name=""
                      placeholder="message"
                      id="ta"
                      class="message"
                      cols="30"
                      rows="10"
                    ></textarea>
                  </div>
                </div>
                <br />
                <!-- <div class="submit-query-wrap">
                  <button
                    class="button-vld"
                    id="btn-sbmt"
                    onclick="launch_toast()"
                  >
                    submit query
                  </button>
                </div> -->
                
                <div class="button-vld">
                  <span id="error">Error msg</span>
                <input type="submit" value="submit">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="footerWrapper">
        <div class="upper">infos</div>
        <div class="bottom">Donnees</div>
      </div>
    </footer>
    <div id="toast">
      <div id="img">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="206"
          height="206"
          fill="green"
          class="bi bi-check2-circle"
          viewBox="0 0 16 16"
        >
          <path
            d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0"
          />
          <path
            d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"
          />
        </svg>
      </div>
      <div id="desc">donnée envoyée avec succées</div>
    </div>
  </body>
  <script src="scriptEval.js"></script>
</html>