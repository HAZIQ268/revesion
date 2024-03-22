<?php

    
include("revesion/conn.php");

    $myId = $_GET['id'];
    $sql ="delete from users where id = $myId";
    $result = mysqli_query($connection ,$sql);

if ($result == true) {
    echo "Your Record Has Been deleted !" ;
}
else {
    echo "Your Record Has Been deleted !" ;
    
}





?>