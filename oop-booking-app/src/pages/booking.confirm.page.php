<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "../classes/customer.class.php";
include "../calculations/createHotels.php";
include "../classes/hotel.class.php";
include "../classes/booking.class.php";
include "../calculations/calculateDays.php";

session_start();

$hotelChoice;

if (isset($_POST['book'])) {

    try {
        createHotels("../calculations/hotelData.json");
    } catch (Exception $err) {
        echo "
                <script>
                    console.log('Server error in loading hotels.. ' + $err)
                </script>
            ";
    }

    foreach ($_SESSION['hotels'] as $hotel) {
        if ($hotel->getName() == $_POST['choice']) {

            $hotelChoice = $hotel;
        }
    }

    // Create booking entry
    try {
        $newBooking = new Booking(
            rand(1000, 9000),
            $_SESSION['checkin'],
            $_SESSION['checkout'],
            $_SESSION['numDays'],
            $_POST['cost'],
            $hotelChoice->getName()
        );
    } catch (Exception $err) {
        echo "
                <script>
                    console.log('Server error creating booking. ' + $err)
                </script>
            ";
    }
}

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
    <header>
        <nav class="p-3 mb-2 bg-light text-dark shadow-sm">
            <div class="container mt-3">
                <div class="position-absolute">
                    <h3><a class="navbar-brand nav-link" href="../../index.php">BookSA</a></h3>
                </div>
                <div class="nav-menu">
                    <ul class="nav justify-content-end">
                        <li class="nav-item me-2"><h4><a class="nav-link badge text-bg-secondary text-white" href="contactus-page.php">?</a></h4></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <br>
   
    <section class="container-fluid p-5">

            <div class="text-center">
                <div class="card border border-2 border-warning">
                    <h3 class="card-header border-top-0 border-warning">Many thanks for using BookSA, <?php echo $_SESSION['user']->getFirstname() ?>..</h3>
                    <div class="card-body">
                        <h5 class="card-title">We look forward to seeing you!</h5>
                        <p class="card-text">Please confirm your details below and once you are happy, confirm your booking!</p>
                    </div>
                </div>
            </div>
    <br>
            <div class="confirmation-cards">
                <!-- Info card 1 -->
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card border border-2 border-warning">
                            <div class="card-body">
                                <h5 class="card-title">Customer Information</h5>
                                <div class="details">
                                    <?php
                                    // Gets random user ID, Customers name, surname and email addrress
                                    echo '
                                <li> Customer No: #' . $_SESSION['user']->getId() . '</li>
                                <li> Name: ' . $_SESSION['user']->getFirstname() . ' ' . $_SESSION['user']->getLastname() . '</li>
                                <li> Email Address: ' . $_SESSION['user']->getEmail() . '</li>
                            ';
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Info card 2 -->
                    <div class="col-sm-4">
                        <div class="card border border-2 border-warning">
                            <div class="card-body">
                                <h5 class="card-title">Hotel Information</h5>
                                <div class="details">
                                    <?php
                                    // Gets random hotel ID, hotel name and the hotel daily rate
                                    echo '
                                <li> Hotel Id: #' . $hotelChoice->getId() . '</li>
                                <li> Hotel: ' . $hotelChoice->getName() . '</li>
                                <li> Daily Rate: R ' . $hotelChoice->getRate() . ' </li>
                            ';
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Info card 3 -->
                    <div class="col-sm-4">
                        <div class="card border border-2 border-warning">
                            <div class="card-body">
                                <h5 class="card-title">Booking Information</h5>
                                <div class="details">
                                    <?php
                                    // Gets random booking ID, the duration of stay, the dates of when they'll be staying as well as the total cost for their stay
                                    echo '
                                <li> Booking No: #' . $newBooking->getId() . '</li>
                                <li> Duration of stay: ' . $newBooking->getDuration() . '</li>
                                <li> Start Date: ' . $newBooking->getStartDate() . '</li>
                                <li> End Date: ' . $newBooking->getEndDate() . '</li>
                                <li> Total: R ' . $newBooking->getCost() . ' </li>
                            ';
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<br>
            <!-- Confirm booking info -->
            <div class="card text-center border border-2 border-warning">
                <div class="card-header">
                    <a href="../../index.php"><button class="confirmBtn btn btn-warning mb-1">Confirm Booking</button></a><br>
                    Confirmation will be sent via e-mail.
                </div>
            </div>

        </section>


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