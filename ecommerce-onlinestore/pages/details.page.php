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
        <li class="breadcrumb-item active" aria-current="page">Shop</li>
        <li class="breadcrumb-item active" aria-current="page">
          <a href="./shop.page.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $pro_title; ?></li>
      </ol>
    </nav>
  </div>
</section>
<!-- Breadcrumb -->


<!-- Content -->
<section id="details">
  <div class="container">
    <div class="row">
      

      <!-- Sidebar -->
      <?php
      require_once $_SERVER['DOCUMENT_ROOT'] . "/components/side-bar.php";
      ?>
      <!-- Sidebar -->


      <!-- Main Image Carousel -->
      <aside class="col-lg-4">
        <div class="justify-content-center mb-3 border rounded">
          <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <!-- Image one -->
              <div class="carousel-item active">
                <img src="../admin/product-img/<?php echo $pro_img1; ?>" class="d-block w-100 p-2" alt="Product1">
              </div>
              <!-- Image two -->
              <div class="carousel-item">
                <img src="../admin/product-img/<?php echo $pro_img2; ?>" class="d-block w-100 p-2" alt="Product2">
              </div>
              <!-- Image three -->
              <div class="carousel-item">
                <img src="../admin/product-img/<?php echo $pro_img3; ?>" class="d-block w-100 p-2" alt="Product3">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <!-- Main Image Carousel -->

        <!-- Thumbnail Images -->
        <div class="d-flex justify-content-center mb-3">
          <!-- Thumb image one -->
          <a class="border mx-1 rounded-2" href="#" class="item-thumb">
            <img width="100" height="100" class="rounded p-2" src="../admin/product-img/<?php echo $pro_img1; ?>" />
          </a>
          <!-- Thumb image two -->
          <a class="border mx-1 rounded-2" href="#" class="item-thumb">
            <img width="100" height="100" class="rounded p-2" src="../admin/product-img/<?php echo $pro_img2; ?>" />
          </a>
          <!-- Thumb image three -->
          <a class="border mx-1 rounded-2" href="#" class="item-thumb">
            <img width="100" height="100" class="rounded p-2" src="../admin/product-img/<?php echo $pro_img3; ?>" />
          </a>
        </div>
        <!-- Thumbnail Images -->
      </aside>

      <main class="col-lg-4">
        <div class="ps-lg-3">
          <!-- Title -->
          <h4 class="title text-dark">
            <?php echo $pro_title; ?> <br />

          </h4>
          <!-- Price -->
          <div class="d-flex flex-row my-3">
            <span class="h5">R <?php echo $pro_price; ?></span>
          </div>
          <!-- Description -->
          <div class="mb-3">
            <p>
              <?php echo $pro_desc; ?>
            </p>
          </div>

          <hr /><!-- Horizontal line -->

          <?php add_cart(); ?>

          <!-- Size -->
          <form action="./details.page.php?add_cart=<?php echo $product_id; ?>" method="POST">
            <div class="row mb-4">
              <div class="col-md-4 col-6">
                <label class="mb-2">Size</label>
                <select class="form-select border border-secondary" name="product_size" style="height: 35px;">
                  <option>Select</option>
                  <option>Blank</option>
                  <option>Small</option>
                  <option>Medium</option>
                  <option>Large</option>
                </select>
              </div>
              <!-- Size -->

              <!-- Quantity increase and decrease button and input -->
              <div class="col-md-4 col-6 mb-3">
                <label class="mb-2 d-block">Quantity</label>
                <div class="input-group mb-3" style="width: 170px;">
                  <button class="btn btn-white border border-secondary px-3 value-button" type="button" id="button-addon1" onclick="decreaseValue()" value="Decrease Value">
                    <i class="fas fa-minus"></i>
                  </button>

                  <input type="text" class="form-control text-center border border-secondary" name="product_qty" id="number" value="0" placeholder="0" aria-label="Example text with button addon" aria-describedby="button-addon1" />

                  <button class="btn btn-white border border-secondary px-3 value-button" type="button" id="button-addon2" onclick="increaseValue()" value="Increase Value">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
              </div>
              <!-- Quantity increase and decrease button and input -->

              <!-- Add to cart button -->
            </div>

            <button class="btn btn-primary shadow-0"> <i class="fa-solid fa-cart-shopping"></i> Add to cart </button>
          </form>

        </div>
        <!-- Add to cart button -->
      </main>
    </div>
  </div>
</section>
<!-- Content -->

