<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive News Page</title>
    <link rel="stylesheet" href="../css/news-style.css">
</head>
<body>
    <!-- Navbar -->
    <header>
        <nav class="navbar">
            <div class="logo">NewsToday</div>
            
        </nav>
    </header>


   <?php 
   include_once("db.php");
   $sql = "SELECT * FROM `news`";
   $result = mysqli_query($conn,$sql);
   if($result->num_rows>0){
    while($row = $result-> fetch_assoc()){
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
   }else{
    echo "No Data";
   }
    
    ?>

    <!-- Footer Section -->
    <footer>
       
        <p>&copy; 2024 NewsToday. All rights reserved.</p>
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
