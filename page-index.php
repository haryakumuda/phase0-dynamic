<?php

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Toyoautos</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous" />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./index-style.css" />
    <link rel="icon" href="assets/logo.png" />
  </head>
  <body class="bg-light">
    <!-- HEADER --------------------------------------------------------------------- -->
    <header id="home">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <img
            src="assets/logo.png"
            class="navbar-brand-logo mx-3 mt-3 mb-3"
            alt="" />

          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse d-flex justify-content-end fs-4"
            id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item mx-1">
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item mx-1">
                <a class="nav-link" href="#services">Services</a>
              </li>
              <li class="nav-item mx-1">
                <a class="nav-link" href="#gallery">Gallery</a>
              </li>

              <li class="nav-item mx-1">
                <a class="nav-link" href="./page-credit-simulation.php"
                  >Car Credit Simulation</a
                >
              </li>

              <li class="nav-item mx-1">
                <a class="nav-link" href="#about-us">About Us</a>
              </li>

              <li class="nav-item mx-1">
                <a class="nav-link" href="./page-contact-us.php">Contact Us</a>
              </li>
              <li class="nav-item mx-1">
                <a class="nav-link" href="./page-login.php">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- CAROUSEL HOMEPAGE ----------------------------------------------------------- -->
    <section class="no-scroll">
      <div class="row">
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active fixed-size">
              <img
                src="assets/suv/fortuner.jpg"
                class="d-block w-100 h-100"
                alt="..." />
            </div>
            <div class="carousel-item">
              <img
                src="assets/suv/landcruiser.jpg"
                class="d-block w-100 h-100"
                alt="..." />
            </div>
            <div class="carousel-item">
              <img
                src="assets/suv/raize.jpg"
                class="d-block w-100 h-100"
                alt="..." />
            </div>
            <div class="carousel-item">
              <img
                src="assets/commercial/hilux.jpg"
                class="d-block w-100 h-100"
                alt="..." />
            </div>
            <div class="carousel-item">
              <img
                src="assets/suv/rush.jpg"
                class="d-block w-100 h-100"
                alt="..." />
            </div>
            <div class="carousel-item">
              <img
                src="assets/mpv/vellfire.jpg"
                class="d-block w-100 h-100"
                alt="..." />
            </div>
            <div class="carousel-item">
              <img
                src="assets/sedan/supra.jpg"
                class="d-block w-100 h-100"
                alt="..." />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>

    <!-- OUR SERVICES ------------------------------------------------------------------------ -->
    <section class="mt-5" id="services">
      <div class="container">
        <div class="row">
          <div class="col-md-6"><h1>Our Services</h1></div>
        </div>
        <div class="row mt-3 justify-content-center">
          <div class="col-md-3 px-4 mt-2">
            <div class="card align-items-center">
              <img
                src="assets/services/service1.png"
                class="card-img-top mt-2 w-25"
                alt="..." />
              <div class="card-body">
                <h5 class="card-title">Financing Options</h5>
                <p class="card-text">
                  We provide a variety of financing options tailored to suit
                  your needs, making it easy for you to drive away in a
                  brand-new Toyota with a payment plan that fits your budget.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 px-4 mt-2">
            <div class="card align-items-center h-100">
              <img
                src="assets/services/service5.png"
                class="card-img-top mt-2 w-25"
                alt="..." />
              <div class="card-body">
                <h5 class="card-title">Special Price</h5>
                <p class="card-text">
                  We offer exclusive deals and competitive pricing on a wide
                  range of new Toyota vehicles, ensuring you get the best value
                  for your money.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 px-4 mt-2">
            <div class="card align-items-center h-100">
              <img
                src="assets/services/service7.png"
                class="card-img-top mt-2 w-25"
                alt="..." />
              <div class="card-body">
                <h5 class="card-title">After-Sales Support</h5>
                <p class="card-text">
                  Enjoy peace of mind with ToyotaCare, which includes no-cost
                  maintenance and roadside assistance for a specified period,
                  ensuring your new Toyota stays in top condition from day one.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- GALLERY PRODUCTS ------------------------------------------------------------------------ -->
    <section class="mt-5" id="gallery">
      <div class="container">
        <div class="row">
          <div class="col-md-6"><h1>Gallery Products</h1></div>
        </div>

        <!-- MPV -->
        <div class="row justify-content-center mt-3">
          <div class="col-md-8"><h1>Multi Purpose Vehicle</h1></div>
        </div>
        <div class="row mt-3 justify-content-center">
          <div class="col-md-3 px-4 mt-2">
            <div class="card align-items-center h-100">
              <img
                src="assets/mpv/vellfire.png"
                class="card-img-top mt-2 img-product"
                alt="..." />
              <div class="card-body">
                <h5 class="card-title text-bold">All New Vellfire</h5>
                <p class="card-text">Starting From <b>Rp1.844.200.000</b></p>
              </div>
            </div>
          </div>

          <div class="col-md-3 px-4 mt-2">
            <div class="card align-items-center h-100">
              <img
                src="assets/mpv/alphard.png"
                class="card-img-top mt-2 img-product"
                alt="..." />
              <div class="card-body">
                <h5 class="card-title text-bold">All New Alphard</h5>
                <p class="card-text">Starting From <b>Rp 1.400.700.000</b></p>
              </div>
            </div>
          </div>

          <div class="col-md-3 px-4 mt-2">
            <div class="card align-items-center h-100">
              <img
                src="assets/mpv/innova.png"
                class="card-img-top mt-2 img-product"
                alt="..." />
              <div class="card-body">
                <h5 class="card-title text-bold">All New Kijang Innova</h5>
                <p class="card-text">Starting From <b>Rp430.400.000</b></p>
              </div>
            </div>
          </div>

          <div class="col-md-3 px-4 mt-2">
            <div class="card align-items-center h-100">
              <img
                src="assets/mpv/avanza.png"
                class="card-img-top mt-2 img-product"
                alt="..." />
              <div class="card-body">
                <h5 class="card-title text-bold">All New Avanza</h5>
                <p class="card-text">Starting From <b>Rp236.200.000</b></p>
              </div>
            </div>
          </div>
        </div>
        <!-- SUV -->
        <div class="row justify-content-center mt-3">
          <div class="col-md-8"><h1>Sport Utility Vehicle</h1></div>
        </div>
        <div class="row mt-3 justify-content-center">
          <div class="col-md-3 px-4 mt-2">
            <div class="card align-items-center h-100">
              <img
                src="assets/suv/fortuner.png"
                class="card-img-top mt-2 img-product"
                alt="..." />
              <div class="card-body">
                <h5 class="card-title text-bold">New Fortuner GR Sport</h5>
                <p class="card-text">Starting From <b>Rp583.700.000</b></p>
              </div>
            </div>
          </div>

          <div class="col-md-3 px-4 mt-2">
            <div class="card align-items-center h-100">
              <img
                src="assets/suv/landcruisher.png"
                class="card-img-top mt-2 img-product"
                alt="..." />
              <div class="card-body">
                <h5 class="card-title text-bold">All New Land Cruiser</h5>
                <p class="card-text">Starting From <b>Rp2.639.100.000</b></p>
              </div>
            </div>
          </div>

          <div class="col-md-3 px-4 mt-2">
            <div class="card align-items-center h-100">
              <img
                src="assets/suv/raize.png"
                class="card-img-top mt-2 img-product"
                alt="..." />
              <div class="card-body">
                <h5 class="card-title text-bold">All New Raize GR Sport</h5>
                <p class="card-text">Starting From <b>Rp250.450.000</b></p>
              </div>
            </div>
          </div>

          <div class="col-md-3 px-4 mt-2">
            <div class="card align-items-center h-100">
              <img
                src="assets/suv/rush.png"
                class="card-img-top mt-2 img-product"
                alt="..." />
              <div class="card-body">
                <h5 class="card-title text-bold">New Rush GR Sport</h5>
                <p class="card-text">Starting From <b>Rp284.200.000</b></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Sedan -->
        <div class="row justify-content-center mt-3">
          <div class="col-md-8"><h1>Sedan</h1></div>
        </div>
        <div class="row mt-3 justify-content-center">
          <div class="col-md-3 px-4 mt-2">
            <div class="card align-items-center h-100">
              <img
                src="assets/sedan/altis.png"
                class="card-img-top mt-2 img-product"
                alt="..." />
              <div class="card-body">
                <h5 class="card-title text-bold">New Corolla Altis</h5>
                <p class="card-text">Starting From <b>Rp575.100.000</b></p>
              </div>
            </div>
          </div>

          <div class="col-md-3 px-4 mt-2">
            <div class="card align-items-center h-100">
              <img
                src="assets/sedan/camry.png"
                class="card-img-top mt-2 img-product"
                alt="..." />
              <div class="card-body">
                <h5 class="card-title text-bold">New Camry</h5>
                <p class="card-text">Starting From <b>Rp820.300.000</b></p>
              </div>
            </div>
          </div>

          <div class="col-md-3 px-4 mt-2">
            <div class="card align-items-center h-100">
              <img
                src="assets/sedan/supra.png"
                class="card-img-top mt-2 img-product"
                alt="..." />
              <div class="card-body">
                <h5 class="card-title text-bold">New GR Supra</h5>
                <p class="card-text">Starting From <b>Rp2.343.400.000</b></p>
              </div>
            </div>
          </div>

          <div class="col-md-3 px-4 mt-2">
            <div class="card align-items-center h-100">
              <img
                src="assets/sedan/vios.png"
                class="card-img-top mt-2 img-product"
                alt="..." />
              <div class="card-body">
                <h5 class="card-title text-bold">All New Vios</h5>
                <p class="card-text">Starting From <b>Rp378.200.000</b></p>
              </div>
            </div>
          </div>
        </div>
        <!-- Hatchback -->
        <div class="row justify-content-center mt-3">
          <div class="col-md-8"><h1>Hatchback</h1></div>
        </div>
        <div class="row mt-3 justify-content-center">
          <div class="col-md-3 px-4 mt-2">
            <div class="card align-items-center h-100">
              <img
                src="assets/hatchback/agya.png"
                class="card-img-top mt-2 img-product"
                alt="..." />
              <div class="card-body">
                <h5 class="card-title text-bold">All New Agya GR Sport</h5>
                <p class="card-text">Starting From <b>Rp183.700.000</b></p>
              </div>
            </div>
          </div>

          <div class="col-md-3 px-4 mt-2">
            <div class="card align-items-center h-100">
              <img
                src="assets/hatchback/corolla.png"
                class="card-img-top mt-2 img-product"
                alt="..." />
              <div class="card-body">
                <h5 class="card-title text-bold">All New Corolla GR</h5>
                <p class="card-text">Starting From <b>Rp1.361.700.000</b></p>
              </div>
            </div>
          </div>

          <div class="col-md-3 px-4 mt-2">
            <div class="card align-items-center h-100">
              <img
                src="assets/hatchback/yaris.png"
                class="card-img-top mt-2 img-product"
                alt="..." />
              <div class="card-body">
                <h5 class="card-title text-bold">New Yaris GR Sport</h5>
                <p class="card-text">Starting From <b>Rp340.150.000</b></p>
              </div>
            </div>
          </div>
        </div>
        <!-- Commercial -->
        <div class="row justify-content-center mt-3">
          <div class="col-md-8"><h1>Commercial</h1></div>
        </div>
        <div class="row mt-3 justify-content-center">
          <div class="col-md-3 px-4 mt-2">
            <div class="card align-items-center h-100">
              <img
                src="assets/commercial/hilux.png"
                class="card-img-top mt-2 img-product"
                alt="..." />
              <div class="card-body">
                <h5 class="card-title text-bold">New Hilux D Cab</h5>
                <p class="card-text">Starting From <b>Rp444.200.000</b></p>
              </div>
            </div>
          </div>

          <div class="col-md-3 px-4 mt-2">
            <div class="card align-items-center h-100">
              <img
                src="assets/commercial/hiace.png"
                class="card-img-top mt-2 img-product"
                alt="..." />
              <div class="card-body">
                <h5 class="card-title text-bold">New Hiace Premio</h5>
                <p class="card-text">Starting From <b>Rp674.200.000</b></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ABOUT US ------------------------------------------------------------------------ -->
    <section id="about-us" class="mt-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <img
              src="assets/about-us-cars.jpg"
              alt="about-us-cars"
              style="max-width: 100%" />
          </div>
          <div class="col-md-6">
            <h1>About Us</h1>

            <p>
              Welcome to Toyoautos, your premier destination for new Toyota
              vehicles. We are committed to providing our customers with an
              exceptional car-buying experience, offering the latest models and
              cutting-edge technology from one of the world's most trusted
              automotive brands. Our team of knowledgeable and friendly
              professionals is dedicated to helping you find the perfect Toyota
              that meets your needs and fits your lifestyle. At Toyoautos, we
              pride ourselves on our customer-first approach, ensuring that
              every visit is enjoyable, informative, and stress-free.
              <br />
              <br />
              At Toyoautos, we understand that purchasing a new vehicle is a
              significant investment, which is why we offer a range of services
              designed to make the process as smooth and convenient as possible.
              From flexible financing options to comprehensive after-sales
              support, our goal is to be with you every step of the way. We
              believe in building lasting relationships with our customers,
              providing ongoing support and service long after you drive off our
              lot. Whether you are looking for a reliable sedan, a spacious SUV,
              or a powerful truck, you can trust Toyoautos to deliver quality,
              value, and peace of mind with every Toyota vehicle.
            </p>
          </div>
        </div>
      </div>
      <div class="row mx-3 justify-content-center">
        <div class="col-md-3 text-center mt-3">
          <a class="link-without-underline" href="#home">Go to Top</a>
        </div>
      </div>
    </section>
    <hr style="border-color: #000000; border-width: 3px" />

    <!-- CONTACT US FOOTER ------------------------------------------------------------------------ -->
    <footer id="contact-us" class="footer text-center text-lg-start mt-1">
      <div class="container p-4">
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Contact Us</h5>
            <ul class="list-unstyled mb-0">
              <li>Phone: (021) 456-7890</li>
              <li>Whatsapp: +62 813-2266-9515</li>
              <li>Email: service@toyoautos.co.id</li>
              <li>Alamat: Jl. KH Sholeh Iskandar No. 15, Kota Bogor</li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Follow Us</h5>
            <ul class="list-unstyled mb-0">
              <li>
                <a
                  href="https://www.facebook.com/toyoautos"
                  class=" "
                  target="_blank"
                  >Facebook</a
                >
              </li>
              <li>
                <a
                  href="https://www.twitter.com/toyoautos"
                  class=" "
                  target="_blank"
                  >Twitter</a
                >
              </li>
              <li>
                <a
                  href="https://www.instagram.com/toyoautos"
                  class=" "
                  target="_blank"
                  >Instagram</a
                >
              </li>
              <li>
                <a
                  href="https://www.linkedin.com/haryakumuda"
                  class=" "
                  target="_blank"
                  >LinkedIn</a
                >
              </li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase">Newsletter</h5>
            <form onsubmit="showSubscribedMessage(event)">
              <div class="form-outline form-white mb-4">
                <input
                  type="email"
                  id="form5Example2"
                  class="form-control"
                  placeholder="Email address"
                  required />
              </div>
              <button
                type="submit"
                class="btn btn-outline-light btn-block btn-primary">
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>
      <div class="text-center p-3 bg-dark text-white text-bold">
        © 2024 Toyoautos, All Rights Reserved.
      </div>
    </footer>
  </body>
  <script src="./script.js"></script>
</html>