<!-- Specification Details -->
<section class="py-4">
  <div class="container">
    <div class="row gx-4">
      <div class="col-lg-8 mb-4">
        <div class="border rounded-2 px-3 py-2 bg-white">
          <!-- Pills navs -->
          <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
            <li class="nav-item d-flex" role="presentation">
              <a class="nav-link d-flex align-items-center justify-content-center w-100 active" id="ex1-tab-1" data-mdb-toggle="pill" href="#ex1-pills-1" role="tab" aria-controls="ex1-pills-1" aria-selected="true">Specification</a>
            </li>
            <li class="nav-item d-flex" role="presentation">
              <a class="nav-link d-flex align-items-center justify-content-center w-100" id="ex1-tab-2" data-mdb-toggle="pill" href="#ex1-pills-2" role="tab" aria-controls="ex1-pills-2" aria-selected="false">Warranty info</a>
            </li>
            <li class="nav-item d-flex" role="presentation">
              <a class="nav-link d-flex align-items-center justify-content-center w-100" id="ex1-tab-3" data-mdb-toggle="pill" href="#ex1-pills-3" role="tab" aria-controls="ex1-pills-3" aria-selected="false">Shipping info</a>
            </li>
            <li class="nav-item d-flex" role="presentation">
              <a class="nav-link d-flex align-items-center justify-content-center w-100" id="ex1-tab-4" data-mdb-toggle="pill" href="#ex1-pills-4" role="tab" aria-controls="ex1-pills-4" aria-selected="false">Seller profile</a>
            </li>
          </ul>
          <!-- Pills navs -->

          <!-- Pills content -->
          <div class="tab-content" id="ex1-content">
            <div class="tab-pane fade show active" id="ex1-pills-1" role="tabpanel" aria-labelledby="ex1-tab-1">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas eos tenetur blanditiis? Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur.
              </p>
              <div class="row mb-2">
                <div class="col-12 col-md-6">
                  <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-check text-success me-2"></i>Quis nostrud exercitation ullamco</li>
                    <li><i class="fas fa-check text-success me-2"></i>Lorem ipsum dolor sit amet, consectetur</li>
                    <li><i class="fas fa-check text-success me-2"></i>Duis aute irure dolor in reprehenderit</li>
                    <li><i class="fas fa-check text-success me-2"></i>Dolor in reprehenderit</li>
                  </ul>
                </div>
                <div class="col-12 col-md-6 mb-0">
                  <ul class="list-unstyled">
                    <li><i class="fas fa-check text-success me-2"></i>Lorem ipsum dolor sit amet</li>
                    <li><i class="fas fa-check text-success me-2"></i>Ullamco laboris nisi ut aliquip</li>
                    <li><i class="fas fa-check text-success me-2"></i>Duis aute irure dolor</li>
                  </ul>
                </div>
              </div>
              <table class="table border mt-3 mb-2">
                <tr>
                  <th class="py-2">Consectetur:</th>
                  <td class="py-2">Cillum dolore eu fugiat nulla</td>
                </tr>
                <tr>
                  <th class="py-2">Lorem ipsum:</th>
                  <td class="py-2">Quis nostrud exercitation ullamco</td>
                </tr>
                <tr>
                  <th class="py-2">Duis aute:</th>
                  <td class="py-2">Sed do eiusmod tempor incididunt</td>
                </tr>
                <tr>
                  <th class="py-2">Ullamco:</th>
                  <td class="py-2">Ad minim veniam</td>
                </tr>
                <tr>
                  <th class="py-2">Aliquip:</th>
                  <td class="py-2">Reprehenderit in voluptate velit</td>
                </tr>
              </table>
            </div>
          </div>
          <!-- Pills content -->
        </div>
      </div>
<!-- Specification Details -->

      <!-- Similar Items -->
      <div class="col-lg-4">
        <div class="px-0 border rounded-2 shadow-0">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Similar items</h5>

              <?php
              $get_products = "SELECT * FROM products ORDER BY rand() LIMIT 0,4";
              $run_products = mysqli_query($con, $get_products);
              while ($row_products = mysqli_fetch_array($run_products)) {
                $pro_id = $row_products['product_id'];

                $pro_title = $row_products['product_title'];

                $pro_desc = $row_products['product_desc'];

                $pro_price = $row_products['product_price'];

                $pro_img1 = $row_products['product_img1'];

                echo "  <div class='d-flex mb-3'>
                              <a href='./details.page.php?pro_id=$pro_id' class='me-3'>
                                  <img src='../admin/product-img/$pro_img1' style='min-width: 96px; height: 96px;' class='img-md img-thumbnail' />
                              </a>
                              <div class='info'>
                                  <a href='./details.page.php?pro_id=$pro_id' class='nav-link mb-1'>
                                    $pro_title
                                  </a>
                                  <a href='./details.page.php?pro_id=$pro_id'><strong class='text-dark'> R $pro_price</strong></a>
                              </div>
                          </div>
                        ";
                }
              ?>

            </div>
          </div>
        </div>
      </div>
      <!-- Similar Items -->
    </div>
  </div>
</section>


<!-- Footer -->
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/components/footer.php";
?>
<!-- Footer -->