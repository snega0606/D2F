<?php
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
echo"balaji";
// Process signup form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password
    $phoneno = mysqli_real_escape_string($conn, $_POST["phonenumber"]);

    // Insert data into the 'admin' table
    $sql = "INSERT INTO userdata (username, password, phoneno) VALUES ('$username', '$password','$phoneno')";

    if ($conn->query($sql) === TRUE) {
        // Display a popup message
        echo '<script>alert("Signup successful");</script>';
        
        // Redirect to user_product.php
        echo '<script>window.location.href = "user_product.php";</script>';
        exit();
    } else {
        echo'balaji';
        echo '<script>alert(" exists");</script>';
        echo '<script>window.location.href = "admin_error.html";</script>';
        //echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
