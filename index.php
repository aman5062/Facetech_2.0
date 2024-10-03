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
    <link rel="stylesheet" href="assets/css/blog.css">
    <link rel="stylesheet" href="assets/css/homepg.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
       <div class="header_left">
       <div class="header-left">
        <a href="assets/php/profilepage.php"><div class="profile"></div></a>
            <a href="#" class="sale">Hi <?php echo $_SESSION["username"]; ?></a>
        </div>

        <div class="header-center">
            <input type="text" placeholder="Search...">
        </div>
       </div>

        <div class="header-right">
            <a href="index.php">Home</a>
            <a href="assets/php/news.php">News</a>
            <a href="assets/php/blog.php">Blog</a>
            <a href="assets/php/logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>
        
        </div>
    </header>

    <div class="hmpg">
        <div class="blog_hmpg">
        <div class="article-card">
            <img src="assets/img/web.png" alt="Web Development">
            <div class="article-content">
                <div class="author">Ajay Kumar</div>
                <h3>Things a Web Developer Needs to Learn</h3>
                <p>Introduction: Web development is a dynamic and ever-evolving field, and staying relevant as a web developer...</p>
            </div>
        </div>
        <br>
        <div class="article-card">
            <img src="assets/img/web.png" alt="Web Development">
            <div class="article-content">
                <div class="author">Ajay Kumar</div>
                <h3>Things a Web Developer Needs to Learn</h3>
                <p>Introduction: Web development is a dynamic and ever-evolving field, and staying relevant as a web developer...</p>
            </div>
        </div>
        </div>
        <div class="post_hmpg">
            <div class="post_con">
            <input type="text" id="post" placeholder="Start a post"> 
            <input type="file" id="imageUpload" accept="image/*">
            <button id="post_text">Post</button>
            </div>
            <br>
            <hr>
            <br>
            <div class="reg_post">
                <div class="article-card" >
                <div class="author" style="padding:10px 0 0 10px;">
                <div class="profile" style="border: 2px solid;">
                    <!-- <img src="assets/img/m.png" alt=""> -->
                </div> &nbsp; Ajay Kumar</div>
                    <h3 style="padding: 0 0 0 10px;">Things a Web Developer Needs to Learn</h3>
                <img src="assets/img/web.png" alt="Web Development">
                <div class="article-content">
                    <p>Introduction: Web development is a dynamic and ever-evolving field, and staying relevant as a web developer...</p>
                </div>
                 </div>
            </div>
        </div>
        <div class="suggest_hmpg">
            <div class="news_hmpg">
                <div class="news_img">
                    <img src="assets/pictures/news-2.jpeg" alt="" width="100%">
                </div>
                <div class="news_text">
                    <div class="news_title">
                        today hot news
                    </div>
                    <div class="news_con">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque modi quos suscipit iusto aperiam aut natus dolore quod............
                    </div>
                </div>
            </div>
            <div class="news_hmpg">
                <div class="news_img">
                    <img src="assets/pictures/news-2.jpeg" alt="" width="100%">
                </div>
                <div class="news_text">
                    <div class="news_title">
                        today hot news
                    </div>
                    <div class="news_con">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque modi quos suscipit iusto aperiam aut natus dolore quod............
                    </div>
                </div>

            </div><br>
            <hr><br>
            <div class="suggestion_hmpg">
                <div class="authors">
                    <div class="sug_con"><div class="profile" style="border: 2px solid;"></div> &nbsp; <p>shashank Kumar</p></div>
                    <div class="icon_add" ><i class="fa-solid fa-user-plus"></i></div>
                </div>
                <div class="authors">
                    <div class="sug_con"><div class="profile" style="border: 2px solid;"></div> &nbsp; <p>harsh Kumar</p></div>
                    <div class="icon_add" ><i class="fa-solid fa-user-plus"></i></div>
                </div>
                <div class="authors">
                    <div class="sug_con"><div class="profile" style="border: 2px solid;"></div> &nbsp; <p>nikhil Kumar sahu</p></div>
                    <div class="icon_add" ><i class="fa-solid fa-user-plus"></i></div>
                </div>
                <div class="authors">
                    <div class="sug_con"><div class="profile" style="border: 2px solid;"></div> &nbsp; <p>nikhil Kumar</p></div>
                    <div class="icon_add" ><i class="fa-solid fa-user-plus"></i></div>
                </div>
                <div class="authors">
                    <div class="sug_con"><div class="profile" style="border: 2px solid;"></div> &nbsp; <p>aman Kumar keshri</p></div>
                    <div class="icon_add" ><i class="fa-solid fa-user-plus"></i></div>
                </div>
                <div class="authors">
                    <div class="sug_con"><div class="profile" style="border: 2px solid;"></div> &nbsp; <p>Ajay Kumar</p></div>
                    <div class="icon_add" ><i class="fa-solid fa-user-plus"></i></div>
                </div>

            </div>
        </div>
    </div>
    
    
    <footer>
    <div class="footer-bottom">
      <p> 2024 FaceTech. All rights reserved to Team Debugers.</p>
    </div>
  </footer>
</body>
</html>