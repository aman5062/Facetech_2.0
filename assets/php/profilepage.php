<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Profile</title>
    <link rel="stylesheet" href="../css/blog.css">
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
            <a href="acsetting.php"><i class="fa-solid fa-gear"></i></a>
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

    <!-- Content Section -->
  
    <div class="post-section" id="post">
        <div class="post-header">
            <img src="../img/m.png" alt="Profile Picture" class="profile-picture">
            <div class="user-info">
                <h4>Nikhil Kumar</h4>
                <p>Upper Chowk , Khunti • 5min</p>
            </div>
        </div>
        <div class="post-content">
            <p>Hey connections,👋<br>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae, doloremque obcaecati. </p>
            <img src="../img/iPhone.png" alt="Certificate" class="certificate-image">
        </div>
        <div class="post-actions">
        
            <div class="action-buttons">
                <button class="action-button">
                    <i class="like-icon"></i> Like
                </button>
                <button class="action-button">
                    <i class="comment-icon"></i> Comment
                </button>
                <button class="action-button">
                    <i class="repost-icon"></i> Repost
                </button>
                <button class="action-button">
                    <i class="send-icon"></i> Send
                </button>
            </div>
        </div> <br> <br>

        
        <div class="posts-section">
            <div class="post-header">
                <img src="../img/m.png" alt="Profile Picture" class="profile-picture">
                <div class="user-info">
                    <h4>Nikhil Kumar</h4>
                    <p>Upper Chowk , Khunti • 5min</p>
                </div>
            </div>
            <div class="post-content">
                <p>Hey connections,👋<br>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae, doloremque obcaecati. </p>
                <img src="../img/iPhone.png" alt="Certificate" class="certificate-image">
            </div>
            <div class="post-actions">
            
                <div class="action-buttons">
                    <button class="action-button">
                        <i class="like-icon"></i> Like
                    </button>
                    <button class="action-button">
                        <i class="comment-icon"></i> Comment
                    </button>
                    <button class="action-button">
                        <i class="repost-icon"></i> Repost
                    </button>
                    <button class="action-button">
                        <i class="send-icon"></i> Send
                    </button>
                </div>
            </div><br> <br>

            <div class="posts-section">
                <div class="post-header">
                    <img src="../img/m.png" alt="Profile Picture" class="profile-picture">
                    <div class="user-info">
                        <h4>Nikhil Kumar</h4>
                        <p>Upper Chowk , Khunti • 5min</p>
                    </div>
                </div>
                <div class="post-content">
                    <p>Hey connections,👋<br>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae, doloremque obcaecati. </p>
                    <img src="../img/iPhone.png" alt="Certificate" class="certificate-image">
                </div>
                <div class="post-actions">
                
                    <div class="action-buttons">
                        <button class="action-button">
                            <i class="like-icon"></i> Like
                        </button>
                        <button class="action-button">
                            <i class="comment-icon"></i> Comment
                        </button>
                        <button class="action-button">
                            <i class="repost-icon"></i> Repost
                        </button>
                        <button class="action-button">
                            <i class="send-icon"></i> Send
                        </button>
                    </div>
                </div><br><br>

                <div class="posts-section">
                    <div class="post-header">
                        <img src="../img/m.png" alt="Profile Picture" class="profile-picture">
                        <div class="user-info">
                            <h4>Nikhil Kumar</h4>
                            <p>Upper Chowk , Khunti • 5min</p>
                        </div>
                    </div>
                    <div class="post-content">
                        <p>Hey connections,👋<br>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae, doloremque obcaecati. </p>
                        <img src="../img/iPhone.png" alt="Certificate" class="certificate-image">
                    </div>
                    <div class="post-actions">
                    
                        <div class="action-buttons">
                            <button class="action-button">
                                <i class="like-icon"></i> Like
                            </button>
                            <button class="action-button">
                                <i class="comment-icon"></i> Comment
                            </button>
                            <button class="action-button">
                                <i class="repost-icon"></i> Repost
                            </button>
                            <button class="action-button">
                                <i class="send-icon"></i> Send
                            </button>
                        </div>
                    </div> <br><br>


                    <div class="posts-section">
                        <div class="post-header">
                            <img src="../img/m.png" alt="Profile Picture" class="profile-picture">
                            <div class="user-info">
                                <h4>Nikhil Kumar</h4>
                                <p>Upper Chowk , Khunti • 5min</p>
                            </div>
                        </div>  
                        <div class="post-content">
                            <p>Hey connections,👋<br>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae, doloremque obcaecati. </p>
                            <img src="../img/iPhone.png" alt="Certificate" class="certificate-image">
                        </div>
                        <div class="post-actions">
                        
                            <div class="action-buttons">
                                <button class="action-button">
                                    <i class="like-icon"></i> Like
                                </button>
                                <button class="action-button">
                                    <i class="comment-icon"></i> Comment
                                </button>
                                <button class="action-button">
                                    <i class="repost-icon"></i> Repost
                                </button>
                                <button class="action-button">
                                    <i class="send-icon"></i> Send
                                </button>
                            </div>
                        </div> <br><br>
    
</body>
</html>
