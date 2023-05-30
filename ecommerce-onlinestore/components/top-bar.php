<!-- Functions -->
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/functions/functions.php";
?>

<!-- Total items and Total Price Top Nav -->
<section>
    <div class="container-fluid bg-primary text-center py-1">
        <button type="button" class="btn btn-outline-light btn-sm">Welcome</button>
        <a class="text-light" href="../pages/checkout.page.php"><?php items(); ?> Items In Your Cart | Total Price: <?php total_price(); ?></a>
    </div>
</section>
<!-- Total items and Total Price Top Nav -->