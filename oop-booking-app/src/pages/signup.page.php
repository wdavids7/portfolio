<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BookSA - Signup</title>

  <!-- CSS -->
  <link rel="stylesheet" href="./src/css/main.css">

  <!-- BOOTSTRAP CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <!-- SWIPER CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

</head>

<body>

  <!-- Nav Bar start -->
  <header>
    <nav class="p-3 mb-2 bg-light text-dark shadow-sm">
      <div class="container mt-3">
        <div class="position-absolute">
          <h3><a class="navbar-brand nav-link" href="../../index.php">BookSA</a></h3>
        </div>
        <div class="nav-menu">
          <ul class="nav justify-content-end">
            <li class="nav-item me-2">
              <h4><a class="nav-link badge text-bg-secondary text-white" href="./contactus-page.php">?</a></h4>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- Nav Bar end -->
  <br>


  <!-- Signup Section start -->
  <section class="index-forms">
    <div class="container text-center">
      <div class="signup-form">
        <h4 class="text-center">Let's get you squared away! Please fill out the details below <br> and we will sign you up.</h4>
        <form action="./landing.page.php" method="post" class="row row-cols-lg-auto g-2 align-items-center justify-content-center">

          <!-- Username Input -->
          <div class="col-12">
            <input type="text" name="uid" placeholder="Username" class="border border-warning rounded p-1" required>
          </div>

          <!-- Password Input -->
          <div class="col-12">
            <input type="password" name="pwd" placeholder="Password" class="border border-warning rounded p-1" required>
          </div>

          <!-- Repeat Password Input -->
          <div class="col-12">
            <input type="password" name="pwdrepeat" placeholder="Repeat Password" class="border border-warning rounded p-1" required>
          </div>

          <!-- Email Input -->
          <div class="col-12">
            <input type="text" name="email" placeholder="E-mail" class="border border-warning rounded p-1" required>
          </div>

          <!-- Submit Button -->
          <div class="col-12">
            <button type="submit" name="submit" class="btn btn-warning">SIGN UP</button>
          </div>

        </form>
      </div>
    </div>
    <!-- Signup Section end -->
    <br>

    <!-- Carousel -->
    <!-- Dreaming of your next trip? start -->
    <div class="container">
      <h2 class="mt-5 pt-4 mb-1 text-start fw-bold h-font">
        Dreaming of your next trip?
      </h2>
      <h4 class="mb-4 text-start fst-italic fs-6">
        Add some top-rated spots to your itinerary
      </h4>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pb-4">
          <img src="../images/nexttrip1.jpg" class="img-fluid" alt="" />
        </div>
        <div class="col-lg-6 pb-4">
          <img src="../images/nexttrip2.jpg" class="img-fluid" alt="" />
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 pb-4">
          <img src="../images/nexttrip3.jpg" class="img-fluid" alt="" />
        </div>
        <div class="col-lg-4 pb-4">
          <img src="../images/nexttrip4.jpg" class="img-fluid" alt="" />
        </div>
        <div class="col-lg-4">
          <img src="../images/nexttrip5.jpg" class="img-fluid" alt="" />
        </div>
      </div>
    </div>
    <!-- Dreaming of your next trip? end -->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


    <!-- JS Link -->
    <script src=""></script>

    <!-- Swiper JS for use of carousel -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
          delay: 3500,
          disableOnInteraction: false,
        },
      });

      var swiper = new Swiper(".swiper-explore", {
        slidesPerView: 3,
        spaceBetween: 30,
        freeMode: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>

</body>

</html>