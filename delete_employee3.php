<?php

// validation
    require("validate_admin.php");

// connecting the database
    require("db_connection.php");

    require("code_lib.inc.php");
    
    $user_id = $_REQUEST['user_id'];
    
    $old_picture_name = getEmpPicture($user_id);
    
    
// Dynamic SQL Command
    $sql = "delete from user_logs where user_id=" . "'$user_id'";





// executing SQL commands
    $x = $mysqli->query($sql);

    if($x > 0){


        if ($old_picture_name != "emp_default.jpg") {
            // delete the picture
                unlink("images/employee_user_dp/$old_picture_name");
        }

        // echo "Record Was Deleted Successfully";
        header("location:delete_employee4.php?status=pass");
    }
    else{
        // echo "Error Occurred While Deleting Product";
        header("location:delete_employee4.php?status=fail");
    }

?>