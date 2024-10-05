<?php
include_once ("db.php");
session_start();
if(!isset($_SESSION["user"])){
    header("Location: login.php");
}else{
    if(!$_SESSION["user"]=="active"){
        header("Location: login.php");
    }
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Page</title>
    <link rel="stylesheet" href="../css/main-news.css">
</head>
<body>
<header>
       <div class="header_left">
       <div class="header-left">
       <a href="profilepage.php"><div class="profile"></div></a>
            <a href="#" class="sale">Hi  <?php echo $_SESSION["username"];?></a>
        </div>

        <div class="header-center">
            <input type="text" placeholder="Search...">
        </div>
       </div>

        <div class="header-right">
            <a href="../../index.php">Home</a>
            <a href="news.php">News</a>
            <a href="blog.php">Blog</a>
            <a href="assets/php/logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>
        
        </div>
    </header>
    <div class="news-container">
        <img src="../img/facetech-news-2.jpg" alt="News Image" class="news-image">
        <h1 class="headline">Breaking News: Major Event Happening Right Now</h1>
        <p class="news-content">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a mi quam. Vivamus at orci at velit feugiat lacinia.
            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima fuga nemo hic odio aliquid. Modi suscipit magnam, alias, ad facere eius voluptate sit consectetur, nisi earum optio sint voluptates quibusdam?
            Repudiandae quidem veniam vitae nulla odit facilis suscipit, corrupti deserunt consequatur dolorem incidunt reiciendis delectus aperiam quisquam vero animi, officia eius fuga. Assumenda delectus est magni dolorem numquam sit obcaecati?
            Necessitatibus fugit repellendus, et vero commodi recusandae voluptate deserunt velit numquam suscipit, quas porro at aperiam atque accusantium quos iure dolorem natus itaque! Aliquam fugit ea numquam at. Pariatur, dignissimos!
            Omnis recusandae, neque laudantium vitae aliquam voluptatem doloribus sapiente dolor quaerat ipsam aliquid, qui dolorum culpa magnam sit nemo voluptates? Amet excepturi impedit sit voluptatem molestiae quia, assumenda ex. Sunt?
            Recusandae praesentium nam ex harum consectetur! Voluptate possimus in, eveniet temporibus dicta ipsam modi sed? Harum, accusantium minus similique doloribus adipisci nisi quisquam itaque sed laboriosam nulla eligendi numquam necessitatibus.
            Unde quas praesentium numquam non deleniti sequi perspiciatis molestias quis nihil libero beatae voluptas enim culpa neque ipsam fugit accusamus rem, itaque illum, eveniet magni velit maxime nisi? Nobis, quae!
            Cum possimus ipsam rem exercitationem accusamus quisquam ea! Magnam exercitationem animi rem id eius, debitis autem dolores fugit eos error, dignissimos temporibus non minima reiciendis iure sit minus maiores. Aliquid.
            Provident ipsam labore voluptatibus numquam eveniet est praesentium officiis deserunt amet nam eaque, id fugit dolore similique neque incidunt aperiam, nostrum et placeat. Quibusdam nihil eveniet, odit ea eligendi molestias?
      
        </p>
        <button class="like-btn" onclick="toggleLike()">Like</button>
        <button class="toggle-info-btn" onclick="toggleInfo()">More Info</button>
        <div class="additional-info" id="extra-info">
            <p>
                This is some additional information about the news that can be revealed when the user clicks on the 'More Info' button.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam scelerisque leo non quam tincidunt dictum.
            </p>
        </div>
    </div>
    <script src="../js/main-news.js"></script>

</body>
</html>
