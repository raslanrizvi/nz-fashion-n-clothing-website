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
      $sql = "select * from user_logs where user_id='$user_id'";

    // executing the SQL Command
      $rs = $mysqli->query($sql);


      if(mysqli_num_rows($rs)>0){
        // echo "User Found";
        
        // lets check the password

        $row = mysqli_fetch_assoc($rs);

            $_SESSION['user_id'] = $user_id;
            $_SESSION['user_grp'] = $row['user_grp'];

          if($row['access_code'] == crypt($access_code,$row['access_code'])){
            // echo "Username and password correct";


            // redirecting to dashboard

            // Checking if Admin
            if ($row['user_grp'] == "Admin") {
              // redirecting to admin dashboard
              header("location:nz_admin_dashboard.php");
            }
            else {
              // redirecting to user dashboard
              header("location:nz_user_dashboard.php");
            }

          }
          else {
            // echo "Username or password incorrect";
            // redirecting to loginfailed
            header("location:invalid_dshbrd_login.php");
          }
      }
      else{
        // redirecting to loginfailed
        header("location:invalid_dshbrd_login.php");
      }

?>