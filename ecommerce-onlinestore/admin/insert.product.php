<?php
include '../admin/includes/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/a99a1dce0d.js" crossorigin="anonymous"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Custom JS -->
    <script defer src="../js/app.js"></script>
</head>

<body>

    <div class="container py-5"><!-- container start -->

        <div class="row"><!-- row start -->

            <div class="col-lg-12"><!-- col-lg-12 start -->

                <ol class="breadcrumb"><!-- breadcrumb start -->

                    <li class="active">
                        <i class="fa fa-dashboard"></i> Dashboard / Insert Product
                    </li>

                </ol><!-- breadcrumb end -->

            </div><!-- col-lg-12 end -->

        </div><!-- row end -->

        <div class="row"><!-- row start -->
            <div class="col-lg-12"><!-- col-lg-12 start -->
                <div class="panel panel-default"><!-- panel panel-default start -->
                    <div class="panel-heading"><!-- panel-heading start -->
                        <h3 class="panel-title"><!-- panel-title start -->
                            <i class="fa fa-money fa-fw"></i> Insert Product
                        </h3><!-- panel-title end -->
                    </div><!-- panel-heading end -->

                    <div class="panel-body"><!-- panel-body start -->

                        <form action="" method="POST" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal start -->

                            <div class="form-group"><!-- form-group start -->

                                <label class="col-md-3 control-label"> Product Title</label>

                                <div class="col-md-6"><!-- col-md-6 start -->

                                    <input name="product_title" type="text" class="form-control" required>

                                </div><!-- col-md-6 end -->

                            </div><!-- form-group end -->

                            <div class="form-group"><!-- form-group start -->

                                <label class="col-md-3 control-label"> Product Category</label>

                                <div class="col-md-6"><!-- col-md-6 start -->

                                    <select name="product_cat" class="form-control"><!-- form-control start -->

                                        <option> Select a Category Product </option>

                                        <?php

                                        $get_p_cat = "SELECT * FROM product_categories";
                                        $run_p_cat = mysqli_query($con, $get_p_cat);

                                        while ($row_p_cat = mysqli_fetch_array($run_p_cat)) {

                                            $p_cat_id = $row_p_cat['p_cat_id'];
                                            $p_cat_title = $row_p_cat['p_cat_title'];

                                            echo "
                        
                                                <option value='$p_cat_id'> $p_cat_title </option>
                        
                        
                                                ";
                                        }

                                        ?>

                                    </select><!-- form-control end -->

                                </div><!-- col-md-6 end -->

                            </div><!-- form-group end -->

                            <div class="form-group"><!-- form-group start -->

                                <label class="col-md-3 control-label"> Category</label>

                                <div class="col-md-6"><!-- col-md-6 start -->

                                    <select name="cat" class="form-control"><!-- form-control start -->

                                        <option> Select a Category </option>

                                        <?php

                                        $get_cat = "SELECT * FROM categories";
                                        $run_cat = mysqli_query($con, $get_cat);

                                        while ($row_cat = mysqli_fetch_array($run_cat)) {

                                            $cat_id = $row_cat['cat_id'];
                                            $cat_title = $row_cat['cat_title'];

                                            echo "
            
                                                <option value='$cat_id'> $cat_title </option>
                    
                                                ";
                                        }

                                        ?>

                                    </select><!-- form-control end -->

                                </div><!-- col-md-6 end -->

                            </div><!-- form-group end -->

                            <div class="form-group"><!-- form-group start -->

                                <label class="col-md-3 control-label"> Product Image 1</label>

                                <div class="col-md-6"><!-- col-md-6 start -->

                                    <input name="product_img1" type="file" class="form-control" required>

                                </div><!-- col-md-6 end -->

                            </div><!-- form-group end -->

                            <div class="form-group"><!-- form-group start -->

                                <label class="col-md-3 control-label"> Product Image 2</label>

                                <div class="col-md-6"><!-- col-md-6 start -->

                                    <input name="product_img2" type="file" class="form-control">

                                </div><!-- col-md-6 end -->

                            </div><!-- form-group end -->

                            <div class="form-group"><!-- form-group start -->

                                <label class="col-md-3 control-label"> Product Image 3</label>

                                <div class="col-md-6"><!-- col-md-6 start -->

                                    <input name="product_img3" type="file" class="form-control">

                                </div><!-- col-md-6 end -->

                            </div><!-- form-group end -->

                            <div class="form-group"><!-- form-group start -->

                                <label class="col-md-3 control-label"> Product Price</label>

                                <div class="col-md-6"><!-- col-md-6 start -->

                                    <input name="product_price" type="text" class="form-control" required>

                                </div><!-- col-md-6 end -->

                            </div><!-- form-group end -->

                            <div class="form-group"><!-- form-group start -->

                                <label class="col-md-3 control-label"> Product Keywords</label>

                                <div class="col-md-6"><!-- col-md-6 start -->

                                    <input name="product_keywords" type="text" class="form-control" required>

                                </div><!-- col-md-6 end -->

                            </div><!-- form-group end -->

                            <div class="form-group"><!-- form-group start -->

                                <label class="col-md-3 control-label"> Product Desc</label>

                                <div class="col-md-6"><!-- col-md-6 start -->

                                    <textarea name="product_desc" id="" cols="30" rows="6"></textarea>

                                </div><!-- col-md-6 end -->

                            </div><!-- form-group end -->

                            <div class="form-group"><!-- form-group start -->

                                <label class="col-md-3 control-label"></label>

                                <div class="col-md-6"><!-- col-md-6 start -->

                                    <input name="submit" value="Insert Product" type="submit" class="btn btn-primary form-control">

                                </div><!-- col-md-6 end -->

                            </div><!-- form-group end -->

                        </form><!-- form-horizontal end -->

                    </div><!-- panel-body end -->

                </div><!-- panel panel-default end -->

            </div><!-- col-lg-12 end -->
        </div><!-- row end -->

    </div><!-- container end -->

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <!-- Custom JS -->
    <script src="https://kit.fontawesome.com/a99a1dce0d.js" crossorigin="anonymous"></script>

    <!-- <script src="../js/script.js"></script> -->

    <script src="../admin/js/tinymce/js/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>
</body>

</html>


<?php

if (isset($_POST['submit'])) {

    // adding and storing the product images to a database then uploading them to the ecom shop
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $cat = $_POST['cat'];
    $product_price = $_POST['product_price'];
    $product_keywords = $_POST['product_keywords'];
    $product_desc = $_POST['product_desc'];

    // $product_img1 is my variable name & $_FILE is the method used for my images
    $product_img1 = $_FILES['product_img1']['name'];
    $product_img2 = $_FILES['product_img2']['name'];
    $product_img3 = $_FILES['product_img3']['name'];

    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    $temp_name2 = $_FILES['product_img2']['tmp_name'];
    $temp_name3 = $_FILES['product_img3']['tmp_name'];

    // this function will the image to a location of my choosing
    move_uploaded_file($temp_name1, "product_images/$product_img1");
    move_uploaded_file($temp_name2, "product_images/$product_img2");
    move_uploaded_file($temp_name3, "product_images/$product_img3");

    $insert_product = "INSERT INTO products (p_cat_id,cat_id,DATE,product_title,product_img1,product_img2,product_img3,product_price,product_keywords,product_desc) VALUES ('$product_cat','$cat',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_keywords','$product_desc')";

    $run_product = mysqli_query($con, $insert_product);

    if ($run_product) {
        echo "<script>alert('Product has been inserted successfully')</script>";
        echo "<script>window.open('insert.product.php','_self')</script>";
    }
}

?>