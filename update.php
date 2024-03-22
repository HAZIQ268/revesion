<?php

    
include("revesion/conn.php");

    $myId = $_GET['id'];
    $sql ="update users set name = 'harry' where id= $myId";
    $result = mysqli_query($connection ,$sql);

if ($result == true) {
    echo "Your Record Has Been updated !" ;
}
else {
    echo "Your Record Has Been updated !" ;
    
}





?>