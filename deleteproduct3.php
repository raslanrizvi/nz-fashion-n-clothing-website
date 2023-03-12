<?php

    // connecting the database
        require("db_connection.php");

        $ptd_id = $_REQUEST['ptd_id'];

    // Dynamic SQL Command
        $sql = "delete from product where ptd_id=$ptd_id";

    // executing SQL commands
        $x = $mysqli->query($sql);

        if($x > 0){
            // echo "Record Was Deleted Successfully";
            header("location:deleteproduct4.php?status=pass");
        }
        else{
            // echo "Error Occurred While Deleting Product";
            header("location:deleteproduct4.php?status=fail");
        }

?>