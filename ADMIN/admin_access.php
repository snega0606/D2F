<?php
    // Assume you start the session and retrieve the username during login
    session_start();
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
    $displayName = isset($_SESSION['display_name']) ? $_SESSION['display_name'] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <style>
        body {
            background-image: url(carousel-2.jpg) ;
             background-size: cover;
             background-repeat: no-repeat;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        nav {
            background-color: #333;
            overflow: hidden;
        }
        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        nav a:hover {
            background-color: #ddd;
            color: black;
        }
        .content {
            padding: 20px;
        }
        h2 {
            color: #333;
        }
        .home-text {
            text-align: left;
            padding: 20px;
            padding-top: 350px;
            margin: 20px;
            color:#fff;
        }
        h1 {
            font-size: 50px;
            color: green;
        }
    </style>
</head>
<body>
    <nav>
        <a href="upload.php">Update Product</a>
        <a href="complaints.php">Message Box</a>
        <a href="admin_login.php">Logout</a>
    </nav>
    <div class="content">
        <h2>Welcome, <?php echo $displayName ? htmlspecialchars($displayName) : 'Admin'; ?>!</h2>
        <div class="home-text ">
            <h1><b>“Don’t Let Yesterday <br> Take Up Too Much of <br>Today.”</b></h1>
        <!-- Add your admin panel content here -->
        <!-- For example, you can have different sections for profile, new product, and update product -->
    </div>
</body>
</html>

