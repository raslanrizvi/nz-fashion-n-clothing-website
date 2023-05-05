<?php

    // Validating
        require("validate_admin.php");

        require("code_lib.inc.php");

    // connecting to the Database
        require("db_connection.php");

    // Getting the values from the edit product 2 page
        // echo "<pre>";
        //     print_r($_REQUEST);
        // echo "</pre>";

        // echo "<pre>";
        //     print_r($_FILES);
        // echo "</pre>";

    // copy from the field values to the variables
        $emp_name            = $_REQUEST['emp_name'];
        $user_id             = $_REQUEST['user_id'];
        $access_code_current = $_REQUEST['access_code_current'];
        $access_code_new     = $_REQUEST['access_code_new'];
        $access_code         = crypt($access_code_new,"x05h#09");
        $user_grp            = $_REQUEST['user_grp'];

    // Building the Dynamic SQL Commands
        $sql  = "update user_logs set ";
        $sql .= "user_id='$user_id',";
        $sql .= "access_code='$access_code',";
        $sql .= "emp_name='$emp_name',";
        $sql .= "user_grp='$user_grp' where user_id=" . "'$user_id'";


        $sql2 = "select * from user_logs where user_id=" . "'$user_id'";

        // executing the SQL Command
          $rs = $mysqli->query($sql2);
    
    
          if(mysqli_num_rows($rs)>0){
            // echo "User Found";
            
            // lets check the password
    
            $row = mysqli_fetch_assoc($rs);
    
              if($row['access_code'] == crypt($access_code_current,$row['access_code'])){
                // echo "Username and password correct";
                    // Execute the SQL Command
                    $x = $mysqli->query($sql);

                    if($x > 0){
                        // echo "successfully Updated";

                        // file upload code starts here
                        if ($_FILES['emp_picture']['error'] == 0 && $_FILES['emp_picture']['type'] == "image/jpeg" or $_FILES['emp_picture']['type'] == "image/png") {

                            $old_picture_name = getEmpPicture($user_id);
                            
                        

                            $filename    = $_FILES['emp_picture']['tmp_name'];

                            
    
                                if ($_FILES['emp_picture']['type'] == "image/jpeg") {
        
                                    $destination = rand() . rand() . rand() .".jpg";
                                }
        
                                if ($_FILES['emp_picture']['type'] == "image/png") {
        
                                    $destination = rand() . rand() . rand() .".png";
                                }
                           
                            
                                $y = move_uploaded_file($filename, "images/employee_user_dp/".$destination);

                                    if ($y > 0 && $old_picture_name != "emp_default.jpg") {
                                        unlink("images/employee_user_dp/" . $old_picture_name);
                                    }
    
                                $sql3 = "update user_logs set emp_picture = '$destination' where user_id = " . "'$user_id'";
                                // execute the SQL Command
                                $z = $mysqli->query($sql3);
                            
                            
    
                        }

                        // echo "Changes Saved Successfully";
                        header("location:edit_employee4.php?status=pass");
                    }
                    else{
                        // echo "Saving Changes Failed";
                        header("location:edit_employee4.php?status=fail");
                    }
                }
                else{
                    // echo "password incorrect";
                    header("location:edit_employee4.php?status=cPassFail");
                }
          }
          else{
            // echo "User Not Found";
            header("location:edit_employee4.php?status=uNameFail");
          }


?>