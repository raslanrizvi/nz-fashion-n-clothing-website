<?php

    // connecting to the Database
        require("db_connection.php");

        require("code_lib.inc.php");

    // Getting the values from the edit product 2 page
        // echo "<pre>";
        //     print_r($_REQUEST);
        // echo "</pre>";

        // echo "<pre>";
        //     print_r($_FILES);
        // echo "</pre>";

    // copy from the field values to the variables
        $cstmr_name          = $_REQUEST['cstmr_name'];
        $user_id             = $_REQUEST['user_id'];
        $access_code_current = $_REQUEST['cstmr_current_pwd'];
        $access_code_new     = $_REQUEST['cstmr_new_pwd'];
        $access_code         = crypt($access_code_new,"x05h#09");

        // echo $user_id;
        

    // Building the Dynamic SQL Commands
        $sql  = "update cstmr_logs set ";
        $sql .= "user_id='$user_id',";
        $sql .= "access_code='$access_code',";
        $sql .= "cstmr_name='$cstmr_name' where user_id="."'$user_id'";


        $sql2 = "select * from cstmr_logs where user_id="."'$user_id'";

        // echo $sql2;

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
                        $_SESSION['cstmr_name'] = $cstmr_name;

                        // file upload code starts here
                            if (isset($_FILES['cstmr_picture'])) {
                                
                            
                            if ($_FILES['cstmr_picture']['error'] == 0 && $_FILES['cstmr_picture']['type'] == "image/jpeg" or $_FILES['cstmr_picture']['type'] == "image/png") {

                                $old_picture_name = getCstmrPicture($user_id);
                                $filename    = $_FILES['cstmr_picture']['tmp_name'];
                                $destination;

                                
                                

                                    if ($_FILES['cstmr_picture']['type'] == "image/jpeg") {
            
                                        $destination = rand() . rand() . rand() .".jpg";
                                    }
            
                                    if ($_FILES['cstmr_picture']['type'] == "image/png") {
            
                                        $destination = rand() . rand() . rand() .".png";
                                    }


                                    
                            
                                
                                    $y = move_uploaded_file($filename, "images/cstmr_dp/".$destination);

                                        if ($y > 0 && $old_picture_name != "cstmr_default.png") {
                                            unlink("images/cstmr_dp/" . $old_picture_name);
                                        }
        
                                    $sql3 = "update cstmr_logs set cstmr_picture = '$destination' where user_id = " . "'$user_id'";
                                    // execute the SQL Command
                                    $z = $mysqli->query($sql3);
                                    $_SESSION['cstmr_picture'] = $destination;
                                
                                
        
                            }
                        }
                            // echo "Changes Saved Successfully";
                            header("location:cstmr_dshbrd_edit3.php?status=pass");
                            
                        
                    }
                    else{
                        // echo "Saving Changes Failed";
                        header("location:cstmr_dshbrd_edit3.php?status=fail");
                    }
                }
                else{
                    // echo "password incorrect";
                    header("location:cstmr_dshbrd_edit3.php?status=cPassFail");
                }
          }
          else{
            // echo "User Not Found";
            header("location:cstmr_dshbrd_edit3.php?status=uNameFail");
          }


?>