<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Profile</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
     <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background-color: #c6daf9;
}

.profile-header {
    text-align: center;
    padding: 20px;
    background: rgb(119, 182, 241);
}

.cover-photo {
    height: 200px; 
    background: url('pcover.jpg') no-repeat center/cover;
}

.profile-pic {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    margin: -60px auto 10px;
    background: url('profile.jpg') no-repeat center/cover;
    border: 4px solid white;
}

h1 {
    font-size: 24px;
}

button {
    padding: 10px 15px;
    background: #1877f2;
    color: rgb(248, 246, 246);
    border: none; border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background: #145dbf;
}

.nav-tabs {
    display: flex;
    justify-content: center;
    gap: 20px;
    padding: 10px;
    background: rgb(245, 245, 245);
}

.nav-tabs a {
    color: #36486d; 
    text-decoration: none;
    transition: color 0.3s ease;
}

.nav-tabs a:hover {
    color: #1877f2;
}

.content {
    max-width: 1200px; 
    margin: 20px auto;
}

.post {
    background: rgb(249, 248, 248); 
    padding: 15px; 
    border-radius: 8px;
    margin-bottom: 10px; 
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    transition: box-shadow 0.3s ease;
}

.post:hover {
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}
footer {
    background-color: #326369;
    color: #fff;
    text-align: center;
    padding: 1rem 0;
    position: fixed;
    bottom: 0;
    width: 100%;
}
     </style>
</head>
<body>

    <!-- Profile Section -->
    <div class="profile-header">
        <div class="cover-photo"></div>
        <div class="profile-pic"></div>
        <h1>PRofile NaMe</h1>
        <button>Edit Profile</button>
    </div>

    <!-- Navigation Tabs -->
    <div class="nav-tabs">
        <a href="#">Posts</a>
        <a href="#">About</a>
        <a href="#">Friends</a>
        <a href="#">Photos</a>
    </div>

    <!-- Content Section -->
    <div class="content">
        <div class="post">Sample Post 1</div>
        <div class="post">Sample Post 2</div>
    </div>
    <footer>
        <p>&copy; 2024 FaceTech. All rights reserved to Team Debugers.</p>
    </footer>

</body>
</html>
