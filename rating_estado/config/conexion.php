<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "artedrez";
$con =mysqli_connect($host, $user, $pass, $db);
    if($con->connect_error){
        die("Connection failed: ". $con->connect_error);
    }
    //Tabla federacion
    $tFed = "federacion"; 
?>