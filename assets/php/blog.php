<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facetech-Blog</title>
    <link rel="stylesheet" href="../css/blog.css">
    <link rel="stylesheet" href="../css/homepg.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
       <div class="header_left">
       <div class="header-left">
       <a href="profilepage.php"><div class="profile"></div></a>
       <a href="#" class="sale">Hi  <?php session_start(); echo $_SESSION["username"];?></a>
        </div>

        <div class="header-center">
            <input type="text" placeholder="Search...">
        </div>
       </div>

        <div class="header-right">
            <a href="chat-box.php"><i class="fa-solid fa-comments"></i></a>
            <a href="../../index.php">Home</a>
            <a href="news.php">News</a>
            <a href="blog.php">Blog</a>
            <a href="assets/php/logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
    </header>
<div class="up_blog">
    <a href="upload_Blog.php"><i class="fa-solid fa-circle-plus"></i> &nbsp;Upload Blogs
    </a>
</div>


<section class="article-section">

<!-- <div class="btn_upload">
    <button>
          <a href="upload_Blog.php" id="side">Click For Uploading Blog</a> 
    </button>
</div> -->
    <h2>More Blogs</h2>
    <div class="article-grid">
        <div class="article-card">
            <img src="../img/web.png" alt="Web Development">
            <div class="article-content">
                <div class="author">Ajay Kumar</div>
                <h3>Things a Web Developer Needs to Learn</h3>
                <p>Introduction: Web development is a dynamic and ever-evolving field, and staying relevant as a web developer...</p>
                <a href="display_blog.php"><div class="load">Load More</div></a>
            </div>
        </div>
        
        <div class="article-card">
            <img src="../img/iPhone.png" alt="Artificial Intelligence">
            <div class="article-content">
                <div class="author">Nikhil kumar </div>
                <h3>ChatGPT vs Burd: A Comprehensive Comparison</h3>
                <p>Artificial intelligence has been one of the most rapidly advancing fields in the last few decades...</p>
                <a href="display_blog.php"><div class="load">Load More</div></a>

            </div>
        </div>
 
        <div class="article-card">
            <img src="../img/web.png" alt="5G Network">
            <div class="article-content">
                <div class="author">Manoj kumar</div>
                <h3>5G Network and its Implementation: A Guide for Beginners</h3>
                <p>The 5G network is the latest generation of mobile networks that promises to revolutionize the way we...</p>
                <a href="display_blog.php"><div class="load">Load More</div></a>

            </div>
        </div>
    </div> <br><br>

    <div class="article-grid">
        <div class="article-card">
            <img src="../img/web.png" alt="Web Development">
            <div class="article-content">
                <div class="author">Ajay Kumar</div>
                <h3>Things a Web Developer Needs to Learn</h3>
                <p>Introduction: Web development is a dynamic and ever-evolving field, and staying relevant as a web developer...</p>
                <a href="display_blog.php"><div class="load">Load More</div></a>

            </div>
        </div>
        <div class="article-card">
            <img src="../img/iPhone.png" alt="Artificial Intelligence">
            <div class="article-content">
                <div class="author">Nikhil kumar </div>
                <h3>ChatGPT vs Burd: A Comprehensive Comparison</h3>
                <p>Artificial intelligence has been one of the most rapidly advancing fields in the last few decades...</p>
                <a href="display_blog.php"><div class="load">Load More</div></a>

            </div>
        </div>
        <div class="article-card">
            <img src="../img/web.png" alt="5G Network">
            <div class="article-content">
                <div class="author">Manoj kumar</div>
                <h3>5G Network and its Implementation: A Guide for Beginners</h3>
                <p>The 5G network is the latest generation of mobile networks that promises to revolutionize the way we...</p>
                <a href="display_blog.php"><div class="load">Load More</div></a>

            </div>
        </div>
    </div> <br> <br>

    
</section>

<footer>
    <div class="footer-content">
      <p >Thank you for visiting our website. Stay connected with us through our social media channels.</p>
      <!-- <ul class="socials">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
      </ul> -->
    </div>
    <div class="footer-bottom">
      <p>&copy; 2024 FaceTech| Designed by Debuggers</p>
    </div>
  </footer>
</body>
</html>
