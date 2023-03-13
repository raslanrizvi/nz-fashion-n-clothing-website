<?php

  echo "<h1>";

    $pwd = "user";
    
    echo $pwd;

    echo "<hr />";

    echo "after encryption <br>";

    echo crypt($pwd,"x05h#09");

?>