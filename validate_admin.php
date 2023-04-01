<?php

    session_start();

    // lets Validate the user
        if($_SESSION['user_grp'] == "Staff"){
            // redirecting to login failed
                header("location:nz_user_dashboard.php");
        }
        else if($_SESSION['user_id'] == ''  or $_SESSION['user_grp'] != "Admin"){
            header("location:dshbrd_login.php");
        }

?>