<?php

    session_start();

    // lets Validate the user
        if($_SESSION['user_id'] == ''  or $_SESSION['user_grp'] != "Admin"){
            // redirecting to login failed
                header("location:dshbrd_login.php");
        }

?>