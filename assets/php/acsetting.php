<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Profile</title>
    <link rel="stylesheet" href="../css/acsett.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header>
       <div class="header_left">
       <div class="header-left">
       <a href="profilepage.php"><div class="profile"></div></a>
       <a href="#" class="sale">Hi <?php session_start(); echo $_SESSION["username"];?></a>
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

<div class="settings-page">
    <h2>Account Settings</h2>
    <div class="settings-section">
        <h3><i class="fa-solid fa-user"></i> General Settings</h3>
        <form>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" value="" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="" required>

            <button type="submit">Save Changes</button>
        </form>
    </div>

    <div class="settings-section">
        <h3><i class="fa-solid fa-lock"></i> Password Settings</h3>
        <form>
            <label for="current-password">Current Password</label>
            <input type="password" id="current-password" name="current-password" required>

            <label for="new-password">New Password</label>
            <input type="password" id="new-password" name="new-password" required>

            <label for="confirm-password">Confirm New Password</label>
            <input type="password" id="confirm-password" name="confirm-password" required>

            <button type="submit">Update Password</button>
        </form>
    </div>

    <div class="settings-section">
        <h3><i class="fa-solid fa-user-shield"></i> Privacy Settings</h3>
        <form action="update_privacy.php" method="POST">
            <label for="profile-visibility">Profile Visibility</label>
            <select id="profile-visibility" name="profile-visibility">
                <option value="public">Public</option>
                <option value="friends">Friends</option>
                <option value="private">Private</option>
            </select>

            <button type="submit">Save Privacy Settings</button>
        </form>
    </div>

    <div class="settings-section">
        <h3><i class="fa-solid fa-bell"></i> Notifications Settings</h3>
        <form action="update_notifications.php" method="POST">
            <label for="email-notifications">Email Notifications</label>
            <input type="checkbox" id="email-notifications" name="email-notifications" checked>

            <button type="submit">Update Notifications</button>
        </form>
    </div>

    <div class="settings-section">
        <h3><i class="fa-solid fa-globe"></i> Language and Region</h3>
        <form action="update_language.php" method="POST">
            <label for="language">Preferred Language</label>
            <select id="language" name="language">
                <option value="english">English</option>
                <option value="hindi">Hindi</option>
                <option value="french">Bhojpuri</option>
                <!-- Add more languages as needed -->
            </select>

            <button type="submit">Save Language Settings</button>
        </form>
    </div>

    <div class="settings-section">
        <h3><i class="fa-solid fa-user-slash"></i> Deactivate Account</h3>
        <form action="deactivate_account.php" method="POST">
            <p>Once you deactivate your account, you won't be able to reactivate it or retrieve any of your content or information.</p>
            <button type="submit" class="danger-button">Deactivate Account</button>
        </form>
    </div>
</div>

</body>
</html>
