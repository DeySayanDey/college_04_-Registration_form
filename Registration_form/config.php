<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="nm";
    $port="3306";

    $con=mysqli_connect($host, $user, $password, $db, $port);
    if(!$con){
        echo "Connection is not established";
    }
?>
