<?php

    session_start();

    // lets Validate the user
        if($_SESSION['user_id'] == ''){
            // redirecting to login failed
                header("location:invalid_dshbrd_login.php");
        }

?>