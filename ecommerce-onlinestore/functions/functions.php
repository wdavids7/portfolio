<?php

$db = mysqli_connect("localhost", "root", "", "shoponline_db");

function getRealIpUser(){
    
    switch(true){
            
            case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
            
            default : return $_SERVER['REMOTE_ADDR'];
            
    }
    
}

function add_cart(){
    
    global $db;
    
    if(isset($_GET['add_cart'])){
        
        $ip_add = getRealIpUser();
        
        $p_id = $_GET['add_cart'];
        
        $product_qty = $_POST['product_qty'];
        
        $product_size = $_POST['product_size'];
        
        $check_product = "SELECT * FROM cart WHERE ip_add='$ip_add' AND p_id='$p_id'";
        
        $run_check = mysqli_query($db,$check_product);
        
        if(mysqli_num_rows($run_check)>0){
            
            echo "<script>alert('This product has already been added to your cart')</script>";
            echo "<script>window.open('./details.page.php?pro_id=$p_id','_self')</script>";
            
        }else{
            
            $query = "insert into cart (p_id,ip_add,qty,size) values ('$p_id','$ip_add','$product_qty','$product_size')";
            
            $run_query = mysqli_query($db,$query);
            
            echo "<script>window.open('./details.page.php?pro_id=$p_id','_self')</script>";
            
        }
        
    }
    
}


// This function connects to new products on the database
function getPro()
{

    global $db;

    $get_products = "SELECT * FROM products ORDER BY 1 DESC LIMIT 0,8";

    $run_products = mysqli_query($db, $get_products);

    while ($row_products = mysqli_fetch_array($run_products)) {

        $pro_id = $row_products['product_id'];

        $pro_title = $row_products['product_title'];

        $pro_desc = $row_products['product_desc'];

        $pro_price = $row_products['product_price'];

        $pro_img1 = $row_products['product_img1'];

        echo "  <div class='col-lg-3 col-md-6 col-sm-6 d-flex'>
                    <div class='card w-100 my-2 shadow-2-strong'>
                        <a href='./pages/details.page.php?pro_id=$pro_id'>
                            <img src='./admin/product-img/$pro_img1' class='card-img-top p-2' />
                        </a>
                            <div class='card-body d-flex flex-column'>
                        <a href='./pages/details.page.php?pro_id=$pro_id'>
                            <h5 class='card-title'>$pro_title</h5>
                        </a>
                            <p class='card-text'>R $pro_price</p>
                         <div class='card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto'>
                            <a href='./pages/details.page.php?pro_id=$pro_id' class='btn btn-light border me-1 pt-2'> View Details </a>
                            <a href='./pages/details.page.php?pro_id=$pro_id' class='btn btn-primary shadow-0 px-2 pt-2'> <i class='fa-solid fa-cart-shopping'></i> Add to cart </a>
                            </div>
                        </div>
                    </div>
                </div>
        ";
    }
}


// This function connects to featured products on the database
function getProFeatured()
{

    global $db;

    $get_products = "SELECT * FROM products_featured ORDER BY 1 DESC LIMIT 0,4";

    $run_products = mysqli_query($db, $get_products);

    while ($row_products = mysqli_fetch_array($run_products)) {

        $pro_id = $row_products['product_id'];

        $pro_title = $row_products['product_title'];

        $pro_desc = $row_products['product_desc'];

        $pro_price = $row_products['product_price'];

        $pro_img1 = $row_products['product_img1'];

        echo "  <div class='col-lg-3 col-md-6 col-sm-6 d-flex'>
                    <div class='card w-100 my-2 shadow-2-strong'>
                        <a href='./pages/shop.page.php?pro_id=$pro_id'>
                            <img src='./admin/product-img/$pro_img1' class='card-img-top p-2' />
                        </a>
                            <div class='card-body d-flex flex-column'>
                        <a href='./pages/shop.page.php?pro_id=$pro_id'>
                            <h5 class='card-title'>$pro_title</h5>
                        </a>
                            <p class='card-text'>R $pro_price</p>
                         <div class='card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto'>
                            <a href='./pages/shop.page.php?pro_id=$pro_id' class='btn btn-light border me-1 pt-2'> View Details </a>
                            <a href='./pages/shop.page.php?pro_id=$pro_id' class='btn btn-primary shadow-0 px-2 pt-2'> <i class='fa-solid fa-cart-shopping'></i> Add to cart </a>
                            </div>
                        </div>
                    </div>
                </div>
        ";
    }
}

// This function connects to product categories on the database
function getPCats()
{
    global $db;

    $get_p_cats = "SELECT * FROM product_categories";

    $run_p_cats = mysqli_query($db, $get_p_cats);

    while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {

        $p_cat_id = $row_p_cats['p_cat_id'];

        $p_cat_title = $row_p_cats['p_cat_title'];

        echo "  <li>
                    <a class='text-dark' href='./shop.page.php?p_cat=$p_cat_id'> $p_cat_title </a>
                </li>  
            ";
    }
}

// This function connects to categories on the database
function getCats(){
    
    global $db;
    
    $get_cats = "SELECT * FROM categories";
    
    $run_cats = mysqli_query($db,$get_cats);
    
    while($row_cats=mysqli_fetch_array($run_cats)){
        
        $cat_id = $row_cats['cat_id'];
        
        $cat_title = $row_cats['cat_title'];
        
        echo "  <li>
                    <a class='text-dark' href='./shop.page.php?cat=$cat_id'> $cat_title </a>
                </li>
            ";
    }
}

