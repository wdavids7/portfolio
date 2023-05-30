<?php
session_start();
?>
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
  <title>BookSA - OOP booking app</title>

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
          <h3><a class="navbar-brand nav-link" href="./index.php">BookSA</a></h3>
        </div>
        <div class="nav-menu">
          <ul class="nav justify-content-end">
            <li class="nav-item me-2">
              <h4><a class="nav-link badge text-bg-secondary text-white" href="./src/pages/contactus-page.php">?</a></h4>
            </li>
            <?php
            if (isset($_SESSION["userid"])) {
            ?>
              <li class="nav-item me-2"><a class="btn btn-warning" href="#"><?php echo $_SESSION["useruid"]; ?></a></li>
              <li class="nav-item"><a class="btn btn-warning" href="./src/includes/logout.inc.php" class=header-logout-a>LOGOUT</a></li>
            <?php
            } else {
            ?>
              <li class="nav-item me-2"><a class="btn btn-warning" href="#">SIGN UP</a></li>
              <li class="nav-item"><a class="btn btn-warning" href="#" class=header-login-a>LOGIN</a></li>
            <?php
            }
            ?>

          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- Nav Bar end -->
  <br>


  <!-- Intro Section start -->
  <section class="index-intro">
    <div class="container text-center">
      <div class="welcome-info">
        <h1>Welcome to BookSA!</h1>
        <p>Lorem ipsum dolor sit amet.</p>
      </div>
    </div>
    <br>
  </section>

  <br>


  <!-- Login Section start -->
  <div class="login-form">
    <h4 class="text-center">Let's get you login in!</h4>
    <div class="container text-center">
      <form action="./src/includes/login.inc.php" method="post" class="row row-cols-lg-auto g-2 align-items-center justify-content-center">

        <!-- Username Input -->
        <div class="col-12">
          <input type="text" name="uid" placeholder="Username" class="border border-warning rounded p-1" required>
        </div>

        <!-- Password Input -->
        <div class="col-12">
          <input type="password" name="pwd" placeholder="Password" class="border border-warning rounded p-1" required>
        </div>

        <!-- Submit Button -->
        <div class="col-12">
          <button type="submit" name="submit" class="btn btn-warning">LOGIN</button>
        </div>

      </form>
    </div>
    <!-- Login Section end -->
    <br>

    <!-- Don't have account...signup start -->
    <div class="container text-center">
      <form action="#" method="post" class="row row-cols-lg-auto g-2 align-items-center justify-content-center">
        <p>Don't have an account yet? <a class="btn btn-warning" href="./src/pages/signup.page.php">Sign up here!</a></p>
      </form>
    </div>
    <!-- Don't have account...signup end -->
    </section>
    <!-- Intro Section end -->

    <!-- Banner Carousel start -->
    <div class="container-fluid overflow-hidden">
      <div class="swiper swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="./src/images/banner1.jpg" class="img-fluid" />
          </div>
          <div class="swiper-slide">
            <img src="./src/images/banner2.jpg" class="img-fluid" />
          </div>
          <div class="swiper-slide">
            <img src="./src/images/banner3.jpg" class="img-fluid" />
          </div>
          <div class="swiper-slide">
            <img src="./src/images/banner4.jpg" class="img-fluid" />
          </div>
          <div class="swiper-slide">
            <img src="./src/images/banner5.jpg" class="img-fluid" />
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Carousel end -->

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