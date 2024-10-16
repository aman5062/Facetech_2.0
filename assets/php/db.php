<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facetech_2.0";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    echo "not connected";
}




?>