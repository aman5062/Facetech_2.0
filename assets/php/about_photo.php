<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/blog.css">
    <link rel="stylesheet" href="../css/about_photo.css">
    <title>FaceTech-Blog Upload</title>
</head>
<body>

    <header>
        <div class="header-left">
            <a href="#" class="sale">Hi User</a>
        </div>

        <div class="header-center">
            <input type="text" placeholder="Search...">
        </div>

        <div class="header-right">
            <a href="#">Home</a>
            <a href="#">News</a>
            <a href="#">Blog</a>
            <a href="assets/php/logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>

        </div>
    </header>
    <!-- Profile Section -->
    <div class="profile-header">
        <div class="cover-photo"></div>
        <div class="profile-pic"></div>
        <h1>Nikhil Sahu</h1>
        <button>Edit Profile</button>
    </div>

    <!-- Navigation Tabs -->
    <div class="nav-tabs">
        <a href="../php/profilepage.php">Posts</a>
        <a href="../php/about_profile.php">About</a>
        <a href="../php/about_friends.php">Friends</a>
        <a href="../php/about_photo.php">Photos</a>
    </div>

    
    <div class="container">
        <header class="yoyo">
            <h1>My Uploaded Images</h1>
        </header>

        <!-- Scrollable Image List -->
        <div class="scrollable-image-list">
            <div class="image-post">
            <img src="../img/f1.jpeg" alt="Friend 1">
                <p class="likes">Likes: 150</p>
            </div>
            <div class="image-post">
            <img src="../img/f2.jpeg" alt="Friend 1">
                <p class="likes">Likes: 200</p>
            </div>
            <div class="image-post">
            <img src="../img/f3.jpeg" alt="Friend 1">
                <p class="likes">Likes: 180</p>
            </div>
            <div class="image-post">
            <img src="../img/f4.jpeg" alt="Friend 1">
                <p class="likes">Likes: 225</p>
            </div>
            <div class="image-post">
            <img src="../img/f5.jpeg" alt="Friend 1">
                <p class="likes">Likes: 225</p>
            </div>
            <div class="image-post">
            <img src="../img/f2.jpeg" alt="Friend 1">
                <p class="likes">Likes: 200</p>
            </div>
            <div class="image-post">
            <img src="../img/f3.jpeg" alt="Friend 1">
                <p class="likes">Likes: 180</p>
            </div>
            <div class="image-post">
            <img src="../img/f4.jpeg" alt="Friend 1">
                <p class="likes">Likes: 225</p>
            </div>
            <div class="image-post">
            <img src="../img/f5.jpeg" alt="Friend 1">
                <p class="likes">Likes: 225</p>
            </div>
            <div class="image-post">
            <img src="../img/f2.jpeg" alt="Friend 1">
                <p class="likes">Likes: 200</p>
            </div>
            <div class="image-post">
            <img src="../img/f3.jpeg" alt="Friend 1">
                <p class="likes">Likes: 180</p>
            </div>
            <div class="image-post">
            <img src="../img/f4.jpeg" alt="Friend 1">
                <p class="likes">Likes: 225</p>
            </div>
            <div class="image-post">
            <img src="../img/f5.jpeg" alt="Friend 1">
                <p class="likes">Likes: 225</p>
            </div>
            
        </div>
    </div>


    

<footer>
    <div class="footer-content">
      <p>Thank you for visiting our website. Stay connected with us through our social media channels.</p>
      <!-- <ul class="socials">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
      </ul> -->
    </div>
    <div class="footer-bottom">
      <p>&copy; 2024 FaceTech| Designed by Debugers</p>
    </div>
  </footer>
 
</body>
<script>

document.addEventListener('DOMContentLoaded', function() {
    const scrollableList = document.querySelector('.scrollable-image-list');
    scrollableList.addEventListener('scroll', () => {
        const bottomReached = scrollableList.scrollTop + scrollableList.clientHeight >= scrollableList.scrollHeight;
        if (bottomReached) {
            console.log('Reached bottom, load more images...');
        }
    });
});


</script>
</html>