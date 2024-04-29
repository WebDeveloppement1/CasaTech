<?php 
//ouvrir une session
session_start();

//verifier sil ya msg derreur
?>



<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="connecter1.css" />
    <title>Log in</title>
  </head>
  <body class="bodyconnect">
    <header></header>
    <section>
      <div class="limiter">
        <div class="container-login100">
          <div class="wrap-login100">
            <form class="login100-form validate-form p-l-55 p-r-55 p-t-178">
              <span class="login100-form-title"> Connecter </span>

              <div
                class="wrap-input100 validate-input m-b-16"
                data-validate="Please enter username"
              >
                <input
                  class="input100"
                  type="text"
                  name="username"
                  placeholder="Username"
                />
                <span class="focus-input100"></span>
              </div>

              <div
                class="wrap-input100 validate-input"
                data-validate="Please enter password"
              >
                <input
                  class="input100"
                  type="password"
                  name="pass"
                  placeholder="Password"
                />
                <span class="focus-input100"></span>
              </div>

              <div class="text-right p-t-13 p-b-23">
                <span class="txt1"> Forgot </span>

                <a href="#" class="txt2"> Username / Password? </a>
              </div>

              <div class="container-login100-form-btn">
                <button class="login100-form-btn">Sign in</button>
              </div>

              <div class="flex-col-c p-t-170 p-b-40">
                <span class="txt1 p-b-9"> Don’t have an account? </span>

                <a href="sign-in-page.php" class="txt3"> Sign up now </a>
              </div>
              <div class="error"> 
                <?php 
                if(isset($_SESSION['message'])){
                  echo "<p>" . $_SESSION['message'] . "</p>";
                  unset($_SESSION['message']);
              }
                
                ?>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer></footer>
  </body>
</html>
