<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input[type="text"], 
        .form-group input[type="email"],
        .form-group input[type="number"],
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group select {
            padding: 9px;
        }
        .form-group input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        .quantity {
            display: flex;
            align-items: center;
        }
        .quantity input {
            width: 50px;
            text-align: center;
        }
        .quantity button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
        #amount {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Billing Information</h1>
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="address">Billing Address</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number</label>
                <input type="text" id="mobile" name="mobileno" required>
            </div>
            <div class="form-group">
                <div class="quantity">
                    <label for="quantity">Quantity:</label>
                    <button type="button" onclick="decrement()">-</button>
                    <input type="text" id="quantity" name="quantity" value="1" readonly>
                    <button type="button" onclick="increment()">+</button>
                </div>
            </div>
            <div class="form-group">
                <label for="paymentmode">Payment Mode</label>
                <select id="paymentmode" name="paymentmode" required>
                    <option value="">Select Payment</option>
                    <option value="Online">Online Mode</option>
                    <option value="Cash on Delivery">Cash on Delivery</option>
                </select>
            </div>
         
            <div class="form-group">
                <label for="fruits">Vegetables</label>
                <select id="fruits" name="fruits" onchange="updateAmount()">
                    <option value="">Select Vegetables</option>
                    <option value="Bananna" data-price="40">onion - ₹40</option>
                    <option value="Apple" data-price="30">Tomato - ₹30</option>
                    <option value="Jackfruit" data-price="50">Carrot - ₹50</option>
                </select>
            </div>
            <div class="form-group">
                <label for="amount">Amount:</label>
                <span id="amount">₹0</span>
                <!-- You don't need to add a name attribute to the span -->
            </div>
            <div class="form-group">
                <input type="submit" id="billing" value="Submit">
            </div>
        </form>
    </div>

    
    <script>
        function updateAmount() {
            var selectElement = document.getElementById('fruits');
            var amountSpan = document.getElementById('amount');
            var selectedOption = selectElement.options[selectElement.selectedIndex];
            var price = selectedOption.getAttribute('data-price');
            var quantity = document.getElementById('quantity').value;
            var totalAmount = price * quantity;
            amountSpan.textContent = '₹' + totalAmount;
        }

        function increment() {
            var quantityInput = document.getElementById('quantity');
            var currentQuantity = parseInt(quantityInput.value);
            quantityInput.value = currentQuantity + 1;
            updateAmount();
        }

        function decrement() {
            var quantityInput = document.getElementById('quantity');
            var currentQuantity = parseInt(quantityInput.value);
            if (currentQuantity > 1) {
                quantityInput.value = currentQuantity - 1;
                updateAmount();
            }
        }
    </script>

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
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $mobileno = mysqli_real_escape_string($conn, $_POST["mobileno"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);
    $quantity = mysqli_real_escape_string($conn, $_POST["quantity"]);
    $amount = mysqli_real_escape_string($conn, $_POST["amount"]);

    // Insert data into the 'admin' table
    $sql = "INSERT INTO bill (name, mobileno, address, quantity, amount) VALUES ('$name', '$mobileno', '$address',  '$quantity', '$amount')";

    if ($conn->query($sql) === TRUE) {
        // Display a popup message
        echo '<script>alert("Signup successful");</script>';
        
        // Redirect to admin_panel.php
        echo '<script>window.location.href = "retailer_panel.php";</script>';
        exit();
    } else {
        echo '<script>alert("Order Placed");</script>';
        echo '<script>window.location.href = "user_product.php";</script>';
        //echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
</body>
</html>