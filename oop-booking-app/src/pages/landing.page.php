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
  <title>BookSA - Home</title>

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


  <!-- Intro - search for accommodation start -->
  <section class="index-search-accommodation">
    <div class="container text-center">
      <div class="search-info">
        <h2>Let's find your perfect accommodation.<br>We just need a few extra details first..</h2>
      </div>
    </div>
    <br>
  </section>

  <!-- Search form start -->
  <section class="search-form">
    <div class="container text-center">
      <form action="./compare.page.php" class="row row-cols-lg-auto g-2 align-items-center justify-content-center" method="POST">

        <!-- Name Input -->
        <div class="col-12">
          <input type="text" name="firstname" id="name" Placeholder="First Name" class="border border-warning rounded p-1" required>
          <label for="firstname" class="input-label"></label>
        </div>

        <!-- Surname Input -->
        <div class="col-12">
          <input type="text" name="surname" id="surname" Placeholder="Surname" class="border border-warning rounded p-1" required>
          <label for="surname" class="input-label"></label>
        </div>

        <!-- Email Input -->
        <div class="col-12">
          <input type="email" name="email" id="email" Placeholder="E-mail" class="border border-warning rounded p-1" required>
          <label for="email" class="input-label"></label>
        </div>

        <!-- Check In Date Input -->
        <div class="col-12">
          <label for="checkIn">Check In Date:</label>
          <input type="date" name="checkin" class="border border-warning rounded p-1" required>
        </div>

        <!-- Check Out Date Input -->
        <div class="col-12">
          <label for="checkOut">Check Out Date:</label>
          <input type="date" name="checkout" class="border border-warning rounded p-1" required>
        </div>

        <!-- Submit Button -->
        <div class="col-12">
          <!-- <input class="submitBtn" type="submit" name="detailsSubmission" value="Submit"> -->
          <button class="submitBtn btn btn-warning" type="submit" name="detailsSubmission" value="Submit">Search</button>
        </div>

      </form>
    </div>
    <!-- Search form end -->
  </section>
  <!-- Intro - search for accommodation end -->
  <br>

  <!-- Carousel -->
  <!-- Explore South Africa start -->
  <div class="container">
    <h2 class="mt-5 pt-4 mb-4 text-start fw-bold h-font">
      Explore South Africa
    </h2>
  </div>

  <div class="container">
    <div class="swiper swiper-explore">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="../images/exploreslide1.jpg" class="img-fluid" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="../images/exploreslide2.jpg" class="img-fluid" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="../images/exploreslide3.jpg" class="img-fluid" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="../images/exploreslide4.jpg" class="img-fluid" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="../images/exploreslide5.jpg" class="img-fluid" alt="" />
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <!-- Explore South Africa end -->

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