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
<?php
if(isset($_GET['u'])){
$receiver = $_GET["u"];
}else{
    $receiver = "No user Selected";
}
?>
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
            <container id="chat_names">
            <?php 
            
            include_once "db.php";
            $user = $_SESSION["username"];
            $sql = "SELECT `Username` FROM user WHERE Username!='$user'";
            $result = mysqli_query($conn, $sql);
            // $row = $result-> fetch_assoc();
            while($rows = $result->fetch_assoc()){
                echo "<a class='menu-items' href='chat-box.php?u=".$rows["Username"]."'><menu-items>".$rows["Username"]."</menu-items></a>";
            }
            


            ?>



                    <!-- <menu-items>
                        user names
                    </menu-items>
                     -->
                </container> 
        </div>

        <!-- Messaging Area -->
        <div class="messaging-area">
            <!-- Chat Header -->
            <div class="chat-header">
                <img src="https://via.placeholder.com/40" alt="Receiver Avatar" class="receiver-photo">
                <span class="receiver-name"><?php echo $receiver; ?></span>
            </div>

            <!-- Chat Area -->
            <div class="chat-area" id="chat-area">

            <?php
            $sql_chat = "SELECT Message FROM chat WHERE ( `Sender` = '$user' AND `Receiver` = '$receiver' ) OR ( `Sender` = '$receiver' AND `Receiver` = '$user' )";
            $result_chat = mysqli_query($conn, $sql_chat);
            while($mess = $result_chat->fetch_assoc()){
                echo "<div class='menu-items'>". $mess["Message"]."</div>";
            }
?>
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
            <form class="message-input-area" method="post" action="chat_sender.php">
                <!-- <button id="emoji-button"><i class="fas fa-smile"></i></button>
                <button id="image-upload"><i class="fas fa-camera"></i></button>
                <input type="file" id="file-upload" hidden accept="image/*"> -->
                <input type="hidden" name="sender" value="<?php echo $user; ?>">
                <input type="hidden" name="reciver" value="<?php echo $receiver; ?>">
                <input type="text" id="message-input" placeholder="Type a message..." name="message">
                <button id="send-button"><i class="fas fa-paper-plane"></i></button>
        </form>
        </div>
    </div><br><br>


<footer>
    <div class="footer-content">
      <p>Thank you for visiting our website. Stay connected with us through our social media channels.</p>

    </div>
    <div class="footer-bottom">
    <p>&copy; 2024 FaceTech. All rights reserved to Team Debugers.</p>
    </div>

   
</body>
</html>
