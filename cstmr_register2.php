<?php

    // linking the Database 
        require("db_connection.php");

    // linking the code_lib.inc.php
        require("code_lib.inc.php");

    // Get the data from the form and display
        // echo "<pre>";
        //     print_r($_REQUEST);
        // echo "</pre>";

    // Store the form field values to variables
        $cstmr_name       = $_REQUEST['cstmr_name'];
        $user_id        = $_REQUEST['user_id'];
        $access_code    = crypt($_REQUEST['access_code'],"x05h#09");

        // echo $access_code;

    // building dynamic SQL Commands
        $sql = "select user_id from cstmr_logs where user_id = '$user_id'";
        $sql1 = "insert into cstmr_logs (user_id, access_code, cstmr_name) values(";
        $sql1 .= "'$user_id',";
        $sql1 .= "'$access_code',";
        $sql1 .= "'$cstmr_name')";


    // lets display the SQL Command
        echo "$sql1";

        // echo "<pre>";
        //     print_r($_FILES);
        // echo "</pre>";

        $rs = $mysqli->query($sql);

    // Execute SQL Commands
        if (mysqli_num_rows($rs) == 0) {
            
            $x = $mysqli->query($sql1);

            if($x>0){
                // echo "record successfully added";

                // Picture Image Uploads Starts Here

                    if ($_FILES['cstmr_picture']['error'] == 0 && $_FILES['cstmr_picture']['type'] == "image/jpeg" or $_FILES['cstmr_picture']['type'] == "image/png") {

                        
                        $filename    = $_FILES['cstmr_picture']['tmp_name'];

                        if ($_FILES['cstmr_picture']['type'] == "image/jpeg") {

                            $destination = rand() . rand() . rand() .".jpg";
                        }

                        if ($_FILES['cstmr_picture']['type'] == "image/png") {

                            $destination = rand() . rand() . rand() .".png";
                        }
                        
                        // echo $destination;
                        
                        // echo $filename;

                        $y = move_uploaded_file($filename, "images/cstmr_id/".$destination);

                        // echo $y;

                        if($y>0){
                            $sql3 = "update cstmr_logs set cstmr_picture = '$destination' where user_id = " . "'$user_id'";
                            // execute the SQL Command
                            $z = $mysqli->query($sql3);
                        }
                        

                    }

                // Picture Image Uploads Ends Here

                header("location:cstmr_register3.php?status=pass");
            }
            else{
                // echo "Adding New Record Failed";
                header("location:cstmr_register3.php?status=fail");
            }
        }
        else{
            // echo "User ID already exists";
            header("location:cstmr_register3.php?status=exists");
        }
  
?>