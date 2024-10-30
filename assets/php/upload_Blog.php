<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/blog.css">
    <title>FaceTech-Blog Upload</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <header>
        <div class="header_left">
        <div class="header-left">
        <a href="profilepage.php"><div class="profile"></div></a>
        <a href="#" class="sale">Hi 
                 <?php session_start(); echo $_SESSION["username"];?>
            </a>
         </div>
 
         <div class="header-center">
             <input type="text" placeholder="Search...">
         </div>
        </div>
 
         <div class="header-right">
             <a href="../../index.php">Home</a>
             <a href="news.php">News</a>
             <a href="blog.php">Blog</a>
             <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>

         </div>
     </header>

    <center><div id="click" ><a href="../php/blog.php">Go to The Blog Page </a></div></center>

    <section id="Upload">
        <div class="form-section">
            <h2>FORM</h2>
            <div class="form-group">
                <label for="imageUpload">Upload Image:</label>
                <input type="file" id="imageUpload" accept="image/*">
            </div>
            <div class="form-group">
                <label for="blogTitle">Blog Title:</label>
                <input type="text" id="blogTitle" placeholder="Enter blog title">
            </div>
            <div class="form-group">
                <label for="blogContent">Blog Content:</label>
                <textarea id="blogContent" rows="10" placeholder="Write your blog content here..."></textarea>
            </div>
            <div class="button-group">
                <button id="submitBtn">Submit</button>
                <button id="previewBtn">Preview</button>
            </div>
        </div>
        <div class="preview-section">
            <h2>PREVIEW</h2>
            <div class="preview-content">
                <div class="preview-image" id="previewImage"></div>
                <div class="preview-title" id="previewTitle"></div>
                <div class="preview-text" id="previewText"></div>
            </div>
        </div>
    </div>
</section>

<section class="article-section">
    <h2>More Blogs</h2>
    <div class="article-grid">
        <div class="article-card">
            <img src="../img/web.png" alt="Web Development">
            <div class="article-content">
                <div class="author">Ajay Kumar</div>
                <h3>Things a Web Developer Needs to Learn</h3>
                <p>Introduction: "Web development is a fast-paced, constantly evolving field, and keeping skills sharp is essential for success as a web developer."</p>
            </div>
        </div>
        <div class="article-card">
            <img src="../img/iPhone.png" alt="Artificial Intelligence">
            <div class="article-content">
                <div class="author">Nikhil kumar </div>
                <h3>ChatGPT vs Burd: A Comprehensive Comparison</h3>
                <p>Artificial intelligence has been one of the most rapidly advancing fields in the last few decades...</p>
            </div>
        </div>
        <div class="article-card">
            <img src="../img/web.png" alt="5G Network">
            <div class="article-content">
                <div class="author">Manoj kumar</div>
                <h3>5G Network and its Implementation: A Guide for Beginners</h3>
                <p>The 5G network is the latest generation of mobile networks that promises to revolutionize the way we...</p>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="footer-content">
      <p>Thank you for visiting our website. Stay connected with us through our social media channels.</p>

    </div>
    <div class="footer-bottom">
    <p>&copy; 2024 FaceTech. All rights reserved to Team Debugers.</p>
    </div>
  </footer>
    <script src="../js/script.js"></script>
</body>
</html>