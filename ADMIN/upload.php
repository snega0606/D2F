<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <link rel="stylesheet" href="sty.css">
</head>
<body>

    <div class="container">
        <h1>Product Management</h1>
        <form action="upload.php" method="POST">
            <label for="productName">Search by email:</label>
            <input type="text" id="email" name="email" required>
            <button type="submit" name="searchemail">Search</button>
            
        </form>
        <div class="bill">
    <button onclick="window.location.href='admin_access.php'"> BACK</button>
                </div>
        <?php
        // Include your database connection code here
        include 'db_connection.php';

        // Handle the search query
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['searchemail'])) {
            $email = $_POST['email'];
            $sanitizedemail = mysqli_real_escape_string($connection, $email);

            $query = "SELECT * FROM product WHERE email LIKE '%$sanitizedemail%'";
            $result = mysqli_query($connection, $query);

            if (mysqli_num_rows($result) > 0) {
                echo '<table>';
                echo '<tr><th>Product Type</th><th>Product Name</th><th>Amount Per Kg</th><th>Discount Per Kg</th><th>Image</th><th>Action</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>' . $row['product_type'] . '</td>';
                    echo '<td>' . $row['product_name'] . '</td>';
                    echo '<td>' . $row['amount_per_kg'] . '</td>';
                    echo '<td>' . $row['discount_per_kg'] . '</td>';
                    echo '<td><img src="' . $row['img'] . '" alt="Product Image"></td>';
                    echo '<td>';
                    echo '<form method="POST" action="update.php">';
                    echo '<input type="hidden" name="productId" value="' . $row['id'] . '">';
                    echo '<label for="newProductType">New Product Type:</label>';
                    echo '<input type="text" id="newProductType" name="newProductType" value="' . $row['product_type'] . '" required>';
                    echo '<label for="newProductName">New Product Name:</label>';
                    echo '<input type="text" id="newProductName" name="newProductName" value="' . $row['product_name'] . '" required>';
                    echo '<label for="newAmountPerKg">New Amount Per Kg:</label>';
                    echo '<input type="text" id="newAmountPerKg" name="newAmountPerKg" value="' . $row['amount_per_kg'] . '" required>';
                    echo '<label for="newDiscountPerKg">New Discount Per Kg:</label>';
                    echo '<input type="text" id="newDiscountPerKg" name="newDiscountPerKg" value="' . $row['discount_per_kg'] . '" required>';
                    echo '<label for="newImg">New Image URL:</label>';
                    echo '<input type="text" id="newImg" name="newImg" value="' . $row['img'] . '" required>';
                    echo '<button type="submit" name="updateProduct">Update</button>';
                    echo '</form>';
                    echo '<form method="POST" action="delete.php" onsubmit="return confirm(\'Are you sure you want to delete this product?\');">';
                    echo '<input type="hidden" name="productId" value="' . $row['id'] . '">';
                    echo '<button type="submit" name="deleteProduct">Delete</button>';
                    echo '</form>';
                    echo '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            } else {
                echo '<p>No products found for the given name.</p>';
            }
        }

        // Close the database connection
        mysqli_close($connection);
        ?>
    </div>
    
</body>
</html>
