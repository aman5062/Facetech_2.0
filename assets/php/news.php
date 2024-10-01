<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive News Page</title>
    <link rel="stylesheet" href="../css/news-style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../css/blog.css">
</head>
<body>
    <header>
        <div class="header-left">
            <a href="#" class="sale">Hi  <?php session_start(); echo $_SESSION["username"];?></a>
        </div>

        <div class="header-center">
            <input type="text" placeholder="Search...">
        </div>

        <div class="header-right">
            <a href="../../index.php">Home</a>
            <a href="news.php">News</a>
            <a href="blog.php">Blog</a>
        
        </div>
    </header>
    <!-- Navbar -->
        <nav class="navbar">
            <div class="logo">NewsToday</div> 
            
        </nav>

    <?php
        include_once ("db.php");
        $sql = "SELECT * FROM `news`";
        $result = mysqli_query($conn,$sql);
        if($result-> num_rows>0){
            while($row = $result->fetch_assoc()){
                echo "
                 <main class='news-content'>
        <div class='news-image'>
            <img src='".$row["Image"]."' alt='News Image'>
        </div>
        <div class='news-text'>
            <h1>".$row["Title"]."</h1>
            <p>".$row["Content"]."</p>
        </div>
    </main>
                ";
            }
        }
        else{
            echo "no data";
        }

    ?>


    <!-- Footer Section -->
    <footer>
    <div class="footer-bottom">
      <p>&copy; 2024 Hack2Transform| Designed by Debugers</p>
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
