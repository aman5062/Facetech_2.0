<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FaceTech-Chatbox</title>
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../css/chats.css">
    <link rel="stylesheet" href="../css/blog.css">

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

    <div class="chatbox-container">
        <!-- Conversation List -->
        <div class="conversation-list">
            <div class="user">
                <img src="https://via.placeholder.com/40" alt="User Avatar" class="user-photo">
                <div class="user-details">

                    <span class="username"> <?php  echo $_SESSION["username"];?>
                    </span>

                    <span class="last-message">Hey, how's it going?</span>
                </div>
                
            </div>
            <container>
                    <menu-items>
                        user names
                    </menu-items>
                </container> 
        </div>

        <!-- Messaging Area -->
        <div class="messaging-area">
            <!-- Chat Header -->
            <div class="chat-header">
                <img src="https://via.placeholder.com/40" alt="Receiver Avatar" class="receiver-photo">
                <span class="receiver-name">Manish_Munda</span>
            </div>

            <!-- Chat Area -->
            <div class="chat-area" id="chat-area"></div>

            <!-- Typing Indicator -->
            <div class="typing-indicator" id="typing-indicator">
                <span>Manish_Munda is typing...</span>
            </div>

            <!-- Emoji Picker (hidden initially) -->
            <div class="emoji-picker" id="emoji-picker">
                <span class="emoji">😀</span>
                <span class="emoji">😂</span>
                <span class="emoji">😍</span>
                <span class="emoji">😎</span>
                <span class="emoji">👍</span>
                <span class="emoji">❤️</span>
                <span class="emoji">🎉</span>
                <span class="emoji">💡</span>
            </div>

            <!-- Message Input Bar -->
            <div class="message-input-area">
                <button id="emoji-button"><i class="fas fa-smile"></i></button>
                <button id="image-upload"><i class="fas fa-camera"></i></button>
                <input type="file" id="file-upload" hidden accept="image/*">
                <input type="text" id="message-input" placeholder="Type a message...">
                <button id="send-button"><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>
    </div><br><br>


<footer>
    <div class="footer-content">
      <p>Thank you for visiting our website. Stay connected with us through our social media channels.</p>

    </div>
    <div class="footer-bottom">
    <p>&copy; 2024 FaceTech. All rights reserved to Team Debugers.</p>
    </div>
  </footer>


    <script src="../js/chatss.js"></script>
</body>
</html>
