<?php
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
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Breadcrumb -->

<!-- About Us -->
<section id="about-us">
    <!-- Jumbotron -->
    <div class="bg-secondary text-white py-5">
        <div class="container py-5">
            <h1 class="hidden">
                About Us <br />
                Lorem ipsum dolor sit amet
            </h1>
            <p class="hidden">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio veritatis quaerat nostrum! Modi debitis fugit eveniet molestiae dicta maxime officia eum facere. Dignissimos sunt officia assumenda ipsum cum, blanditiis velit.
            </p>
        </div>
    </div>
    <!-- Jumbotron -->
</section>

<!-- We Grow With The Flow -->
<section>
    <div class="container py-5 text-center">
        <h1>We Grow With The Flow</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi fugit expedita laborum odit neque! Similique, quo est placeat nesciunt ullam quod dolorum a laboriosam praesentium veniam quos suscipit. Debitis cum delectus ex aliquam aut, libero placeat recusandae repudiandae sit id optio aperiam soluta, nihil necessitatibus unde nesciunt facere. Beatae, magni.</p>
    </div>
</section>
<!-- We Grow With The Flow -->

<!-- Meet The Team -->
<section id="meet-the-team" class="hidden">
    <div class="container py-5 text-center">
        <div class="row justify-content-center align-items-center">
            <div class="col-8 hidden"><!-- col start -->
                <div class="card align-items-center p-2 teamCard hidden"><!-- container team card start -->
                    <img src="../images/profile-img/girl.png" alt="Avatar" style="width:90px" class="mb-1">
                    <h5><strong> Dashah Pines </strong></h5>
                    <h6><small class="text-muted"> CEO at Stripe </small></h6>
                    <figure class="text-center">
                        <blockquote class="blockquote">
                            <p> “Go as far as you can see; when you get there, you’ll be able to see further.” </p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            Thomas Carlyle
                        </figcaption>
                    </figure>
                </div><!-- container team card end -->

                <div class="card align-items-center p-2 mt-4 teamCard hidden"><!-- container team card start -->
                    <img src="../images/profile-img/man.png" alt="Avatar" style="width:90px" class="mb-1">
                    <h5><strong> Joel Miller </strong></h5>
                    <h6><small class="text-muted"> Head of Design </small></h6>
                    <figure class="text-center">
                        <blockquote class="blockquote">
                            <p> “Your talent determines what you can do. Your motivation determines how much you’re willing to do. Your attitude determines how well you do it.” </p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            Lou Holtz
                        </figcaption>
                    </figure>
                </div><!-- container team card end -->

                <div class="card align-items-center p-2 mt-4 teamCard hidden"><!-- container team card start -->
                    <img src="../images/profile-img/boy.png" alt="Avatar" style="width:90px" class="mb-1">
                    <h5><strong> Joe Cade </strong></h5>
                    <h6><small class="text-muted"> Head of Marketing </small></h6>
                    <figure class="text-center">
                        <blockquote class="blockquote">
                            <p> “Don’t count the days, make the days count.” </p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            Muhammad Ali
                        </figcaption>
                    </figure>
                </div><!-- container team card end -->

                <div class="card align-items-center p-2 mt-4 teamCard hidden"><!-- container team card start -->
                    <img src="../images/profile-img/girl (1).png" alt="Avatar" style="width:90px" class="mb-1">
                    <h5><strong> Rebecca Flex </strong></h5>
                    <h6><small class="text-muted"> Head of Development </small></h6>
                    <figure class="text-center">
                        <blockquote class="blockquote">
                            <p> “A year from now you may wish you had started today.” </p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            Karen Lamb
                        </figcaption>
                    </figure>
                </div><!-- container team card end -->

            </div>
        </div>
</section>
<!-- Meet The Team -->
<!-- About Us -->

<!-- Mission & Vision Statement -->
<section class="">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6">
                <div class="card-banner bg-primary rounded text-white h-100">
                    <div class="p-3 p-lg-5" style="max-width: 80%;">
                        <h3>Our Mission and Vision Statement</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita distinctio optio animi nemo sed, modi tempora cupiditate sapiente voluptatum repellendus illum! Voluptatum provident dolor natus eum, itaque eligendi placeat voluptatem facilis consequatur, iste deleniti nobis fugiat, nemo quasi totam laboriosam? Facere magnam odio corrupti hic neque maxime id assumenda fugit?Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row mb-3 mb-sm-4 g-3 g-sm-4">
                    <div class="col-6 d-flex">
                        <div class="card w-100 bg-primary" style="min-height: 200px;">
                            <div class="card-body">
                                <h5 class="text-white">Our Mission</h5>
                                <p class="text-white-50">Lorem ipsum dolor sit</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-flex">
                        <div class="card w-100 bg-primary" style="min-height: 200px;">
                            <div class="card-body">
                                <h5 class="text-white">Our Vision</h5>
                                <p class="text-white-50">Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card bg-secondary" style="min-height: 200px;">
                    <div class="card-body">
                        <h5 class="text-white">Our Values</h5>
                        <p class="text-white-50" style="max-width: 400px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quis recusandae excepturi eum? Soluta, rem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Mission & Vision Statement -->


<!-- Footer -->
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/components/footer.php";
?>
<!-- Footer -->