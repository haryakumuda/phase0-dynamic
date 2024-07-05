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
              <h2 class="fw-bold mb-3">Contact Us</h2>
            </div>
            <form action="php/contact-us.php" method="post">
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
                <textarea
                  class="form-control form-control-sm"
                  id="message"
                  name="message"
                  placeholder="Message"></textarea>
                <label for="message">Message</label>
              </div>
              <div class="mt-3">
                <button type="submit" class="btn btn-primary text-white">
                  Submit
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
