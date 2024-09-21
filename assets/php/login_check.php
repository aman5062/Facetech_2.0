<?php
    include_once "db.php";
    session_start();
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password = md5("$password");
    $sql = "SELECT * FROM `user` WHERE Username = '$username'";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    if($count==1){
       $sql2 = "SELECT * FROM `user` WHERE Username = '$username' AND Password ='$password' ";
       $result2 = mysqli_query($conn,$sql2);
       $count2 = mysqli_num_rows($result2);

    if($count2==1){
        // $result = mysqli_query($conn,$sql);
        $row = $result-> fetch_assoc();
        $_SESSION["username"] = $row["Username"];
        $_SESSION["user"]="active";
        header("Location: ../../index.php");
    }
    else{ 
        echo "wrong password";
    }

    }
    else{
        echo "wrong username";
    }
?>