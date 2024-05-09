<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin message box</title>
    <style>
        body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
}
.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}
h1 {
    text-align: center;
    margin-top: 20px;
}
h2 {
    margin-bottom: 10px;
}
p {
    margin-bottom: 5px;
}
strong {
    font-weight: bold;
    margin-right: 5px;
}
.container {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 300px;
      text-align: center;
    }
    ul {
      list-style: none;
      padding: 0;
    }
    ul li {
      margin-bottom: 10px;
    }   button {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Retailer issue</h2>
        <ul>
        <li> <p><strong>Username:</strong> <?php echo isset($_SESSION['Username']) ? $_SESSION['Username'] : ''; ?></p></li>
        <li><p><strong>Email:</strong> <?php echo isset($_SESSION['Email']) ? $_SESSION['Email'] : ''; ?></p></li>
        <li><p><strong>Phone Number:</strong> <?php echo isset($_SESSION['Phoneno']) ? $_SESSION['Phoneno'] : ''; ?></p></li>
        <li> <p><strong>Product Type:</strong> <?php echo isset($_SESSION['productType']) ? $_SESSION['productType'] : ''; ?></p></li>
        <button onclick="window.location.href='admin_access.php'">Back to Home</button>
      </ul>
      </div>
</body>
</html>
