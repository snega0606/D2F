!DOCTYPE html>
<html lang="en">
<head>
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

        .product-form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
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

        /* Styles for the modal */
        #submitModal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="product-form">
        <h2>Product Details Form</h2>
        <form action="" method="post" enctype="multipart/form-data">
        <label for="productType">Product Type:</label>
            <select name="productType" id="productType" required>
                <option value="" disabled selected>Select Type</option>
                <option value="fruits">Fruits</option>
                <option value="vegetables">Vegetables</option>
                <option value="nuts">Nuts</option>
            </select>
            <br>
            
            <label for="productName">Product Name:</label>
            <input type="text" name="productName" required>

            <label for="productName">Email:</label>
            <input type="text" name="email" required>

            <label for="amountPerKg">Amount per kg(Rs.):</label>
            <input type="number" name="amountPerKg" required>
            
            <label for="discountPerKg">Discount per kg(Rs.):</label>
            <input type="number" name="discountPerKg" required>

            <label for="productImage">Product Image:</label>
            <input type="file" name="productImage" accept="image/*" required>

            <button type="submit">Submit</button>
        </form>

        <!-- Back to Home Button -->
        <button onclick="window.location.href='admin_panel.php'">Back to Home</button>
        
        <!-- Modal for success message -->
        <div id="submitModal">
            <p>Product added successfully!</p>
            <button onclick="closeModal()">Close</button>
        </div>
    </div>

    <script>
        function openModal() {
            document.getElementById('submitModal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('submitModal').style.display = 'none';
        }

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "df";

            error_reporting(E_ALL);
            ini_set('display_errors', 1);

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $productType = $_POST['productType'];
            $productName = $_POST['productName'];
            $email= $_POST['email']; // Assuming this is the admin's email
            $amountPerKg = $_POST['amountPerKg'];
            $discountPerKg = $_POST['discountPerKg'];

            // Check if the email exists in the admin table
            $checkEmailQuery = $conn->prepare("SELECT * FROM admin WHERE email = ?");

            if (!$checkEmailQuery) {
                die("Error preparing email check query: " . $conn->error);
            }

            $checkEmailQuery->bind_param("s", $email);
            $checkEmailQuery->execute();

            $result = $checkEmailQuery->get_result();

            if ($result->num_rows > 0) {
                // Email exists, proceed to insert into the product table
                $targetDir = "uploads/";
                $targetFile = $targetDir . basename($_FILES["productImage"]["name"]);
                move_uploaded_file($_FILES["productImage"]["tmp_name"], $targetFile);

                $insertQuery = $conn->prepare("INSERT INTO product (product_type, product_name, email, amount_per_kg, discount_per_kg, img) VALUES (?, ?, ?, ?, ?, ?)");

                if (!$insertQuery) {
                    die("Error preparing insert statement: " . $conn->error);
                }

                $insertQuery->bind_param("sssdds", $productType, $productName, $email, $amountPerKg, $discountPerKg, $targetFile);

                if ($insertQuery->execute()) {
                    echo "openModal();";
                } else {
                    echo "alert('Error adding product: " . $insertQuery->error . "');";
                }

                $insertQuery->close();
            } else {
                echo "alert('Error: Email not found in admin table. Please check your email.');";
            }

            $checkEmailQuery->close();
            $conn->close();
        }
        ?>
    </script>
</body>
</html>
