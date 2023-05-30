<?php
// Header
require_once $_SERVER['DOCUMENT_ROOT'] . "/components/header.php";
// Search Bar
require_once $_SERVER['DOCUMENT_ROOT'] . "/components/search-bar.php";
?>

<!-- Main Content -->
<main>
    <!-- Jumbotron -->
    <div class="bg-primary text-white py-5">
        <div class="container py-5">
            <h1>
                Best products & <br />
                brands in our store
            </h1>
            <p>
                Trendy Products, Factory Prices, Excellent Service
            </p>
            <button type="button" class="btn btn-outline-light">
                Learn more
            </button>
            <button type="button" class="btn btn-light shadow-0 text-primary pt-2 border border-white">
                <span class="pt-1"><a href="./pages/shop.page.php">Purchase now</a></span>
            </button>
        </div>
    </div>
    <!-- Jumbotron -->

    <!-- New Products -->
    <section>
        <div class="container my-5">
            <header class="mb-4">
                <h3>New products</h3>
            </header>

            <div class="row">
                <!-- Function to call new products from the database -->
                <?php getPro() ?>
            </div>
        </div>
    </section>
    <!-- New Products -->

    <!-- Featured Products Banner -->
    <section class="featured-product">
        <div class="container my-5">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="card-banner bg-gray h-100">
                        <div class="p-3 p-lg-5" style="max-width: 70%;">
                            <h3 class="text-dark">Featured Products</h3>
                            <p>Best products & brands in our store</p>
                            <button class="btn btn-light shadow-0" href="/shop.page.php"> Shop now </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row mb-3 mb-sm-4 g-3 g-sm-4">
                        <div class="col-6 d-flex">
                            <div class="card w-100 bg-primary" style="min-height: 200px;">
                                <div class="card-body">
                                    <h5 class="text-white">Gaming toolset</h5>
                                    <p class="text-white-50">Technology for cyber sport</p>
                                    <a class="btn btn-outline-light btn-sm" href="#">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 d-flex">
                            <div class="card w-100 bg-primary" style="min-height: 200px;">
                                <div class="card-body">
                                    <h5 class="text-white">Quality sound</h5>
                                    <p class="text-white-50">All you need for music</p>
                                    <a class="btn btn-outline-light btn-sm" href="#">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row.// -->

                    <div class="card bg-success" style="min-height: 200px;">
                        <div class="card-body">
                            <h5 class="text-white">Buy 2 items, With special gift</h5>
                            <p class="text-white-50" style="max-width: 400px;">Buy one, get one free marketing strategy helps your business improves the brand by sharing the profits</p>
                            <a class="btn btn-outline-light btn-sm" href="#">Learn more</a>
                        </div>
                    </div>
                </div>
                <!-- col.// -->
            </div>
            <!-- row.// -->
        </div>
        <!-- container end.// -->
    </section>
    <!-- Featured Products Banner -->

    <!-- Featured Products -->
    <section>
        <div class="container">
            <div class="row">
                <!-- Function to call featured products from the database -->
                <?php getProFeatured() ?>
            </div>
        </div>
    </section>
    <!-- Featured Products -->

    <!-- Why Choose Us -->
    <section class="mt-5" style="background-color: #f5f5f5;">
        <div class="container text-dark pt-3">
            <header class="pt-4 pb-3">
                <h3>Why choose us</h3>
            </header>

            <div class="row mb-4">
                <div class="col-lg-4 col-md-6">
                    <figure class="d-flex align-items-center mb-4">
                        <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                            <i class="fas fa-camera-retro fa-2x fa-fw text-primary floating"></i>
                        </span>
                        <figcaption class="info">
                            <h6 class="title">Reasonable prices</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
                        </figcaption>
                    </figure>
                    <!-- itemside // -->
                </div>
                <!-- col // -->
                <div class="col-lg-4 col-md-6">
                    <figure class="d-flex align-items-center mb-4">
                        <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                            <i class="fas fa-star fa-2x fa-fw text-primary floating"></i>
                        </span>
                        <figcaption class="info">
                            <h6 class="title">Best quality</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
                        </figcaption>
                    </figure>
                    <!-- itemside // -->
                </div>
                <!-- col // -->
                <div class="col-lg-4 col-md-6">
                    <figure class="d-flex align-items-center mb-4">
                        <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                            <i class="fas fa-plane fa-2x fa-fw text-primary floating"></i>
                        </span>
                        <figcaption class="info">
                            <h6 class="title">Worldwide shipping</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
                        </figcaption>
                    </figure>
                    <!-- itemside // -->
                </div>
                <!-- col // -->
                <div class="col-lg-4 col-md-6">
                    <figure class="d-flex align-items-center mb-4">
                        <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                            <i class="fas fa-users fa-2x fa-fw text-primary floating"></i>
                        </span>
                        <figcaption class="info">
                            <h6 class="title">Customer satisfaction</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
                        </figcaption>
                    </figure>
                    <!-- itemside // -->
                </div>
                <!-- col // -->
                <div class="col-lg-4 col-md-6">
                    <figure class="d-flex align-items-center mb-4">
                        <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                            <i class="fas fa-thumbs-up fa-2x fa-fw text-primary floating"></i>
                        </span>
                        <figcaption class="info">
                            <h6 class="title">Happy customers</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
                        </figcaption>
                    </figure>
                    <!-- itemside // -->
                </div>
                <!-- col // -->
                <div class="col-lg-4 col-md-6">
                    <figure class="d-flex align-items-center mb-4">
                        <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                            <i class="fas fa-box fa-2x fa-fw text-primary floating"></i>
                        </span>
                        <figcaption class="info">
                            <h6 class="title">Thousand items</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
                        </figcaption>
                    </figure>
                    <!-- itemside // -->
                </div>
                <!-- col // -->
            </div>
        </div>
        <!-- container end.// -->
    </section>
    <!-- Why Choose Us -->

    <!-- Blog -->
    <section class="mt-5 mb-4">
        <div class="container text-dark">
            <header class="mb-4">
                <h3>Blog posts</h3>
            </header>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <article>
                        <a href="#" class="img-fluid">
                            <img class="rounded w-100" src="./admin/blog-img/mini-blog-img1.jpg" style="object-fit: cover;" height="160" />
                        </a>
                        <div class="mt-2 text-muted small d-block mb-1">
                            <span>
                                <i class="fa fa-calendar-alt fa-sm"></i>
                                23.12.2022
                            </span>
                            <a href="#">
                                <h6 class="text-dark">How to promote brands</h6>
                            </a>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit alias optio.</p>
                        </div>
                    </article>
                </div>
                <!-- col.// -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <article>
                        <a href="#" class="img-fluid">
                            <img class="rounded w-100" src="./admin/blog-img/mini-blog-img2.jpg" style="object-fit: cover;" height="160" />
                        </a>
                        <div class="mt-2 text-muted small d-block mb-1">
                            <span>
                                <i class="fa fa-calendar-alt fa-sm"></i>
                                13.12.2022
                            </span>
                            <a href="#">
                                <h6 class="text-dark">How we handle shipping</h6>
                            </a>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit alias optio.</p>
                        </div>
                    </article>
                </div>
                <!-- col.// -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <article>
                        <a href="#" class="img-fluid">
                            <img class="rounded w-100" src="./admin/blog-img/mini-blog-img3.jpg" style="object-fit: cover;" height="160" />
                        </a>
                        <div class="mt-2 text-muted small d-block mb-1">
                            <span>
                                <i class="fa fa-calendar-alt fa-sm"></i>
                                25.11.2022
                            </span>
                            <a href="#">
                                <h6 class="text-dark">Fresh and local produce</h6>
                            </a>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit alias optio.</p>
                        </div>
                    </article>
                </div>
                <!-- col.// -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <article>
                        <a href="#" class="img-fluid">
                            <img class="rounded w-100" src="./admin/blog-img/mini-blog-img4.jpg" style="object-fit: cover;" height="160" />
                        </a>
                        <div class="mt-2 text-muted small d-block mb-1">
                            <span>
                                <i class="fa fa-calendar-alt fa-sm"></i>
                                03.09.2022
                            </span>
                            <a href="#">
                                <h6 class="text-dark">Success story of sellers</h6>
                            </a>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit alias optio.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog -->
</main>
<!-- Main Content -->

<!-- Footer -->
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/components/footer.php";
?>
<!-- Footer -->