<?php

// Main Database Connection Code
    $server   = "localhost";
    $username = "root";
    $password = "";
    $db_name  = "db_nz_fashion";

    $mysqli = new mysqli($server,$username,$password,$db_name);

    if($mysqli->connect_error){
        echo $mysqli->errorno . "<br>";
        echo $mysqli->error . "<br>";
        die("connection failed");
    }
    // echo "connection successfull";

?>