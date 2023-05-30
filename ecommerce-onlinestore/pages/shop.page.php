<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/components/top-bar.php";

require_once $_SERVER['DOCUMENT_ROOT'] . "/components/header.php";

require_once $_SERVER['DOCUMENT_ROOT'] . "/components/search-bar.php";
?>


<!-- Breadcrumb -->
<section>
    <div class="container py-2">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shop</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Breadcrumb -->


<!-- Shop -->
<section id="shop">

    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <?php
            require_once $_SERVER['DOCUMENT_ROOT'] . "/components/side-bar.php";
            ?>
            <!-- Sidebar -->

            <!-- Content -->
            <div class="col-lg-9">

                <?php
                // If statement to display only on shop page but removed from product categories and categories pages
                if (!isset($_GET['p_cat'])) {

                    if (!isset($_GET['cat'])) {

                        echo "
                            <header class='align-items-center border-bottom mb-4 pb-3'>
                                <h1><strong class='d-flex py-2'> Shop </strong></h1>
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi nihil incidunt corrupti omnis ipsa magnam modi rem qui assumenda sunt amet quasi molestias corporis commodi laboriosam provident </p>
                            </header>
                            ";
                    }
                }
                ?>

                <div class="row">
                    <?php
                    // If statement to display only on shop page but removed from product categories and categories pages
                    if (!isset($_GET['p_cat'])) {

                        if (!isset($_GET['cat'])) {

                            $per_page = 6;
                            if (isset($_GET['page'])) {
                                $page = $_GET['page'];
                            } else {
                                $page = 1;
                            }
                            $start_from = ($page - 1) * $per_page;
                            $get_products = "SELECT * FROM products ORDER BY 1 DESC LIMIT $start_from, $per_page";
                            $run_products = mysqli_query($con, $get_products);
                            while ($row_products = mysqli_fetch_array($run_products)) {
                                $pro_id = $row_products['product_id'];

                                $pro_title = $row_products['product_title'];

                                $pro_desc = $row_products['product_desc'];

                                $pro_price = $row_products['product_price'];

                                $pro_img1 = $row_products['product_img1'];

                                echo "   <div class='col-lg-4 col-md-6 col-sm-6 d-flex'>
                                            <div class='card w-100 my-2 shadow-2-strong'>
                                                <a href='./details.page.php?pro_id=$pro_id'>
                                                <img src='../admin/product-img/$pro_img1' class='card-img-top p-2' />
                                                </a>
                                                <div class='card-body d-flex flex-column'>
                                                    <div class='d-flex flex-row'>
                                                        <h5 class='mb-1 me-1'>R $pro_price</h5>
                                                    </div>
                                                    <p class='card-text'>$pro_title</p>
                                                    <div class='card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto'>
                                                        <a href='./details.page.php?pro_id=$pro_id' class='btn btn-light border me-1 pt-2'> View Details </a>
                                                        <a href='./details.page.php?pro_id=$pro_id' class='btn btn-primary shadow-0 px-2 pt-2'><i class='fa-solid fa-cart-shopping'></i> Add to cart </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ";
                            }
                    ?>

                </div>

                <hr />

                <!-- Pagination -->
                <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
                    <ul class="pagination">
                <?php

                            $query = "SELECT * FROM products";
                            $result = mysqli_query($con, $query);
                            $total_records = mysqli_num_rows($result);
                            $total_pages = ceil($total_records / $per_page);

                            echo "  <li class='page-item'>
                                    <a class='page-link' href='./shop.page.php?page=1' aria-label='Previous'>
                                        <span aria-hidden='true'>&laquo;</span>
                                    </a>
                                </li>
                        
                             ";
                            for ($i = 1; $i <= $total_pages; $i++) {
                                echo "  <li class='page-item'>
                                    <a class='page-link' href='./shop.page.php?page=" . $i . "'> " . $i . " </a>
                                </li>
                
                             ";
                            };
                            echo "  <li class='page-item'>
                                    <a class='page-link' href='./shop.page.php?page=$total_pages' aria-label='Next'>
                                        <span aria-hidden='true'>&raquo;</span>
                                    </a>
                                </li>
                             ";
                        }
                    }
                ?>
                    </ul>
                </nav>
                <!-- Pagination -->

                <!-- This function allows for the products to be sorted and placed in the correct sidebar menu links. It calls the info from the database. -->
                <div class="row">

                    <?php

                    getpcatpro();

                    getcatpro();

                    ?>

                </div>

            </div>
            <!-- Content -->
        </div>
    </div>
</section>
<!-- Shop -->


<!-- Footer -->
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/components/footer.php";
?>
<!-- Footer -->