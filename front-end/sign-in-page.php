<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="connecter.css" />
    <title>Log in</title>
  </head>
  <body class="bodyconnect">
    <header></header>
    <section>
      <div class="limiter">
        <div class="container-login100">
          <div class="wrap-login100">
            <form action="http://127.0.0.1/edsa-casatech/back-end/connexion.php " method="POST" class="login100-form validate-form p-l-55 p-r-55 p-t-178" >
              <span class="login100-form-title"> Rejoindre </span>
              <?php if (!empty($message)) : ?>
         <p><?php echo $message; ?></p>
    <?php endif; ?>
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
                  type="email"
                  name="email"
                  placeholder="email"
                />
                <span class="focus-input100"></span>
              </div>
              <div
                class="wrap-input100 validate-input m-t-16 m-b-16"
                data-validate="Please enter username"
              >
                <input
                  class="input100"
                  type="password"
                  name="password"
                  placeholder="password"
                />
                <span class="focus-input100"></span>
              </div>
              <div
                class="wrap-input100 validate-input m-t-16 m-b-16"
                data-validate="Please enter username"
              >
                <input
                  class="input100"
                  type="number"
                  name="tel"
                  placeholder="phone"
                />
                <span class="focus-input100"></span>
              </div>
              <div class="flex-col-c p-t-40 p-b-40">
                <span class="txt1 p-b-9"> have an account? </span>

                <a href="connecter.html" class="txt3"> Log in now </a>
              </div>
              <div class="container-login100-form-btn">
                <button class="login100-form-btn">Sign Up</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer></footer>
  </body>
</html>
