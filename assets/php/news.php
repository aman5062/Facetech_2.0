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

    <!-- Main Content Section -->
    <main class="news-content">
        <div class="news-image">
            <img src="../pictures/news-2.jpeg" alt="News Image">
        </div>
        <div class="news-text">
            <h1>Breaking News: Major Event Happening Now</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse convallis, nisl non luctus vehicula, mauris magna sodales ligula, eu vehicula ligula eros vel turpis. Mauris vulputate urna sit amet justoconsectetur adipisicing elit. Sapiente, voluptas eveniet. Asperiores quisquam doloremque nihil odit ad voluptatibus officiis architecto facere dolor veniam, magnam dignissimos, et ea, cupiditate sequi aliquid! Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis amet reiciendis laudantium unde voluptatum ab, velit nesciunt quae suscipit quos et neque laborum quaerat ratione nulla quas commodi, nobis consectetur. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi consequuntur assumenda sint mollitia, aliquam eius sunt vitae odit numquam magnam sequi suscipit dolorum saepe consequatur fuga? Eaque est rerum iure? vehicula, ac cursus arcu iaculis.</p>
        </div>
    </main>
    <main class="news-content">
        <div class="news-image">
            <img src="../pictures/news-3.webp" alt="News Image">
        </div>
        <div class="news-text">
            <h1>Breaking News: Major Event Happening Now</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse convallis, nisl non luctus vehicula, mauris magna sodales ligula, eu vehicula ligula eros vel turpis. Mauris vulputate urna sit amet justo vehicula, ac cursus arcu iaculis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, voluptas eveniet. Asperiores quisquam doloremque nihil odit ad voluptatibus officiis architecto facere dolor veniam, magnam dignissimos, et ea, cupiditate sequi aliquid! Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis amet reiciendis laudantium unde voluptatum ab, velit nesciunt quae suscipit quos et neque laborum quaerat ratione nulla quas commodi, nobis consectetur. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi consequuntur assumenda sint mollitia, aliquam eius sunt vitae odit numquam magnam sequi suscipit dolorum saepe consequatur fuga? Eaque est rerum iure? </p>
        </div>
    </main>
    <main class="news-content">
        <div class="news-image">
            <img src="../pictures/news.jpg" alt="News Image">
        </div>
        <div class="news-text">
            <h1>Breaking News: Major Event Happening Now</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse convallis, nisl non luctus vehicula, mauris magna sodales ligula, eu vehicula ligula eros vel turpis. Mauris vulputate urna sit amet justo consectetur adipisicing elit. Sapiente, voluptas eveniet. Asperiores quisquam doloremque nihil odit ad voluptatibus officiis architecto facere dolor veniam, magnam dignissimos, et ea, cupiditate sequi aliquid! Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis amet reiciendis laudantium unde voluptatum ab, velit nesciunt quae suscipit quos et neque laborum quaerat ratione nulla quas commodi, nobis consectetur. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi consequuntur assumenda sint mollitia, aliquam eius sunt vitae odit numquam magnam sequi suscipit dolorum saepe consequatur fuga? Eaque est rerum iure?vehicula, ac cursus arcu iaculis.</p>
        </div>
    </main>
    <main class="news-content">
        <div class="news-image">
            <img src="../pictures/news-1.jpeg" alt="News Image">
        </div>
        <div class="news-text">
            <h1>Breaking News: Major Event Happening Now</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse convallis, nisl non luctus vehicula, mauris magna sodaconsectetur adipisicing elit. Sapiente, voluptas eveniet. Asperiores quisquam doloremque nihil odit ad voluptatibus officiis architecto facere dolor veniam, magnam dignissimos, et ea, cupiditate sequi aliquid! Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis amet reiciendis laudantium unde voluptatum ab, velit nesciunt quae suscipit quos et neque laborum quaerat ratione nulla quas commodi, nobis consectetur. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi consequuntur assumenda sint mollitia, aliquam eius sunt vitae odit numquam magnam sequi suscipit dolorum saepe consequatur fuga? Eaque est rerum iure?les ligula, eu vehicula ligula eros vel turpis. Mauris vulputate urna sit amet justo vehicula, ac cursus arcu iaculis.</p>
        </div>
    </main>

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
