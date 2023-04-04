<?php

  // start session
    session_start();

  // connecting the DB
    require("db_connection.php");

    // echo "<pre>";
    //   print_r($_REQUEST);
    // echo "</pre>"


    // storing values to var
      $user_id     = $_REQUEST['user_id'];
      $access_code = $_REQUEST['access_code'];

    // creating dynamic SQL Command
      $sql = "select * from cstmr_logs where user_id='$user_id'";

    // executing the SQL Command
      $rs = $mysqli->query($sql);


      if(mysqli_num_rows($rs)>0){
        // echo "User Found";
        
        // lets check the password

        $row = mysqli_fetch_assoc($rs);

            $_SESSION['user_id'] = $user_id;
            $_SESSION['cstmr_name'] = $row['cstmr_name'];
            $_SESSION['cstmr_picture'] = $row['cstmr_picture'];

          if($row['access_code'] == crypt($access_code,$row['access_code'])){
            // echo "Username and password correct";



              // redirecting to user dashboard
              header("location:cstmr_dshbrd.php");

          }
          else {
            // echo "Username or password incorrect";
            // redirecting to loginfailed
            header("location:invalid_cstmr_login.php");
          }
      }
      else{
        // redirecting to loginfailed
        header("location:invalid_cstmr_login.php");
      }

?>