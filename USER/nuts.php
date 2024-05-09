<!DOCTYPE html>
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

        .product-list {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 600px;
            text-align: center;
          
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
        }
        button {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 600px;
            margin-left:30%;
           margin-right:-100px;
        }
        .bill{
        padding-bottom: -150px;
        margin-bottom: -600px;
        margin-left:30%;
        margin-right:-100px;
     }
    </style>
</head>
<body>
    <div class="product-list">


        <h2>Nuts Product List</h2>
        <div class="bill">
    <button onclick="window.location.href='billing3.php'"> BUY</button>
                </div>
        <table>
            <thead>
                <tr>
                    <th>Product Type</th>
                    <th>Product Name</th>
                    <th>Email-Id</th>
                    <th>Amount per Kg</th>
                    <th>Discount per Kg</th>
                    <th>Image</th>
                    
                </tr>
            </thead>
            <tbody>
        
                <?php
                    // Database connection details
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

                    // Retrieve data from the 'product' table where product_type is 'fruits'
                    $sql = "SELECT * FROM product WHERE product_type = 'nuts'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>{$row['product_type']}</td>";
                            echo "<td>{$row['product_name']}</td>";
                            echo "<td>{$row['email']}</td>";
                            echo "<td>{$row['amount_per_kg']}</td>";
                            echo "<td>{$row['discount_per_kg']}</td>";
                            echo "<td><img src='{$row['img']}' alt='Product Image' style='width:50px;height:50px;'></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>No fruits products found</td></tr>";
                    }
                    // Close the database connection
                    $conn->close();
                ?>
            </tbody>
        </table>
    </div>
                  
  
    <button onclick="window.location.href='user_product.php'">Back to Home</button>
</body>
</html>
