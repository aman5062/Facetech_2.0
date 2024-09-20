<?php
include_once ("assets/php/db.php");
session_start();
if(!isset($_SESSION["user"])){
    header("Location: assets/php/login.php");
}else{
    if(!$_SESSION["user"]=="active"){
        header("Location: assets/php/login.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facetech - Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/news-style.css">
</head>
<body>
    <form>
    <div class="opennav">
        <p class="openbtn">Hi User</p>
        <div class="texti"><input type="text" value="Search" id="texttt" style="width: 100%;"></div>
        <ul class="openlinks">
            <li><a href="#">Home</a></li>
            <li><a href="assets/php/news.php">News</a></li>
            <li><a href="#">Blog</a></li>
        </ul>
    </div>
    <section class="homeee">
        <h1>Welcome to Facetech!</h1>
        <p>This is the home page of Facetech, a social platform where you can connect with friends, family, and colleagues.</p>
    </section>
    <section class="newsss">
        <h1>Latest News</h1>
        <ul>
            <li><a href="#">News Article 1</a></li>
            <li><a href="#">News Article 2</a></li>
            <li><a href="#">News Article 3</a></li>
        </ul>
    </section>
    <section class="bloggg">
        <h1>Latest Blog Posts</h1>
        <ul>
            <li><a href="#">Blog Post 1</a></li>
            <li><a href="#">Blog Post 2</a></li>
            <li><a href="#">Blog Post 3</a></li>
        </ul>
    </section>
    <footer>
        <p>&copy; 2024 FaceTech. All rights reserved to Team Debugers.</p>
    </footer>
    </form>
</body>
</html>