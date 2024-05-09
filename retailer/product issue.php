<?php
// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store form data in session variables
    $_SESSION['Username'] = $_POST['Username'];
    $_SESSION['Email'] = $_POST['Email'];
    $_SESSION['Phoneno'] = $_POST['Phoneno'];
    $_SESSION['productType'] = $_POST['productType'];

    // Set a flag to indicate successful submission
    $_SESSION['form_submitted'] = true;

    // Redirect to the same page after form submission
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
    <style>
         body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }
    
    h1 {
      text-align: center;
      margin-top: 20px;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    input, select {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button[type="submit"] {
      background-color: #007bff;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 10px;
      width: 100%;
      box-sizing: border-box;
    }

    button[type="submit"]:hover {
      background-color: #0056b3;
    }

    button {
      background-color: #f8f9fa;
      color: #333;
      padding: 10px 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 10px;
      width: 100%;
      box-sizing: border-box;
    }
    button {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }
    </style>
    
    <script>
        // Check if the form was submitted successfully and show a popup message
        window.onload = function() {
            <?php
            if (isset($_SESSION['form_submitted']) && $_SESSION['form_submitted']) {
                unset($_SESSION['form_submitted']); // Reset the flag
                ?>
                alert("Form submitted successfully!");
            <?php } ?>
        };
    </script>
</head>
<body>
    <center><h1>Request Form</h1></center>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <br>
        <label for="Username">Username:</label>
        <input type="text" name="Username" required>

        <label for="Email">Email:</label>
        <input type="email" name="Email" required>

        <label for="Phoneno">Phoneno:</label>
        <input type="tel" name="Phoneno" required>

        <label for="productType">Issue:</label>
        <select name="productType" id="productType" required>
            <option value="" disabled selected>Select Type</option>
            <option value="issue in product name">Issue in product name</option>
            <option value="issue in product type">Issue in product type</option>
            <option value="issue in product amount">Issue in product amount</option>
            <option value="issue in discount product amount">Issue in discount product amount</option>
            <option value="issue in product img">Issue in product img</option>
        </select>

        <center><button type="submit" id="submitButton">Submit</button></center>
        <button onclick="window.location.href='retailer_panel.php'">Back to Home</button>
    </form>
</body>
</html>
