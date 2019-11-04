<?php
session_start();
?>
<?php
if(!empty($_POST["register-user"])) {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "tndemocrat";
    $namec=$emailc=$unamec=$pnc=$addressc=$passc=0;
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	$sql = "SELECT *FROM user";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			if($row["Username"]==$_POST["userName"]){
				$unamec+=1;
			}
			if($row["Name"]==$_POST["firstName"]){
				$namec+=1;
			}
			if($row["EmailAddress"]==$_POST["userEmail"]){
				$emailc+=1;
			}
			if($row["Address"]==$_POST["lastName"]){
				$addressc+=1;
			}
			if($row["PhoneNumber"]==$_POST["phoneNumber"]){
				$pnc+=1;
			}
			if($row["Password"]==$_POST["pass"]){
				$passc+=1;
			}
		}
	} else {
		echo "0 results";
	}
	$conn->close();
	
    

	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
		if(empty($_POST[$key])) {
		$error_message = "All Fields are required";
		break;
		}
	}
	/* Password Matching Validation */
	if($_POST['pass'] != $_POST['confirm_password']){ 
	$error_message = 'Passwords should be same<br>'; 
	}

	/* Email Validation */
	if(!isset($error_message)) {
		if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
		$error_message = "Invalid Email Address";
		}
	}

	/* Validation to check if gender is selected */
	if(!isset($error_message)) {
		if(!preg_match('/^[0-9]{10}+$/', $_POST["phoneNumber"])){
			$error_message = "Invalid Phone Number";
		}
	}

	/* Validation to check if Terms and Conditions are accepted */
	// if(!isset($error_message)) {
	// 	if(!isset($_POST["terms"])) {
	// 	$error_message = "Accept Terms and Conditions to Register";
	// 	}
	// }
	if($pnc>0){
		$error_message = "Phone Number already exists.";
	}
	if($unamec>0){
		$error_message = "Username already exists.";
	}
	if($namec>0){
		$error_message = "Name already exists.";
	}
	if($addressc>0){
		$error_message = "Address already exists.";
	}
	if($passc>0){
		$error_message = "Password already exists.";
	}
	if($emailc>0){
		$error_message = "Email already exists.";
	}

	
	if(!isset($error_message)) {
		require_once("dbcontroller.php");
		$db_handle = new DBController();
		$p=$_POST["phoneNumber"];
		$_SESSION["userName"]=$_POST["userName"];
		$_SESSION["pass"]=$_POST["pass"];
		$_SESSION["phoneNumber"]=$_POST["phoneNumber"];
		$query = "INSERT INTO user (Username, Name, Address, Password, EmailAddress, PhoneNumber) VALUES
		('" . $_POST["userName"] . "', '" . $_POST["firstName"] . "', '" . $_POST["lastName"] . "', '" . $_POST["pass"] . "', '" . $_POST["userEmail"] . "', '" . $p . "')";
		$result = $db_handle->insertQuery($query);
		if(!empty($result)) {
			header("location:r2.php");
		} else {
			$error_message = "Problem in registration. Try Again!";	
		}
	}
}
?>
<html>
<head>
<title>PHP User Registration Form</title>
<style>
body{
	width:610px;
	font-family:calibri;
}
.error-message {
	padding: 7px 10px;
	background: #fff1f2;
	border: #ffd5da 1px solid;
	color: #d6001c;
	border-radius: 4px;
}
.success-message {
	padding: 7px 10px;
	background: #cae0c4;
	border: #c3d0b5 1px solid;
	color: #027506;
	border-radius: 4px;
}
.demo-table {
	background: #d9eeff;
	width: 100%;
	border-spacing: initial;
	margin: 2px 0px;
	word-break: break-word;
	table-layout: auto;
	line-height: 1.8em;
	color: #333;
	border-radius: 4px;
	padding: 20px 40px;
}
.demo-table td {
	padding: 15px 0px;
}
.demoInputBox {
	padding: 10px 30px;
	border: #a9a9a9 1px solid;
	border-radius: 4px;
}
.btnRegister {
	padding: 10px 30px;
	background-color: #3367b2;
	border: 0;
	color: #FFF;
	cursor: pointer;
	border-radius: 4px;
	margin-left: 10px;
}
</style>
</head>
<body>
<form name="frmRegistration" method="post" action="">
<table border="0" width="500" align="center" class="demo-table">
<?php if(!empty($success_message)) { ?>	
<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
<?php } ?>
<?php if(!empty($error_message)) { ?>	
<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>
<tr>
<td>User Name</td>
<td><input type="text" class="demoInputBox" name="userName" value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>"></td>
</tr>
<tr>
<td>Full Name</td>
<td><input type="text" class="demoInputBox" name="firstName" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>"></td>
</tr>
<tr>
<td>Address</td>
<td><textarea class="demoInputBox" name="lastName" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>"></textarea></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" class="demoInputBox" name="pass" value="<?php if(isset($_POST['pass'])) echo $_POST['pass']; ?>"></td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input type="password" class="demoInputBox" name="confirm_password" value=""></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" class="demoInputBox" name="userEmail" value="<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>"></td>
</tr>
<tr>
<td>Phone Number:</td>
<td><input type="text" class="demoInputBox" name="phoneNumber" value="<?php if(isset($_POST['phoneNumber'])) echo $_POST['phoneNumber']; ?>"></td>
</tr>
<tr>
<td colspan=2>
<input type="checkbox" name="terms"> I accept Terms and Conditions <input type="submit" name="register-user" value="Register" class="btnRegister"></td>
</tr>
</table>
</form>
</body></html>