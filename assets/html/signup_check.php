<?php

    include_once "db.php";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password = md5($password);

    // echo $name." ".$email." ".$username." ".$password;
    $sql = "INSERT INTO `user`(`Sno`, `Name`, `Email`, `Username`, `Password`) VALUES (NULL,'$name','$email','$username','$password')";

    $result = mysqli_query($conn,$sql);
    if($result==1)  {
        header("Location: login.php");
    }
?>