// This function allows for the products to be sorted and placed in the correct sidebar menu links. It calls the info from the database.
function getpcatpro(){
    
    global $db;
    
    if(isset($_GET['p_cat'])){
        
        $p_cat_id = $_GET['p_cat'];
        
        $get_p_cat ="SELECT * FROM product_categories WHERE p_cat_id='$p_cat_id'";
        
        $run_p_cat = mysqli_query($db,$get_p_cat);
        
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        
        $p_cat_title = $row_p_cat['p_cat_title'];
        
        $p_cat_desc = $row_p_cat['p_cat_desc'];
        
        $get_products ="SELECT * FROM products WHERE p_cat_id='$p_cat_id'";
        
        $run_products = mysqli_query($db,$get_products);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            echo "  <header class='align-items-center border-bottom mb-4 pb-3'>
                        <h1><strong class='d-flex py-2'> No products found in this category </strong></h1>
                    </header>
                 ";
            
        }else{
            
            echo "  <header class='align-items-center border-bottom mb-4 pb-3'>
                        <h1><strong class='d-flex py-2'> $p_cat_title </strong></h1>
                        <p> $p_cat_desc </p>
                    </header>
                 ";  
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['product_id'];
        
            $pro_title = $row_products['product_title'];

            $pro_desc = $row_products['product_desc'];

            $pro_price = $row_products['product_price'];

            $pro_img1 = $row_products['product_img1'];
            
            echo "  <div class='col-lg-4 col-md-6 col-sm-6 d-flex'>
                        <div class='card w-100 my-2 shadow-2-strong'>
                            <a href='./details.page.php?pro_id=$pro_id'>
                                <img src='../admin/product-img/$pro_img1' class='card-img-top p-2' />
                            </a>
                                <div class='card-body d-flex flex-column'>
                            <a href='./details.page.php?pro_id=$pro_id'>
                                <h5 class='card-title'>$pro_title</h5>
                            </a>
                                <p class='card-text'>R $pro_price</p>
                            <div class='card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto'>
                                <a href='./details.page.php?pro_id=$pro_id' class='btn btn-light border me-1 pt-2'> View Details </a>
                                <a href='./cart.page.php?pro_id=$pro_id' class='btn btn-primary shadow-0 px-2 pt-2'> <i class='fa-solid fa-cart-shopping'></i> Add to cart </a>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
    }
}

// This function allows for the product categories to be sorted and placed in the correct sidebar menu links. It calls the info from the database.
function getcatpro(){
    
    global $db;
    
    if(isset($_GET['cat'])){
        
        $cat_id = $_GET['cat'];
        
        $get_cat = "SELECT * FROM categories WHERE cat_id='$cat_id'";
        
        $run_cat = mysqli_query($db,$get_cat);
        
        $row_cat = mysqli_fetch_array($run_cat);
        
        $cat_title = $row_cat['cat_title'];
        
        $cat_desc = $row_cat['cat_desc'];
        
        $get_cat = "SELECT * FROM products WHERE cat_id='$cat_id' LIMIT 0,6";
        
        $run_products = mysqli_query($db,$get_cat);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            echo "  <header class='align-items-center border-bottom mb-4 pb-3'>
                        <h1><strong class='d-flex py-2'> No products found in this category </strong></h1>
                    </header>
                 ";
        }else{
            
            echo "  <header class='align-items-center border-bottom mb-4 pb-3'>
                        <h1><strong class='d-flex py-2'> $cat_title </strong></h1>
                        <p> $cat_desc </p>
                    </header>
                 "; 
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['product_id'];
            
            $pro_title = $row_products['product_title'];
            
            $pro_price = $row_products['product_price'];
            
            $pro_desc = $row_products['product_desc'];
            
            $pro_img1 = $row_products['product_img1'];
            
            echo "  <div class='col-lg-4 col-md-6 col-sm-6 d-flex'>
                        <div class='card w-100 my-2 shadow-2-strong'>
                            <a href='./details.page.php?pro_id=$pro_id'>
                                <img src='../admin/product-img/$pro_img1' class='card-img-top p-2' />
                            </a>
                                <div class='card-body d-flex flex-column'>
                            <a href='./details.page.php?pro_id=$pro_id'>
                                <h5 class='card-title'>$pro_title</h5>
                            </a>
                                <p class='card-text'>R $pro_price</p>
                            <div class='card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto'>
                                <a href='./details.page.php?pro_id=$pro_id' class='btn btn-light border me-1 pt-2'> View Details </a>
                                <a href='./cart.page.php?pro_id=$pro_id' class='btn btn-primary shadow-0 px-2 pt-2'> <i class='fa-solid fa-cart-shopping'></i> Add to cart </a>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
    }
}


function items(){

    global $db;
    
    $ip_add = getRealIpUser();
    
    $get_items = "SELECT * FROM cart WHERE ip_add='$ip_add'";
    
    $run_items = mysqli_query($db,$get_items);
    
    $count_items = mysqli_num_rows($run_items);
    
    echo $count_items;
}

function total_price(){
    
    global $db;
    
    $ip_add = getRealIpUser();
    
    $total = 0;
    
    $select_cart = "SELECT * FROM cart WHERE ip_add='$ip_add'";
    
    $run_cart = mysqli_query($db,$select_cart);
    
    while($record=mysqli_fetch_array($run_cart)){
        
        $pro_id = $record['p_id'];
        
        $pro_qty = $record['qty'];
        
        $get_price = "SELECT * FROM products WHERE product_id='$pro_id'";
        
        $run_price = mysqli_query($db,$get_price);
        
        while($row_price=mysqli_fetch_array($run_price)){
            
            $sub_total = $row_price['product_price']*$pro_qty;
            
            $total += $sub_total;
            
        }
        
    }
    
    echo "R" ." ". $total;
    
}