<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "../classes/customer.class.php";
include "../calculations/createHotels.php";
include "../classes/hotel.class.php";
include "../calculations/calculateDays.php";

session_start();

if (isset($_POST['detailsSubmission'])) {

    /// Creating an instance of a class
    $_SESSION['user'] = new Customer(
        rand(1000, 9000),
        $_POST['firstname'],
        $_POST['surname'],
        $_POST['email']
    );

    // Creating my superglobal variable
    try {
        createHotels("../calculations/hotelData.json");
    } catch (Exception $err) {
        echo "
                <script>
                    console.log('Server error in loading hotels.. ' + $err)
                </script>
            ";
    }

    // Calculating amount of days selected
    try {
        $numDays = calculateDays($_POST['checkin'], $_POST['checkout']);
    } catch (Exception $err) {
        echo "
                <script>
                    console.log('Server error when calculating length of stay.. ' + $err)
                </script>
            ";
    }

    // Storing the session variables
    $_SESSION['numDays'] = '$numDays';
    $_SESSION['checkin'] = $_POST['checkin'];
    $_SESSION['checkout'] = $_POST['checkout'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookSA - View Hotels</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./src/css/main.css">

    <!-- BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

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

<!-- Accommodation found start -->
<section class="index-found-accommodation">
    <div class="container text-center">
        <div class="found-info">
            <h2>This is what we found for you..</h2>
        </div>
    </div>
</section>
<br>

<section class="found-form">
    <div class="hotelSelect">
        <div class="container">

        <!-- Loops through hotel array and displays all the details -->
            <?php foreach ($_SESSION['hotels'] as $hotel) {

               echo '
               <div class="d-line">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 my-3">
                                <div class="card border-0 shadow" style="max-width: 25rem; margin: auto">
                                        <img src="../images/room1.jpg" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $hotel->getName() . '</h5>
                                        <p class="card-text">Hotel Features:</p>
                ';
                foreach ($hotel->getFeatures() as $feature) {
                    echo "<h6 class='mb-1 fw-normal'>$feature</h6>";
                }
                echo '  
                <br>                
                                    <ul class="">
                                    <li class="list-group-item fw-semibold">Duration of days: ' . $numDays . '</li>
                                    <li class="list-group-item fw-semibold">Daily Rate: R ' . $hotel->getRate() . ' </li>
                                    <li class="list-group-item fw-semibold">Total Cost: <b>R ' . $hotel->getRate() * $numDays . '</b></li>
                                    </ul>
                                    

                                    <form action="./booking.confirm.page.php" method="post">
                                    <input type="hidden" name="rate" value="' . $hotel->getRate() . '">
                                    <input type="hidden" name="cost" value="' . $hotel->getRate() * $numDays . '">
                                    <input type="hidden" name="choice" value="' . $hotel->getName() . '">
                                    <input class="bookBtn btn btn-warning" type="submit" name="book" value="Book">
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
                <br>    
                ';
            } ?>    
        </div>
    </div>
</section>
<!-- Accommodation found start -->

<!-- JS Link -->
<script src=""></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>