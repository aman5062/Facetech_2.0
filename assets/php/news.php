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
    <title>Responsive News Page</title>
    <link rel="stylesheet" href="../css/news-style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../css/blog.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <!-- Navbar -->
        <nav class="navbar">
            <div class="logo">Today's News</div> 
            
        </nav>




        <!-- backend data was here -->

        <div id="news-container">
            <div class="layer-one">
                <div class="new-box">
                    <div class="new-img">
                        <img src="../img/facetech-news-1.jpeg" alt="" height="100%" width="100%">
                    </div>
                    <div class="news-texts">
                        <h2>Breaking News....</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, tempore itaque culpa iste iure distinctio quidem rerum voluptas doloribus laborum ea enim eum consequatur asperiores ab tenetur odio! Nesciunt, tempore?</p>
                    </div>
                    <button > <a href="main-news-page.php">
                        Read More
                        </a>
                    </button>
                </div>
                <div class="new-box">
                    <div class="new-img">
                        <img src="../img/facetech-news-2.jpg" alt="" height="100%" width="100%">
                    </div>
                    <div class="news-texts">
                        <h2>Breaking News....</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, tempore itaque culpa iste iure distinctio quidem rerum voluptas doloribus laborum ea enim eum consequatur asperiores ab tenetur odio! Nesciunt, tempore?</p>
                    </div>
                    <button > <a href="main-news-page.php">
                        Read More
                        </a>
                    </button>
                </div>
                <div class="new-box">
                    <div class="new-img">
                        <img src="../img/facetech-news-3.jpg" alt="" height="100%" width="100%">
                    </div>
                    <div class="news-texts">
                        <h2>Breaking News....</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, tempore itaque culpa iste iure distinctio quidem rerum voluptas doloribus laborum ea enim eum consequatur asperiores ab tenetur odio! Nesciunt, tempore?</p>
                    </div>
                    <button > <a href="main-news-page.php">
                        Read More
                        </a>
                    </button>
                </div>
                <div class="new-box">
                    <div class="new-img">
                        <img src="../img/facetech-news-3.jpg" alt="" height="100%" width="100%">
                    </div>
                    <div class="news-texts">
                        <h2>Breaking News....</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, tempore itaque culpa iste iure distinctio quidem rerum voluptas doloribus laborum ea enim eum consequatur asperiores ab tenetur odio! Nesciunt, tempore?</p>
                    </div>
                    <button > <a href="main-news-page.php">
                        Read More
                        </a>
                    </button>
                </div>
                <div class="new-box">
                    <div class="new-img">
                        <img src="../img/facetech-news-1.jpeg" alt="" height="100%" width="100%">
                    </div>
                    <div class="news-texts">
                        <h2>Breaking News....</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, tempore itaque culpa iste iure distinctio quidem rerum voluptas doloribus laborum ea enim eum consequatur asperiores ab tenetur odio! Nesciunt, tempore?</p>
                    </div>
                    <button > <a href="main-news-page.php">
                        Read More
                        </a>
                    </button>
                </div>
                <div class="new-box">
                    <div class="new-img">
                        <img src="../img/facetech-news-2.jpg" alt="" height="100%" width="100%">
                    </div>
                    <div class="news-texts">
                        <h2>Breaking News....</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, tempore itaque culpa iste iure distinctio quidem rerum voluptas doloribus laborum ea enim eum consequatur asperiores ab tenetur odio! Nesciunt, tempore?</p>
                    </div>
                    <button > <a href="main-news-page.php">
                        Read More
                        </a>
                    </button>
                </div>
            </div>
        </div>















   

<footer>
    <div class="footer-content">
      <p >Thank you for visiting our website. Stay connected with us through our social media channels.</p>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2024 FaceTech| Designed by Debugers</p>
    </div>
</footer>

    <script >
        document.addEventListener("DOMContentLoaded", function() {
    const newsTexts = document.querySelectorAll(".news-text");
    const newsContents = document.querySelectorAll(".news-content");

    newsTexts.forEach((newsText) => {
        newsText.addEventListener("click", function() {
            this.classList.toggle("expanded");
        });
    });
    newsContents.forEach((newsContent) => {
        newsContent.addEventListener("click", function() {
            this.classList.toggle("expanded");
        });
    });
});
    </script>
</body>
</html>
