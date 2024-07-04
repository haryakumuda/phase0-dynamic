
<?php
if (isset($_GET['error'])) {
    if ($_GET['error'] === 'password') {
        echo '<div class="alert alert-danger" role="alert">Wrong password. Please try again.</div>';
    } elseif ($_GET['error'] === 'email') {
        echo '<div class="alert alert-danger" role="alert">Email not found. Please try again.</div>';
    } elseif ($_GET['error'] === 'email_exists') {
     echo '<div class="alert alert-danger" role="alert">Email already registered. Please use a different email.</div>';
    }
}



?>


<!DOCTYPE html>
<html lang="en">
  <!-- https://www.youtube.com/watch?v=VpBcZBTUs_c -->
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Registration | Toyoautos</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous" />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./login-style.css" />
    <link rel="icon" href="assets/logo.png" />
  </head>
  <body class="bg-dark">
    <div class="container">
      <div class="row justify-content-center align-items-center inner-row">
        <div class="col-md-5">
          <div class="form-box login-form p-5">
            <div class="form-title">
              <h2 class="fw-bold mb-3">Login</h2>
            </div>
            <form action="php/login.php" method="post">
              <div class="form-floating mb-3">
                <input
                  type="email"
                  class="form-control form-control-sm"
                  placeholder="Email"
                  name="login-email"
                  id="login-email" />
                <label for="login-email">Email</label>
              </div>

              <div class="form-floating mb-3">
                <input
                  type="password"
                  class="form-control form-control-sm"
                  placeholder="Password"
                  name="login-password"
                  id="login-password" />
                <label for="login-password">Password</label>
              </div>

              <div class="mt-3">
                <button type="submit" class="btn btn-primary text-white">
                  Login
                </button>
              </div>
            </form>
            <div class="mt-3">
              <span>Don't have account?</span>
              <button
                class="p-0 border-0 bg-transparent text-primary signup-show">
                Sign Up
              </button>
            </div>
          </div>
          <!-- REGISTRATION ! ! !  -- -- -- -- -- -- -- -- --  -- -- -- -->
          <div class="form-box registration-form p-5">
            <div class="form-title">
              <h2 class="fw-bold mb-3">Create Your Account</h2>
            </div>
            <form action="php/signup.php" method="POST">
              <div class="form-floating mb-3">
                <input
                  type="text"
                  class="form-control form-control-sm"
                  placeholder="First Name"
                  name="first-name"
                  id="first-name" />
                <label for="first-name">First Name</label>
              </div>
              <div class="form-floating mb-3">
                <input
                  type="text"
                  class="form-control form-control-sm"
                  placeholder="Last Name"
                  name="last-name"
                  id="last-name" />
                <label for="last-name">Last Name</label>
              </div>
              <div class="form-floating mb-3">
                <input
                  type="email"
                  class="form-control form-control-sm"
                  placeholder="Email"
                  name="email"
                  id="email" />
                <label for="email">Email</label>
              </div>

              <div class="form-floating mb-3">
                <input
                  type="password"
                  class="form-control form-control-sm"
                  placeholder="password"
                  name="password"
                  id="password" />
                <label for="password">Password</label>
              </div>
              <div class="mt-3">
                <button type="submit" class="btn btn-primary text-white">
                  Sign Up
                </button>
                <!-- Change button type to submit -->
              </div>
            </form>
            <div class="mt-3">
              <span>Already have account?</span>
              <button
                class="p-0 border-0 bg-transparent text-primary login-show">
                Login
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
      $(".signup-show").click(function () {
        $(".registration-form").show();
        $(".login-form").hide();
      });
      $(".login-show").click(function () {
        $(".registration-form").hide();
        $(".login-form").show();
        console.log("LOGIN SHOW CLICKED");
      });
    </script>
  </body>
</html>
