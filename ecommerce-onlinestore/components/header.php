<?php
// Database
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/db.php";
// Functions
require_once $_SERVER['DOCUMENT_ROOT'] . "/functions/functions.php";
?>

<?php
session_start();
?>

<?php
if (isset($_GET['pro_id'])) {

    $product_id = $_GET['pro_id'];

    $get_product = "select * from products where product_id='$product_id'";

    $run_product = mysqli_query($con, $get_product);

    $row_product = mysqli_fetch_array($run_product);

    $p_cat_id = $row_product['p_cat_id'];

    $pro_title = $row_product['product_title'];

    $pro_price = $row_product['product_price'];

    $pro_desc = $row_product['product_desc'];

    $pro_img1 = $row_product['product_img1'];

    $pro_img2 = $row_product['product_img2'];

    $pro_img3 = $row_product['product_img3'];

    $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";

    $run_p_cat = mysqli_query($con, $get_p_cat);

    $row_p_cat = mysqli_fetch_array($run_p_cat);

    $p_cat_title = $row_p_cat['p_cat_title'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commence Online Shopping</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/a99a1dce0d.js" crossorigin="anonymous"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Custom JS -->
    <script defer src="../js/app.js"></script>

</head>

<body>

    <section>
        <nav class="navbar navbar-expand-lg bg-body-tertiary"><!-- main nav start -->
            <div class="container"><!-- container start -->

                <a class="navbar-brand" href="../index.php"><i class="fa-brands fa-stripe fa-2xl"></i></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent"><!-- collapse navbar-collapse start -->
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0"><!-- ul start -->

                        <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="../pages/shop.page.php">Shop</a></li>
                        <li class="nav-item"><a class="nav-link" href="../pages/about.page.php">About Us</a></li>
                        <li class="nav-item"><a class="nav-link divider" href="#">|</a></li>

                        <?php

                        if (isset($_SESSION["userid"])) {

                        ?>
                            <li class="nav-item"><a class="nav-link" href=""><?php echo $_SESSION["useruid"]; ?></a></li>
                            <li class="nav-item"><a class="nav-link" href="../includes/logout.inc.php">Logout</a></li>

                        <?php

                        } else {

                        ?>
                            <li class="nav-item"><a class="nav-link" href="../pages/login.page.php">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="../pages/signup.page.php">Sign Up</a></li>

                        <?php

                        }

                        ?>
                        <li class="nav-item"><a class="nav-link divider" href="#">|</a></li>
                        <li class="nav-item"><a class="nav-link" href="../pages/contact.page.php">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="../pages/account.page.php">My Account</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pages/cart.page.php">
                                <i class="fa-solid fa-cart-shopping">
                                    <sup> <?php items(); ?> </sup>
                                </i>
                            </a>
                        </li>

                    </ul><!-- ul end -->
                </div><!-- collapse navbar-collapse end -->
            </div><!-- container end -->
        </nav><!-- main nav end -->
    </section>