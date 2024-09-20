<?php
include_once ("assets/html/db.php");
session_start();
if(isset($_SESSION["user"])){
   if($_SESSION["user"]=="active"){
        header("Location: ../../index.php");
    }
}


?>





<!DOCTYPE html>
<html lang="en">
<head>

    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
 
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="POST" action="login_check.php">
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" id="username" name="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password">

        <button>Log In</button>
        <div class="sing">
            <h3>Don't have an account? <a href="singup.php">singup now</a></h3>
          </div>

        <div class="social">
          <div class="go"><i class="fab fa-google"></i>  Google</div>
          <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
        </div>
    </form>
    <footer>
        <p>&copy; 2024 faceTech. All rights reserved to Team Debugers.</p>
    </footer>
</body>
</html>
