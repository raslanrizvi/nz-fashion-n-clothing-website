<?php

    // Validating
        require("validate_user.php");

        require("code_lib.inc.php");

    // connecting to the Database
        require("db_connection.php");

    // Getting the values from the edit product 2 page
        // echo "<pre>";
        //     print_r($_REQUEST);
        // echo "</pre>";

    // copy from the field values to the variables
        $ptd_id       = $_REQUEST['ptd_id'];
        $title        = $_REQUEST['title'];
        $brand        = $_REQUEST['brand'];
        $size_xs      = $_REQUEST['size_xs'];
        $size_s       = $_REQUEST['size_s'];
        $size_m       = $_REQUEST['size_m'];
        $size_l       = $_REQUEST['size_l'];
        $size_xl      = $_REQUEST['size_xl'];
        $size_xxl     = $_REQUEST['size_xxl'];
        $ctgy         = $_REQUEST['ctgy'];
        $new_arrivals = $_REQUEST['new_arrivals'];
        $sale         = $_REQUEST['sale'];
        $qty          = $_REQUEST['qty'];
        $description  = $_REQUEST['description'];
        $price        = $_REQUEST['price'];
        $sale_price   = $_REQUEST['sale_price'];

    // Building the Dynamic SQL Commands
        $sql  = "update product set ";
        $sql .= "title='$title',";
        $sql .= "brand='$brand',";
        $sql .= "size_xs='$size_xs',";
        $sql .= "size_s='$size_s',";
        $sql .= "size_m='$size_m',";
        $sql .= "size_l='$size_l',";
        $sql .= "size_xl='$size_xl',";
        $sql .= "size_xxl='$size_xxl',";
        $sql .= "ctgy='$ctgy',";
        $sql .= "new_arrivals='$new_arrivals',";
        $sql .= "sale='$sale',";
        $sql .= "qty=$qty,";
        $sql .= "description='$description',";
        $sql .= "price=$price,";
        $sql .= "sale_price=$sale_price where ptd_id=$ptd_id";


    // Execute the SQL Command
        $x = $mysqli->query($sql);

        if($x > 0){
            // echo "successfully Updated";

            // file upload code starts here
                if ($_FILES['picture1']['error'] == 0 && $_FILES['Picture1']['type'] == "image/jpeg") {
                   $old_picture_name = getProductPicture($ptd_id);

                   $filename = $_FILES['picture1']['tmp_name'];
                   $destination;

                   if ($old_picture_name == "default.jpg") {
                    //   generate new file name
                        $destination = $ptd_id. rand().rand().rand().".jpg";
                       
                   }
                   else {
                          $destination = $old_picture_name;
                   }

                   $y = move_uploaded_file($filename, "images/products/large/".$destination);
                    if ($y > 0 && $old_picture_name != "default.jpg") {
                        unlink("images/cstmr_dp/" . $old_picture_name);
                    }

                   copy("images/products/large/".$destination, "images/products/thumbnail/".$destination);

                   resizeThumbPicture("images/products/thumbnail/", $destination);


                //    Lets Update the picture field in the product table
                        $sql2 = "update product set picture1='$destination' where ptd_id=$ptd_id";

                        $mysqli->query($sql2);

                }

            header("location:editproduct4.php?status=pass");
        }
        else{
            // echo "Saving Changes Failed";
            header("location:editproduct4.php?status=fail");
        }


?>