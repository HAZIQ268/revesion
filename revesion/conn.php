<?php

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "rev";

    $connection = new mysqli ($serverName ,$userName ,$password ,$dbName);

    if ($connection == true) {
        echo "connection successful";
    }
    else {
        echo "connection failed !";
    }


?>