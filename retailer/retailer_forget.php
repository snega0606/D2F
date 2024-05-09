<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forget Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('123.jpg') center/cover no-repeat;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
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
    <div class="login-container">
        <h2>Forget</h2>
        <form action="" method="post">
            <input type="text" name="phoneno" placeholder="mobileno" required>
           
            <br>
           
            <input type="submit" value="Login">
        </form>
       
    </div>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $dbname = "df";

    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $phoneno = mysqli_real_escape_string($conn, $_POST["phoneno"]);

    $sql = "SELECT * FROM admin WHERE phoneno = '$phoneno'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Generate a random reset code
        $resetCode = mt_rand(100000, 999999);

        // Store the reset code in the database
        $updateSql = "UPDATE admin SET reset_code = '$resetCode' WHERE phoneno = '$phoneno'";
        $conn->query($updateSql);

        // Redirect to the next page (reset password page) with the phone number and reset code
        header("Location: retailer_secforget.php?phoneno=$phoneno&code=$resetCode");
        exit(); // Ensure script stops executing after the redirect
    } else {
        echo '<script>alert("Invalid phone number!");</script>';
    }

    $conn->close();
}
?>


</body>
</html>
