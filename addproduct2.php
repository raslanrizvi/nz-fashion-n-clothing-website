<?php

    // Validating User Session
        require("validate_user.php");

    // linking the Database 
        require("db_connection.php");

    // linking the code_lib.inc.php
        require("code_lib.inc.php");

    // Get the data from the form and display
        // echo "<pre>";
        //     print_r($_REQUEST);
        // echo "</pre>";

    // Store the form field values to variables
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

    // building dynamic SQL Commands
        $sql = "insert into product (title,brand,size_xs,size_s,size_m,size_l,size_xl,size_xxl,ctgy,new_arrivals,sale,qty,description,price,sale_price) values(";
        $sql .= "'$title',";
        $sql .= "'$brand',";
        $sql .= "'$size_xs',";
        $sql .= "'$size_s',";
        $sql .= "'$size_m',";
        $sql .= "'$size_l',";
        $sql .= "'$size_xl',";
        $sql .= "'$size_xxl',";
        $sql .= "'$ctgy',";
        $sql .= "'$new_arrivals',";
        $sql .= "'$sale',";
        $sql .= "$qty,";
        $sql .= "'$description',";
        $sql .= "$price,";
        $sql .= "$sale_price)";


    // lets display the SQL Command
        // echo "$sql"

    // Execute SQL Commands
        $x = $mysqli->query($sql);

        if($x>0){
            // echo "record successfully added";

            // Picture Image Uploads Starts Here

                if ($_FILES['picture1']['error'] == 0 && $_FILES['picture1']['type'] == "image/jpeg") {

                    $Last_id     = $mysqli->insert_id;
                    $filename    = $_FILES['picture1']['tmp_name'];
                    $destination = $Last_id . "_" . rand() . rand() . rand() .".jpg";


                    $y = move_uploaded_file($filename, "images/products/large/".$destination);

                    if($y>0){
                        $sql2 = "update product set picture1 = '$destination' where ptd_id = " . $Last_id;
                        // execute the SQL Command
                        $z = $mysqli->query($sql2);



                        // lets copy the image to the small folder

                            copy("images/products/large/".$destination, "images/products/thumbnail/".$destination);

                        // resize the image
                            resizeThumbPicture("images/products/thumbnail/", $destination);
                    }
                    

                }

            // Picture Image Uploads Ends Here

            header("location:addproduct3.php?status=pass");
        }
        else{
            // echo "Adding New Record Failed";
            header("location:addproduct3.php?status=fail");
        }
  
?>