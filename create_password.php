<?php

  echo "<h1>";

    $pwd = "1234";
    
    echo $pwd;

    echo "<hr />";

    echo "after encryption <br>";

    echo crypt($pwd,"x05h#09");

?>