<<?php
// Connect to your MySQL database (replace these values with your actual database details)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "df";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process signup form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phoneno = mysqli_real_escape_string($conn, $_POST["phonenumber"]);

    // Insert data into the 'admin' table
    $sql = "INSERT INTO admin (username, password, email, phoneno) VALUES ('$username', '$password', '$email',  '$phoneno')";

    if ($conn->query($sql) === TRUE) {
        // Display a popup message
        echo '<script>alert("Signup successful");</script>';
        
        // Redirect to admin_panel.php
        echo '<script>window.location.href = "retailer_panel.php";</script>';
        exit();
    } else {
        echo '<script>alert("phoneno exists");</script>';
        echo '<script>window.location.href = "retailer_error.html";</script>';
        //echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
