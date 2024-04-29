<?php 
//commencer la session 
session_start();  
//verifier si lutilisateur est connecter
if(!isset($_SESSION['username'])){
    //sauvegarder le message 
    $_SESSION['message'] = "Vous devez vous connecter pour acceder a cette page";

    //rediriger lutilisateur vers la page de connexion
    header("Location: connecter.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS -->
    <link rel="stylesheet" href="trouver.css" />
  </head>
  <body>
    <header class="wrapper-trouver">
      <nav class="wrapper-nav">
        <div class="logo">
          <img src="./assests/logo.png" alt="" height="100" width="100" />
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
              <a class="link" href="index.php"
                ><p>Immobilier Professionnel</p></a
              >
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
              <a class="link" href="evaluation.php">
                <p>Evaluer mon bien</p></a
              >
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

              <a class="link" href="trouver.php">
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
          <p class="TextAcc">
            <span class="phrase"
              >Recherchez l'agence la plus proche de vous</span
            >
          </p>
        </div>
      </div>
    </header>

    <div class="agence">
      <div class="sous_agence">
        <div class="ville">
          <h3 class="icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="19.376"
              height="19.376"
              viewBox="0 0 19.376 19.376"
            >
              <g transform="translate(-428 -188)">
                <g transform="translate(428 188)">
                  <path
                    d="M2.519,5.788A3.269,3.269,0,1,1,5.788,2.519,3.273,3.273,0,0,1,2.519,5.788Zm0-5.038A1.769,1.769,0,1,0,4.288,2.519,1.771,1.771,0,0,0,2.519.75Z"
                    transform="translate(7.169 5.805)"
                    fill="#157638"
                  />
                  <path
                    d="M6.959-.75A8.016,8.016,0,0,1,11.6.7a7.259,7.259,0,0,1,2.855,4.379,9.07,9.07,0,0,1-.8,6.086,15.52,15.52,0,0,1-3.271,4.341c-1.225,1.176-2.281,1.959-3.458,1.959-1.145,0-2.114-.719-3.4-1.96A15.551,15.551,0,0,1,.263,11.164a9.089,9.089,0,0,1-.8-6.09A7.259,7.259,0,0,1,2.32.7,8.012,8.012,0,0,1,6.959-.75Zm-.03,16.718c.571,0,1.295-.461,2.419-1.541C11.48,12.38,13.842,9.155,13,5.413A5.781,5.781,0,0,0,10.73,1.922,6.5,6.5,0,0,0,6.959.75,6.5,6.5,0,0,0,3.193,1.919,5.781,5.781,0,0,0,.927,5.406c-.847,3.741,1.512,6.971,3.64,9.022C5.717,15.536,6.379,15.968,6.929,15.968Z"
                    transform="translate(2.727 1.615)"
                    fill="#157638"
                  />
                  <path
                    d="M0,0H19.376V19.376H0Z"
                    transform="translate(19.376 19.376) rotate(180)"
                    fill="none"
                    opacity="0"
                  />
                </g>
              </g>
            </svg>
            cap-bon
          </h3>
          <ul>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/cap-bon/hammamet/naha2.html"
                class="liens"
                >Hammamet Nord</a
              >
            </li>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/cap-bon/nabeul/naca2.html"
                class="liens"
              >
                nabeul Afh</a
              >
            </li>
          </ul>
          <h3 class="icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="19.376"
              height="19.376"
              viewBox="0 0 19.376 19.376"
            >
              <g transform="translate(-428 -188)">
                <g transform="translate(428 188)">
                  <path
                    d="M2.519,5.788A3.269,3.269,0,1,1,5.788,2.519,3.273,3.273,0,0,1,2.519,5.788Zm0-5.038A1.769,1.769,0,1,0,4.288,2.519,1.771,1.771,0,0,0,2.519.75Z"
                    transform="translate(7.169 5.805)"
                    fill="#157638"
                  />
                  <path
                    d="M6.959-.75A8.016,8.016,0,0,1,11.6.7a7.259,7.259,0,0,1,2.855,4.379,9.07,9.07,0,0,1-.8,6.086,15.52,15.52,0,0,1-3.271,4.341c-1.225,1.176-2.281,1.959-3.458,1.959-1.145,0-2.114-.719-3.4-1.96A15.551,15.551,0,0,1,.263,11.164a9.089,9.089,0,0,1-.8-6.09A7.259,7.259,0,0,1,2.32.7,8.012,8.012,0,0,1,6.959-.75Zm-.03,16.718c.571,0,1.295-.461,2.419-1.541C11.48,12.38,13.842,9.155,13,5.413A5.781,5.781,0,0,0,10.73,1.922,6.5,6.5,0,0,0,6.959.75,6.5,6.5,0,0,0,3.193,1.919,5.781,5.781,0,0,0,.927,5.406c-.847,3.741,1.512,6.971,3.64,9.022C5.717,15.536,6.379,15.968,6.929,15.968Z"
                    transform="translate(2.727 1.615)"
                    fill="#157638"
                  />
                  <path
                    d="M0,0H19.376V19.376H0Z"
                    transform="translate(19.376 19.376) rotate(180)"
                    fill="none"
                    opacity="0"
                  />
                </g>
              </g>
            </svg>
            grand-tunis
          </h3>
          <ul>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/grand-tunis/ain-zaghouan/tuhb2.html"
                class="liens"
              >
                ain-zaghouan</a
              >
            </li>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/grand-tunis/aouina/tuha3.html"
                class="liens"
                >aouina</a
              >
            </li>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/grand-tunis/ariana/arcb2.html"
                class="liens"
                >ariana</a
              >
            </li>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/grand-tunis/el-menzah/tuch1.html"
                class="liens"
                >el-menzah</a
              >
            </li>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/grand-tunis/la-marsa/tugm1.html"
                class="liens"
              >
                la-marsa</a
              >
            </li>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/grand-tunis/la-soukra/tuha4.html"
                class="liens"
              >
                la-soukra</a
              >
            </li>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/grand-tunis/lafayette-centre-ville/tucb1.html"
                class="liens"
                >lafayette-centre-ville</a
              >
            </li>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/grand-tunis/centre-urbain-nord/tucb2.html"
                class="liens"
                >centre-urbain-nord</a
              >
            </li>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/grand-tunis/mutuelleville/tuch3.html"
                class="liens"
                >mutuelleville</a
              >
            </li>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/grand-tunis/ariana/tuha2.html"
                class="liens"
                >ariana</a
              >
            </li>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/grand-tunis/megrine/tucc1.html"
                class="liens"
                >megrine</a
              >
            </li>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/grand-tunis/manar/tuch4.html"
                class="liens"
                >manar</a
              >
            </li>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/grand-tunis/le-kram/tuhb1.html"
                class="liens"
                >le-kram</a
              >
            </li>
          </ul>
        </div>
        <div class="ville">
          <h3 class="icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="19.376"
              height="19.376"
              viewBox="0 0 19.376 19.376"
            >
              <g transform="translate(-428 -188)">
                <g transform="translate(428 188)">
                  <path
                    d="M2.519,5.788A3.269,3.269,0,1,1,5.788,2.519,3.273,3.273,0,0,1,2.519,5.788Zm0-5.038A1.769,1.769,0,1,0,4.288,2.519,1.771,1.771,0,0,0,2.519.75Z"
                    transform="translate(7.169 5.805)"
                    fill="#157638"
                  />
                  <path
                    d="M6.959-.75A8.016,8.016,0,0,1,11.6.7a7.259,7.259,0,0,1,2.855,4.379,9.07,9.07,0,0,1-.8,6.086,15.52,15.52,0,0,1-3.271,4.341c-1.225,1.176-2.281,1.959-3.458,1.959-1.145,0-2.114-.719-3.4-1.96A15.551,15.551,0,0,1,.263,11.164a9.089,9.089,0,0,1-.8-6.09A7.259,7.259,0,0,1,2.32.7,8.012,8.012,0,0,1,6.959-.75Zm-.03,16.718c.571,0,1.295-.461,2.419-1.541C11.48,12.38,13.842,9.155,13,5.413A5.781,5.781,0,0,0,10.73,1.922,6.5,6.5,0,0,0,6.959.75,6.5,6.5,0,0,0,3.193,1.919,5.781,5.781,0,0,0,.927,5.406c-.847,3.741,1.512,6.971,3.64,9.022C5.717,15.536,6.379,15.968,6.929,15.968Z"
                    transform="translate(2.727 1.615)"
                    fill="#157638"
                  />
                  <path
                    d="M0,0H19.376V19.376H0Z"
                    transform="translate(19.376 19.376) rotate(180)"
                    fill="none"
                    opacity="0"
                  />
                </g>
              </g>
            </svg>
            kairouan
          </h3>
          <ul>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/kairouan/kairouan/kair1.html"
                class="lien"
                >kairouan en zone kairouan</a
              >
            </li>
          </ul>
          <h3 class="icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="19.376"
              height="19.376"
              viewBox="0 0 19.376 19.376"
            >
              <g transform="translate(-428 -188)">
                <g transform="translate(428 188)">
                  <path
                    d="M2.519,5.788A3.269,3.269,0,1,1,5.788,2.519,3.273,3.273,0,0,1,2.519,5.788Zm0-5.038A1.769,1.769,0,1,0,4.288,2.519,1.771,1.771,0,0,0,2.519.75Z"
                    transform="translate(7.169 5.805)"
                    fill="#157638"
                  />
                  <path
                    d="M6.959-.75A8.016,8.016,0,0,1,11.6.7a7.259,7.259,0,0,1,2.855,4.379,9.07,9.07,0,0,1-.8,6.086,15.52,15.52,0,0,1-3.271,4.341c-1.225,1.176-2.281,1.959-3.458,1.959-1.145,0-2.114-.719-3.4-1.96A15.551,15.551,0,0,1,.263,11.164a9.089,9.089,0,0,1-.8-6.09A7.259,7.259,0,0,1,2.32.7,8.012,8.012,0,0,1,6.959-.75Zm-.03,16.718c.571,0,1.295-.461,2.419-1.541C11.48,12.38,13.842,9.155,13,5.413A5.781,5.781,0,0,0,10.73,1.922,6.5,6.5,0,0,0,6.959.75,6.5,6.5,0,0,0,3.193,1.919,5.781,5.781,0,0,0,.927,5.406c-.847,3.741,1.512,6.971,3.64,9.022C5.717,15.536,6.379,15.968,6.929,15.968Z"
                    transform="translate(2.727 1.615)"
                    fill="#157638"
                  />
                  <path
                    d="M0,0H19.376V19.376H0Z"
                    transform="translate(19.376 19.376) rotate(180)"
                    fill="none"
                    opacity="0"
                  />
                </g>
              </g>
            </svg>
            mahdia
          </h3>
          <ul>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/mahdia/mahdia/mdca1.html"
                class="lien"
                >mahdia centre</a
              >
            </li>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/mahdia/mahdia/mdca2.html"
                class="lien"
                >mahdia zone touristique
              </a>
            </li>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/mahdia/mahdia/mdca3.html"
                class="lien"
                >rejiche en zone mahdia
              </a>
            </li>
          </ul>
          <h3 class="icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="19.376"
              height="19.376"
              viewBox="0 0 19.376 19.376"
            >
              <g transform="translate(-428 -188)">
                <g transform="translate(428 188)">
                  <path
                    d="M2.519,5.788A3.269,3.269,0,1,1,5.788,2.519,3.273,3.273,0,0,1,2.519,5.788Zm0-5.038A1.769,1.769,0,1,0,4.288,2.519,1.771,1.771,0,0,0,2.519.75Z"
                    transform="translate(7.169 5.805)"
                    fill="#157638"
                  />
                  <path
                    d="M6.959-.75A8.016,8.016,0,0,1,11.6.7a7.259,7.259,0,0,1,2.855,4.379,9.07,9.07,0,0,1-.8,6.086,15.52,15.52,0,0,1-3.271,4.341c-1.225,1.176-2.281,1.959-3.458,1.959-1.145,0-2.114-.719-3.4-1.96A15.551,15.551,0,0,1,.263,11.164a9.089,9.089,0,0,1-.8-6.09A7.259,7.259,0,0,1,2.32.7,8.012,8.012,0,0,1,6.959-.75Zm-.03,16.718c.571,0,1.295-.461,2.419-1.541C11.48,12.38,13.842,9.155,13,5.413A5.781,5.781,0,0,0,10.73,1.922,6.5,6.5,0,0,0,6.959.75,6.5,6.5,0,0,0,3.193,1.919,5.781,5.781,0,0,0,.927,5.406c-.847,3.741,1.512,6.971,3.64,9.022C5.717,15.536,6.379,15.968,6.929,15.968Z"
                    transform="translate(2.727 1.615)"
                    fill="#157638"
                  />
                  <path
                    d="M0,0H19.376V19.376H0Z"
                    transform="translate(19.376 19.376) rotate(180)"
                    fill="none"
                    opacity="0"
                  />
                </g>
              </g>
            </svg>
            monastir
          </h3>
          <ul>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/monastir/ksar-hellal/moca5.html"
                class="lien"
                >ksar hlel</a
              >
            </li>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/monastir/monastir/moca2.html"
                class="lien"
              >
                monastir el agba
              </a>
            </li>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/monastir/monastir/moca1.html"
                class="lien"
                >monastir la falaise
              </a>
            </li>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/monastir/monastir/moca4.html"
                class="lien"
                >monastir skanes
              </a>
            </li>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/monastir/monastir/moca4.html"
                class="lien"
                >sahline en zone monastir
              </a>
            </li>
          </ul>
          <h3 class="icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="19.376"
              height="19.376"
              viewBox="0 0 19.376 19.376"
            >
              <g transform="translate(-428 -188)">
                <g transform="translate(428 188)">
                  <path
                    d="M2.519,5.788A3.269,3.269,0,1,1,5.788,2.519,3.273,3.273,0,0,1,2.519,5.788Zm0-5.038A1.769,1.769,0,1,0,4.288,2.519,1.771,1.771,0,0,0,2.519.75Z"
                    transform="translate(7.169 5.805)"
                    fill="#157638"
                  />
                  <path
                    d="M6.959-.75A8.016,8.016,0,0,1,11.6.7a7.259,7.259,0,0,1,2.855,4.379,9.07,9.07,0,0,1-.8,6.086,15.52,15.52,0,0,1-3.271,4.341c-1.225,1.176-2.281,1.959-3.458,1.959-1.145,0-2.114-.719-3.4-1.96A15.551,15.551,0,0,1,.263,11.164a9.089,9.089,0,0,1-.8-6.09A7.259,7.259,0,0,1,2.32.7,8.012,8.012,0,0,1,6.959-.75Zm-.03,16.718c.571,0,1.295-.461,2.419-1.541C11.48,12.38,13.842,9.155,13,5.413A5.781,5.781,0,0,0,10.73,1.922,6.5,6.5,0,0,0,6.959.75,6.5,6.5,0,0,0,3.193,1.919,5.781,5.781,0,0,0,.927,5.406c-.847,3.741,1.512,6.971,3.64,9.022C5.717,15.536,6.379,15.968,6.929,15.968Z"
                    transform="translate(2.727 1.615)"
                    fill="#157638"
                  />
                  <path
                    d="M0,0H19.376V19.376H0Z"
                    transform="translate(19.376 19.376) rotate(180)"
                    fill="none"
                    opacity="0"
                  />
                </g>
              </g>
            </svg>
            sfax
          </h3>
          <ul>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/sfax/sfax-ville/ssfx1.html"
                class="lien"
                >sfax,gremda en zone sfax
              </a>
            </li>
          </ul>
          <h3 class="icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="19.376"
              height="19.376"
              viewBox="0 0 19.376 19.376"
            >
              <g transform="translate(-428 -188)">
                <g transform="translate(428 188)">
                  <path
                    d="M2.519,5.788A3.269,3.269,0,1,1,5.788,2.519,3.273,3.273,0,0,1,2.519,5.788Zm0-5.038A1.769,1.769,0,1,0,4.288,2.519,1.771,1.771,0,0,0,2.519.75Z"
                    transform="translate(7.169 5.805)"
                    fill="#157638"
                  />
                  <path
                    d="M6.959-.75A8.016,8.016,0,0,1,11.6.7a7.259,7.259,0,0,1,2.855,4.379,9.07,9.07,0,0,1-.8,6.086,15.52,15.52,0,0,1-3.271,4.341c-1.225,1.176-2.281,1.959-3.458,1.959-1.145,0-2.114-.719-3.4-1.96A15.551,15.551,0,0,1,.263,11.164a9.089,9.089,0,0,1-.8-6.09A7.259,7.259,0,0,1,2.32.7,8.012,8.012,0,0,1,6.959-.75Zm-.03,16.718c.571,0,1.295-.461,2.419-1.541C11.48,12.38,13.842,9.155,13,5.413A5.781,5.781,0,0,0,10.73,1.922,6.5,6.5,0,0,0,6.959.75,6.5,6.5,0,0,0,3.193,1.919,5.781,5.781,0,0,0,.927,5.406c-.847,3.741,1.512,6.971,3.64,9.022C5.717,15.536,6.379,15.968,6.929,15.968Z"
                    transform="translate(2.727 1.615)"
                    fill="#157638"
                  />
                  <path
                    d="M0,0H19.376V19.376H0Z"
                    transform="translate(19.376 19.376) rotate(180)"
                    fill="none"
                    opacity="0"
                  />
                </g>
              </g>
            </svg>
            sousse
          </h3>
          <ul>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/sousse/akouda/sscb5.html"
                class="lien"
                >akouda
              </a>
            </li>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/sousse/chott-meriam/sscb4.html"
                class="lien"
                >chatt mariem
              </a>
            </li>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/sousse/sousse-riadh/ssca4.html"
                class="lien"
                >cité riadh
              </a>
            </li>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/sousse/el-kantaoui/ssca2.html"
                class="lien"
                >kantaoui
              </a>
            </li>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/sousse/hammam-sousse/sscb3.html"
                class="lien"
                >hammem sousse
              </a>
            </li>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/sousse/hergla/ssgh1.html"
                class="lien"
                >hergla
              </a>
            </li>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/sousse/sahloul/sscb1.html"
                class="lien"
                >sahloul</a
              >
            </li>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/sousse/sousse-centre-ville/ssca3.html"
                class="lien"
                >sousse centre
              </a>
            </li>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/sousse/sousse-centre-ville/ssca6.html"
                class="lien"
                >sousse corniche
              </a>
            </li>
            <li>
              <a
                href="https://www.tecnocasa.tn/agences/immobilier+commercial/sousse/sousse-jawhara/ssca5.html"
                class="lien"
                >sousse jawahra
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <br />
    <footer>
      <div class="footerWrapper">
        <div class="upper">infos</div>
        <div class="bottom">Donnees</div>
      </div>
    </footer>
  </body>
</html>