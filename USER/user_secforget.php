<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Secforget Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
      
            background: url('for.jpg') center/cover no-repeat;
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
        .wrapper{
	position: absolute;
	transform: translate(-50%,-50%);
	top: 55%;
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
        <div class="wrapper">
            <input type="Password" name="newpassword" placeholder="newPassword"id="password"  required>
            <br>
            <span>
			<i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
		</span>
        </div>
           <br>
           <br>
           <br>
            <br>
           
            <input type="submit" value="submit">
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

    // Check if both phoneno and new password are provided
    if (isset($_POST["phoneno"], $_POST["newpassword"])) {
        $phoneno = mysqli_real_escape_string($conn, $_POST["phoneno"]);
        $Password = password_hash($_POST["newpassword"], PASSWORD_DEFAULT);

        // Update the password in the database
        $updateSql = "UPDATE userdata SET password = '$Password' WHERE phoneno = '$phoneno'";
        $conn->query($updateSql);

        echo '<script>alert("Password updated successfully!");</script>';
        echo '<script>window.location.href = "user_login.php";</script>';
    } else {
        echo '<script>alert("Please provide both phoneno and new password!");</script>';
    }

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
