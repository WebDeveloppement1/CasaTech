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
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> //to not redirect me to another page evaluer mon bien ala khater el anmiations 
  </head>
  <body>
    <header class="wrapper-header">
      <nav class="wrapper-nav">
        <div class="logo">
          <img src="./assests/logo.png" alt="" height="120" width="120" />
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
              <form action="http://127.0.0.1/edsa-casatech/back-end/evaluerbien.php" method="post" onsubmit="return launch_toast()" >
                <div class="first-row-info">
                  <h1>Saisissez les informations de votre bien</h1>
                  <div class="wrap-sl-info-bien">
                    <div class="twofirst-select">
                      <select id="vl" name="type" class="info-bien-sl" >
                        <option disabled selected hidden>vente ou louer</option>
                        <option value="vente">vente</option>
                        <option value="louer">louer</option>
                      </select>
                      <select id="typol" name="typologie" class="sl-typologie">
                        <option disabled selected hidden>typologie</option>
                        <option value="villa">villa</option>
                        <option value="appartement">appartement</option>
                      </select>
                    </div>
                    <div class="sl-agence">
                      <select id="agc" name="agence" class="agence">
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
                      <input type="text"  id="nom"  class="nom" placeholder="nom" />
                      <input type="text" id="prenom"  class="prenom" placeholder="prenom" />
                      <br />
                    </div>

                    <div class="inp-mail-numb">
                      <input
                        type="email"
                        class="input"
                        name="mail"
                        id="email"
                        placeholder="entrer votre e-mail"
                        required
                      />
                      <input id="num" type="number" name="tel"  placeholder=" + 216 " />
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
                      name="message"
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
        <div class="upper">
          <div class="row">
            <div class="logo">
              <img src="./assests/logo.png" alt="" height="120" width="120" />
            </div>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
          <div class="siege_national">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
            >
              <g transform="translate(-556 -250)">
                <path
                  d="M15,17.75H5A5.869,5.869,0,0,1,.865,16.362,5.686,5.686,0,0,1-.75,12V5A5.686,5.686,0,0,1,.865.638,5.869,5.869,0,0,1,5-.75H15A5.869,5.869,0,0,1,19.135.638,5.686,5.686,0,0,1,20.75,5v7a5.686,5.686,0,0,1-1.615,4.362A5.869,5.869,0,0,1,15,17.75ZM5,.75a4.442,4.442,0,0,0-3.115.987A4.271,4.271,0,0,0,.75,5v7a4.271,4.271,0,0,0,1.135,3.263A4.442,4.442,0,0,0,5,16.25H15a4.442,4.442,0,0,0,3.115-.987A4.271,4.271,0,0,0,19.25,12V5a4.271,4.271,0,0,0-1.135-3.263A4.442,4.442,0,0,0,15,.75Z"
                  transform="translate(558 253.5)"
                  fill="white"
                />
                <path
                  d="M4.995,3.865a3.761,3.761,0,0,1-2.342-.778L-.469.585A.75.75,0,0,1-.585-.469.75.75,0,0,1,.469-.585l3.12,2.5a2.4,2.4,0,0,0,2.814,0l3.129-2.5a.75.75,0,0,1,1.054.118A.75.75,0,0,1,10.468.586l-3.13,2.5A3.761,3.761,0,0,1,4.995,3.865Z"
                  transform="translate(563 259)"
                  fill="white"
                />
                <path
                  d="M0,0H24V24H0Z"
                  transform="translate(556 250)"
                  fill="white"
                  opacity="0"
                />
              </g>
            </svg>
            <ul>
              <li>
                <a href="https://www.tecnocasagroup.tn/siege" target="_blank"
                  >Siège national</a
                >
              </li>
              <li>
                <a href="#" class="small" target="_blank">CasaTech.tn</a>
              </li>
            </ul>
          </div>
          <div class="download">
            <div class="headerDown">
              <svg
                id="get_app-24px"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
              >
                <path
                  id="Tracciato_1484"
                  data-name="Tracciato 1484"
                  d="M0,0H24V24H0Z"
                  fill="none"
                />
                <path
                  id="Tracciato_1485"
                  data-name="Tracciato 1485"
                  d="M13,5v6h1.17L12,13.17,9.83,11H11V5h2m2-2H9V9H5l7,7,7-7H15Zm4,15H5v2H19Z"
                  fill="#e2edf0"
                />
              </svg>
              <p class="telechargement">télécharger l'application</p>
            </div>

            <div class="list-appli">
              <ul>
                <li>
                  <a
                    href="https://play.google.com/store/games?hl=fr&gl=US"
                    target="_blank"
                  >
                    <img
                      alt="android"
                      src="assests/android.png"
                      width="100"
                      height="30"
                  /></a>
                </li>
                <li>
                  <a
                    href="https://apps.apple.com/us/app/tecnocasa-tunisia/id1508748425"
                    target="_blank"
                  >
                    <img
                      alt="android"
                      src="./assests/ios.png"
                      width="100"
                      height="30"
                  /></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="bottom">
          <p class="lieu">
            2024 "Siege Master Franchise Tunisie" Tecno Real Estate - 72, Avenue
            Mouaouia Ibn Abi Sofiane, El Menzah 7, Ariana 2037 Tunis
          </p>
        </div>
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
