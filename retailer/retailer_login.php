<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login Page</title>
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
            background-color: #021522; /* Blue background color */
            color: #fff; /* White text color */
            padding: 20px;
            padding-top:50px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            
        }
        .wrapper{
	position: absolute;
	transform: translate(-50%,-50%);
	top: 48%;
	left: 50%;
	width: 300px;
}
        ::placeholder{
	color: #9a9a9a;
	font-weight: 400;
}
span{
	position: absolute;
	right: 15px;
	transform: translate(0,-50%);
	top: 50%;
	cursor: pointer;
}
.fa{
	font-size: 20px;
	color: #7a797e;
}


        

        .forgot-password {
            text-align: right;
            margin-bottom: 10px;
        }

        .signup-link {
            margin-top: 20px;
            
        }
        .signup-link.b{
            color:red;
        }

      
      
input{
	box-sizing: border-box;
	width: 100%;
	font-size: 18px;
	border: none;
	padding: 10px 10px;
	border-radius: 3px;
	font-family: 'Poppins',sans-serif;
	color: #4a4a4a;
	letter-spacing: 0.5px;
	box-shadow: 0 5px 30px rgba(22,89,233,0.4);
}

    </style>
</head>
<body>

  
  <div class="login-container">
        <h2>Login</h2>

       
        <form action="" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <br><br>
            <div class="wrapper">
            <input type="Password" name="password" placeholder="Password"id="password"  required>
            <br>
            <span>
			<i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
		</span>
        </div>
        <br>
        <br>
        <br>
        <br>

            <div class="forgot-password">
                <a href="retailer_forget.php">Forgot Password?</a>
            </div>
            <input type="submit" value="Login">
        </form>
        <div class="signup-link">
            <p>Don't have an account? <a href="retailer_signup.php"><b>Sign Up</b></a></p>
        </div>
        <div class="home">
        <p>If you come wrong page<br>Go back to home <a href="/dff1/home_page.html">HOME_PAGE</a></p>
        
    </div>

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

        $username = mysqli_real_escape_string($conn, $_POST["username"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);

        // Fetch user details from the 'admin' table based on the provided username
        $sql = "SELECT * FROM admin WHERE username = '$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Verify the password using password_verify
            if (password_verify($password, $row["password"])) {
                // Password is correct, redirect to admin_panel.php
                header("Location: retailer_panel.php");
                exit(); // Ensure script stops executing after the redirect
            } else {
                echo '<script>alert("Invalid password!");</script>';
            }
        } else {
            echo '<script>alert("Invalid username!");</script>';
        }

        // Close the database connection
        $conn->close();
    }
    ?>
</body>
<script>
		var state= false;
		function toggle(){
			if(state){
				document.getElementById("password").setAttribute("type","password");
				document.getElementById("eye").style.color='#7a797e';
				state = false;
			}
			else{
				document.getElementById("password").setAttribute("type","text");
				document.getElementById("eye").style.color='#5887ef';
				state = true;
			}
		}
	</script>

</html>
