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
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Breadcrumb -->


<!-- Cart -->
<section id="cart">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="card border shadow-0">
                    <div class="m-4">

                        <form action="cart.page.php" method="POST" enctype="multipart/form-data"><!-- form Begin -->

                            <h4 class="card-title">Your shopping cart</h4>

                            <?php

                            $ip_add = getRealIpUser();

                            $select_cart = "SELECT * FROM cart WHERE ip_add='$ip_add'";

                            $run_cart = mysqli_query($con, $select_cart);

                            $count = mysqli_num_rows($run_cart);

                            ?>

                            <p class="text-muted mb-4">You currently have <?php echo $count; ?> item(s) in your cart</p>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2">Product</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Size</th>
                                        <th colspan="1">Delete</th>
                                        <th colspan="2">Sub-Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $total = 0;

                                    while ($row_cart = mysqli_fetch_array($run_cart)) {

                                        $pro_id = $row_cart['p_id'];

                                        $pro_size = $row_cart['size'];

                                        $pro_qty = $row_cart['qty'];

                                        $get_products = "select * from products where product_id='$pro_id'";

                                        $run_products = mysqli_query($con, $get_products);

                                        while ($row_products = mysqli_fetch_array($run_products)) {

                                            $product_title = $row_products['product_title'];

                                            $product_img1 = $row_products['product_img1'];

                                            $sub_total = $row_products['product_price'] * $pro_qty;

                                            $total += $sub_total;

                                    ?>

                                            <tr>
                                                <th scope="row"><img src="../admin/product-img/<?php echo $product_img1; ?>" alt="Product" style="min-width: 96px; height: 96px;" class="img-md img-thumbnail"></th>
                                                <td><a href="details.page.php?pro_id=<?php echo $pro_id; ?>"> <?php echo $product_title; ?> </a></td>
                                                <td><?php echo $pro_qty; ?></td>
                                                <td><?php echo $pro_size; ?></td>
                                                <td><input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>"></td>
                                                <td>R <?php echo $sub_total; ?></td>
                                            </tr>
                                    <?php }
                                    } ?>
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th colspan="5">Total</th>
                                        <th colspan="2">R <?php echo $total; ?></th>
                                    </tr>
                                </tfoot>
                            </table>

                            <!-- Continue Shopping, Update Cart and Proceed Checkout buttons -->
                            <div class="pt-4 mx-4 mb-4">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a href="shop.page.php" class="btn btn-primary ms-md-2" type="button"><i class="fa-solid fa-chevron-left"></i> Continue Shopping</a>
                                    <button class="btn btn-primary" type="submit" name="update" value="Update Cart"><i class="fa-solid fa-arrows-rotate"></i> Update Cart</button>
                                    <a href="checkout.page.php" class="btn btn-primary" type="button">Proceed Checkout <i class="fa-solid fa-chevron-right"></i></a>
                                </div>
                            </div>

                            <!-- Free Delivery within 1-2 weeks -->
                            <div class="pt-4 mx-4 mb-4 border-top">
                                <p><i class="fas fa-truck text-muted fa-lg"></i> Free Delivery within 1-2 weeks</p>
                                <p class="text-muted">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                    aliquip
                                </p>
                            </div>
                        </form>
                    </div>

                    <?php

                    function update_cart()
                    {

                        global $con;

                        if (isset($_POST['update'])) {

                            foreach ($_POST['remove'] as $remove_id) {

                                $delete_product = "DELETE FROM cart WHERE p_id='$remove_id'";

                                $run_delete = mysqli_query($con, $delete_product);

                                if ($run_delete) {

                                    echo "<script>window.open('cart.page.php','_self')</script>";
                                }
                            }
                        }
                    }

                    echo @$up_cart = update_cart();

                    ?>

                </div>
            </div>
        </div>
    </div>
</section>


<!-- Footer -->
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/components/footer.php";
?>
<!-- Footer -->