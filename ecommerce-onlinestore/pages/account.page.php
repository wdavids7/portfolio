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
                <li class="breadcrumb-item active" aria-current="page">My Account</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Breadcrumb -->

<!-- My Account -->
<section class="account-us">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-8 mb-4">
                <div class="card mb-4 border shadow-0">
                    <div class="p-4 d-flex justify-content-between">
                        <div class="">
                            <h5>My Account</h5>
                            <p class="mb-0 mt-2 text-wrap ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit repellat non placeat deserunt, sed adipisci, delectus itaque illo accusamus necessitatibus rem, quisquam ratione. Animi rem dolorem dolores quaerat obcaecati odit.</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-center flex-column flex-md-row">
                            <img src="../images/profile-img/girl.png" alt="Profile Pic" class="card-img-top p-2 border border-primary-subtle border-3" style="min-width: 150px; height: 150px;">
                        </div>
                    </div>
                </div>

                <!-- Checkout -->
                <div class="card shadow-0 border">
                    <div class="p-4">
                        <h5 class="card-title mb-3">Personal Details</h5>
                        <div class="row">
                            <div class="col-6 mb-3">
                                <p class="mb-0">First name</p>
                                <div class="form-outline">
                                    <input type="text" id="typeText" placeholder="Type here" class="form-control" />
                                </div>
                            </div>

                            <div class="col-6">
                                <p class="mb-0">Last name</p>
                                <div class="form-outline">
                                    <input type="text" id="typeText" placeholder="Type here" class="form-control" />
                                </div>
                            </div>

                            <div class="col-6 mb-3">
                                <p class="mb-0">Phone</p>
                                <div class="form-outline">
                                    <input type="tel" id="typePhone" value="+21 " class="form-control" />
                                </div>
                            </div>

                            <div class="col-6 mb-3">
                                <p class="mb-0">Email</p>
                                <div class="form-outline">
                                    <input type="email" id="typeEmail" placeholder="example@gmail.com" class="form-control" />
                                </div>
                            </div>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                            <label class="form-check-label" for="flexCheckDefault">Keep me up to date on news</label>
                        </div>

                        <hr class="my-4" />

                        <h5 class="card-title mb-3">Address</h5>

                        <div class="row">
                            <div class="col-sm-8 mb-3">
                                <p class="mb-0">Address</p>
                                <div class="form-outline">
                                    <input type="text" id="typeText" placeholder="Type here" class="form-control" />
                                </div>
                            </div>

                            <div class="col-sm-4 mb-3">
                                <p class="mb-0">City</p>
                                <select class="form-select">
                                    <option value="1">Cape Town</option>
                                    <option value="2">Johannesburg</option>
                                    <option value="3">Durban</option>
                                </select>
                            </div>

                            <div class="col-sm-4 mb-3">
                                <p class="mb-0">House</p>
                                <div class="form-outline">
                                    <input type="text" id="typeText" placeholder="Type here" class="form-control" />
                                </div>
                            </div>

                            <div class="col-sm-4 col-6 mb-3">
                                <p class="mb-0">Postal code</p>
                                <div class="form-outline">
                                    <input type="text" id="typeText" class="form-control" />
                                </div>
                            </div>

                            <div class="col-sm-4 col-6 mb-3">
                                <p class="mb-0">Zip</p>
                                <div class="form-outline">
                                    <input type="text" id="typeText" class="form-control" />
                                </div>
                            </div>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" />
                            <label class="form-check-label" for="flexCheckDefault1">Save this address</label>
                        </div>

                        <div class="mb-3">
                            <p class="mb-0">Notes</p>
                            <div class="form-outline">
                                <textarea class="form-control" id="textAreaExample1" rows="2"></textarea>
                            </div>
                        </div>

                        <div class="float-end">
                            <button class="btn btn-primary border">Update</button>
                        </div>
                    </div>
                </div>
                <!-- Checkout -->
            </div>
        </div>
    </div>
</section>
<!-- My Account -->


<!-- Footer -->
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/components/footer.php";
?>
<!-- Footer -->