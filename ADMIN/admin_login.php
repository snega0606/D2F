<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>ADMIN_LOGIN</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('123.jpg') center/cover no-repeat;
            margin: 0;
            padding: 0;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .bar{
            padding-left: 90%;
            padding-right: 4%; 
            padding-top: 10px;          
        }
        .add{
            padding-left: 40%;
            padding-right: 0%; 
            padding-top: 200px;
        }
        .login-container {         
            color: #fff; /* White text color */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        .forgot-password {
            text-align: right;
            margin-bottom: 10px;
        }
        .signup-link {
            margin-top: 20px;
        }
        marquee {
            width: 100%;
            background-color: white;
            color: black;
            letter-spacing: 2px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="bar">
<nav class="navbar bg-dark border-bottom border-body  navbar navbar-expand-lg bg-body-tertiary "data-bs-theme="dark">
        <div class="container-fluid"> 
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link "  href="\DFF1\home_page.html">HOME</a>
              </li>
            </ul>       
          </div>
        </div>
      </nav>
    </div>
    <!-- Your page content goes here -->
    <div class="add">
    <div class="login-container">
        <h2>Login</h2>
        <form action="" method="post">
            <input type="text" name="empno" placeholder="Empno" required>          
            <br>        
            <input type="submit" value="Login">
        </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
    <?php
// Handle form submission and validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to your MySQL database (replace these values with your actual database details)
    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $dbname = "df";

    // Create connection
    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $empno = mysqli_real_escape_string($conn, $_POST["empno"]);
   
    // Fetch user details from the 'admindata' table based on the provided employee number
    $sql = "SELECT * FROM admindata WHERE empno = '$empno'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify the employee number
        if ($empno === $row["empno"]) {
            // Employee number is correct, redirect to admin_access.php
            header("Location: admin_access.php");
            exit(); // Ensure script stops executing after the redirect
        } else {
            echo '<script>alert("Invalid employee number!");</script>';
        }
    } else {
        echo '<script>alert("Invalid employee number!");</script>';
    }

    // Close the database connection
    $conn->close();
}
?>
</body>
</html>