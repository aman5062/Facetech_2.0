<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Uploading Website</title>
    <link rel="stylesheet" href="../css/upload-news-style.css">
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
            <a href="#" class="sale">Hi</a>

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
    <div class="container">
        <div class="upload-section">
            <h2>Upload News</h2>
            
           
            <div class="input-container">
                <label for="news-image">Upload Image:</label>
                <input type="file" id="news-image" accept="image/*">
            </div>

            
            <div class="input-container">
                <label for="news-headline">Headline:</label>
                <input type="text" id="news-headline" placeholder="Enter news headline">
            </div>

         
            <div class="input-container">
                <label for="news-content">Content:</label>
                <textarea id="news-content" rows="6" placeholder="Write your news content here..."></textarea>
            </div>

           
            <div class="input-container">
                <button class="upload-btn" id="upload-news-btn">Upload Entire News</button>
            </div>
        </div>

        <div class="preview-section">
            <h2>Preview</h2>
            <div class="preview-container">
                <img id="preview-image" src="" alt="News Image">
                <h3 id="preview-headline"></h3>
                <p id="preview-content"></p>
            </div>
        </div>
    </div>

    <script src="../js/upload-news-app.js"></script>
</body>
</html>
