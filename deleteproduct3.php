<?php

    // validation
        require("validate_admin.php");

    // connecting the database
        require("db_connection.php");

        require("code_lib.inc.php");
        
        $ptd_id = $_REQUEST['ptd_id'];
        
        $old_picture_name = getProductPicture($ptd_id);
        
        
    // Dynamic SQL Command
        $sql = "delete from product where ptd_id=$ptd_id";





    // executing SQL commands
        $x = $mysqli->query($sql);

        if($x > 0){


            if ($old_picture_name != "default.jpg") {
                // delete the picture
                    unlink("images/products/large/$old_picture_name");
                    unlink("images/products/thumbnail/$old_picture_name");
            }

            // echo "Record Was Deleted Successfully";
            header("location:deleteproduct4.php?status=pass");
        }
        else{
            // echo "Error Occurred While Deleting Product";
            header("location:deleteproduct4.php?status=fail");
        }

?>