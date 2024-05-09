<!-- login_process.php (Assuming this is where you handle the login and set the session variable) -->
<?php
    // Assume you retrieve the username during login and set it in a session variable
    session_start();
    $_SESSION['username'] = 'JohnDoe';  // Replace 'JohnDoe' with the actual username
    // Redirect to the admin panel after successful login
    header('Location: retailer_panel.php');
    exit();
?>
