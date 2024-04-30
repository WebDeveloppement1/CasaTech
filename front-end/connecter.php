<?php 
//ouvrir une session
session_start();

//verifier sil ya msg derreur
?>



<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="connecter2.css" />
    <title>Log in</title>
  </head>
  <body class="bodyconnect">
    <header></header>
    <section>
      <div class="limiter">
        <div class="container-login100">
          <div class="wrap-login100">
            <form action="http://127.0.0.1/edsa-casatech/back-end/login.php" method="POST" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
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
                  name="password"
                  placeholder="Password"
                />
                <span class="focus-input100"></span>
              </div>

              <div class="text-right p-t-13 p-b-23">
                <span class="txt1"> Forgot </span>

                <a href="#" class="txt2"> Username / Password? </a>
              </div>

              <div class="container-login100-form-btn">
                <button type="submit" class="login100-form-btn">Sign in</button>
              </div>
              <div class="error_log">
                <?php if (isset($_SESSION['login_error'])) : ?>
                <p> <?php echo $_SESSION['login_error']; unset($_SESSION['login_error']) ?> </p>
                <?php endif; ?>
                <?php if (isset($_SESSION['message'])) : ?>
                <p> <?php echo $_SESSION['message']; unset($_SESSION['message']) ?> </p>
                <?php endif; ?>
                
              </div>
             
              <div class="flex-col-c p-t-170 p-b-40">
                <span class="txt1 p-b-9"> Don’t have an account? </span>
                <ul class="list-connecter">
                   
                  <div>

                        <a href="sign-in-page.php" class="txt3"> Sign up now  </a>  
                        </div>
                        <div>
                        <a href="index.php">Home</a>
                        </div>
                  </div>
                  
                </ul>
              </div>
              
               
            
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer></footer>
  </body>
</html>
