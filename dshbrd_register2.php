<?php

    // Validating User Session
        require("validate_admin.php");

    // linking the Database 
        require("db_connection.php");

    // linking the code_lib.inc.php
        require("code_lib.inc.php");

    // Get the data from the form and display
        // echo "<pre>";
        //     print_r($_REQUEST);
        // echo "</pre>";

    // Store the form field values to variables
        $emp_name       = $_REQUEST['emp_name'];
        $user_id        = $_REQUEST['user_id'];
        $access_code    = crypt($_REQUEST['access_code'],"x05h#09");
        $user_grp       = $_REQUEST['user_grp'];

        // echo $access_code;

    // building dynamic SQL Commands
        $sql = "select user_id from user_logs where user_id = '$user_id'";
        $sql1 = "insert into user_logs (user_id, access_code, emp_name, user_grp) values(";
        $sql1 .= "'$user_id',";
        $sql1 .= "'$access_code',";
        $sql1 .= "'$emp_name',";
        $sql1 .= "'$user_grp')";


    // lets display the SQL Command
        echo "$sql1";

        echo "<pre>";
            print_r($_FILES);
        echo "</pre>";

        $rs = $mysqli->query($sql);

    // Execute SQL Commands
        if (mysqli_num_rows($rs) == 0) {
            
            $x = $mysqli->query($sql1);

            if($x>0){
                // echo "record successfully added";

                // Picture Image Uploads Starts Here

                    if ($_FILES['emp_picture']['error'] == 0 && $_FILES['emp_picture']['type'] == "image/jpeg" or $_FILES['emp_picture']['type'] == "image/png") {

                        
                        $filename    = $_FILES['emp_picture']['tmp_name'];

                        if ($_FILES['emp_picture']['type'] == "image/jpeg") {

                            $destination = rand() . rand() . rand() .".jpg";
                        }

                        if ($_FILES['emp_picture']['type'] == "image/png") {

                            $destination = rand() . rand() . rand() .".png";
                        }
                        
                        // echo $destination;
                        
                        // echo $filename;

                        $y = move_uploaded_file($filename, "images/employee_user_dp/".$destination);

                        // echo $y;

                        if($y>0){
                            $sql3 = "update user_logs set emp_picture = '$destination' where user_id = " . "'$user_id'";
                            // execute the SQL Command
                            $z = $mysqli->query($sql3);
                        }
                        

                    }

                // Picture Image Uploads Ends Here

                header("location:dshbrd_register3.php?status=pass");
            }
            else{
                // echo "Adding New Record Failed";
                header("location:dshbrd_register3.php?status=fail");
            }
        }
        else{
            // echo "User ID already exists";
            header("location:dshbrd_register3.php?status=exists");
        }
  
?>