<?php
// Top Nav Bar - includes total number of item(s) in cart and total cost
require_once $_SERVER['DOCUMENT_ROOT'] . "/components/top-bar.php";
// Header
require_once $_SERVER['DOCUMENT_ROOT'] . "/components/header.php";
// Search Bar
require_once $_SERVER['DOCUMENT_ROOT'] . "/components/search-bar.php";
?>


<!-- Breadcrumb -->
<section>
    <div class="container py-2">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Breadcrumb -->

<!-- Contact Us -->
<section class="contact-us">
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <?php
            require_once $_SERVER['DOCUMENT_ROOT'] . "/components/side-bar.php";
            ?>
            <!-- Sidebar -->

            <!-- Content -->

            <div class="col-md-9">
                <div class="card shadow-0 border rounded-3">
                    <div class="card-body">
                        <div class="row g-0">
                            <div class="col-xl-3 col-md-4 d-flex justify-content-center">
                                <div class="bg-image hover-zoom ripple rounded ripple-surface me-md-3 mb-3 mb-md-0">
                                    <img src="../images/profile-img/call-us.jpg" class="w-100" />
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-5 col-sm-7">
                                <h1 class="text-uppercase text-center">Contact Us</h1>
                            </div>
                            <form action="" method="">
                                <div class="row">
                                    <!-- First name input and label -->
                                    <div class="col">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" placeholder="First name" id="fname" aria-label="First name" required>
                                            <label for="floatingInput">First name</label>
                                        </div>
                                    </div>
                                    <!-- Last name input and label -->
                                    <div class="col">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" placeholder="Last name" id="lname" aria-label="Last name" required>
                                            <label for="floatingInput">Last name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <!-- Subject input and label -->
                                    <div class="col">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject" id="floatingInput">
                                            <label for="floatingInput">Subject</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <!-- Message textarea and label -->
                                    <div class="col">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave message here" id="msg" style="height: 100px" required></textarea>
                                            <label for="floatingTextarea2">Message</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <!-- Send Message button -->
                                    <div class="col text-center">
                                        <button id="send" onclick="message()" class="btn btn-primary"> Send Message <i class="fa-solid fa-paper-plane"></i> </button>
                                        <div class="alert alert-success alert-dismissible fade show mt-2 message" role="alert" id="success">
                                            <strong>Success! message sent successfully.</strong>
                                            <button type="submit" class="btn-close" data-bs-dismiss="alert" aria-label="Close" id="danger"></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content -->
        </div>
    </div>
</section>
<!-- Contact Us -->

<!-- Social Media & iFrame Map -->
<section>
    <div class="container-fluid my-5 p-5 bg-primary text-light">
        <h1 class="text-center">Find Us Here</h1>
        <div class="col-lg-12 d-flex justify-content-center">
            <iframe class="rounded-5 p-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105939.02967813032!2d18.284374316406236!3d-33.92583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc6763296651a3%3A0xbb24ceb9324f3aa7!2sCentral%20Library%2C%20Cape%20Town!5e0!3m2!1sen!2sza!4v1679070402123!5m2!1sen!2sza" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="container text-center mt-3">
            <div class="row">
                <div class="col">
                    <h6 class="mt-3 mx-3"><i class="fa-solid fa-location-dot"></i> 1 Parade St, Cape Town City Centre <br /> Cape Town</h6>
                </div>
                <div class="col">
                    <h6 class="mt-4 ms-3"><i class="fa-solid fa-phone"></i> <a class="text-light" href="tel:+012344567891">+01 234 456 7891</a></h6>
                </div>
                <div class="col">
                    <h6 class="mt-4 ms-3"><i class="fa-solid fa-envelope"></i> <a class="text-light" href="mailto:stripe@email.co.za">stripe@email.co.za</a></h6>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-evenly mt-3 text-center">
            <!-- social media links start -->
            <a class="text-light" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
            <a class="text-light" href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a>
            <a class="text-light" href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
            <a class="text-light" href="https://za.linkedin.com/"><i class="fa fa-linkedin"></i></a>
            <!-- social media links end -->
        </div>
    </div>
</section>
<!-- Social Media & iFrame Map -->


<!-- Footer -->
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/components/footer.php";
?>
<!-- Footer -->