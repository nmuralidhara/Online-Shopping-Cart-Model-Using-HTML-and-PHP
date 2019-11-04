<html>
<head>Sample Template</head>
<style>
h3{
 color:black;
 background-color:white;
 border:10px solid cyan;
 border-radius:10px;
 text-align:center;
 width:40%;
 height:40%;
position:absolute;
top:30%;
right:25%;
}
.error-message {
	padding: 7px 10px;
	background: #fff1f2;
	border: #ffd5da 1px solid;
	color: #d6001c;
	border-radius: 4px;
}
</style>
<?php
session_start();
?>
<?php
if(isset($_POST['form'])){

    switch ($_POST['form']) {
        case "A":
        if(!empty($_POST["form"])) {
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
            $u= $_POST["username"];
            $p= $_POST["password"];
            // $sql = "SELECT *FROM user WHERE Name='Narpavirajan'AND Password='sudheepk'";
            $sql = "SELECT *FROM user WHERE Username='$u'AND Password='$p';";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                   $_SESSION['name']=$row['Name'];
                   header("location:newlist.php");
                   break;
                }
            } else {
                $error_message="Invalid Username or Password";
            }
            $conn->close();
            
            
        
            // /* Form Required Field Validation */
            // foreach($_POST as $key=>$value) {
            //     if(empty($_POST[$key])) {
            //     $error_message = "All Fields are required";
            //     break;
            //     }
            // }
            // /* Password Matching Validation */
            // if($_POST['password'] != $_POST['confirm_password']){ 
            // $error_message = 'Passwords should be same<br>'; 
            // }
        
            // /* Email Validation */
            // if(!isset($error_message)) {
            //     if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
            //     $error_message = "Invalid Email Address";
            //     }
            // }
        
            // /* Validation to check if gender is selected */
            // if(!isset($error_message)) {
            //     if(!preg_match('/^[0-9]{10}+$/', $_POST["phoneNumber"])){
            //         $error_message = "Invalid Phone Number";
            //     }
            // }
        
            // /* Validation to check if Terms and Conditions are accepted */
            // // if(!isset($error_message)) {
            // // 	if(!isset($_POST["terms"])) {
            // // 	$error_message = "Accept Terms and Conditions to Register";
            // // 	}
            // // }
            // if($pnc>0){
            //     $error_message = "Phone Number already exists.";
            // }
            // if($unamec>0){
            //     $error_message = "Username already exists.";
            // }
            // if($namec>0){
            //     $error_message = "Name already exists.";
            // }
            // if($addressc>0){
            //     $error_message = "Address already exists.";
            // }
            // if($passc>0){
            //     $error_message = "Password already exists.";
            // }
            // if($emailc>0){
            //     $error_message = "Email already exists.";
            // }
        
            
            // if(!isset($error_message)) {
            //     require_once("dbcontroller.php");
            //     $db_handle = new DBController();
            //     $_SESSION["userName"]=$_POST["userName"];
            //     $query = "INSERT INTO user (Username, Name, Address, Password, EmailAddress, PhoneNumber) VALUES
            //     ('" . $_POST["userName"] . "', '" . $_POST["firstName"] . "', '" . $_POST["lastName"] . "', '" . md5($_POST["password"]) . "', '" . $_POST["userEmail"] . "', '" . $_POST["phoneNumber"] . "')";
            //     $result = $db_handle->insertQuery($query);
            //     if(!empty($result)) {
            //         header("location:r2.php");
            //     } else {
            //         $error_message = "Problem in registration. Try Again!";	
            //     }
            // }
        }
        break;
        case "B":
             header("location:register.php");
            break;

        default:
            echo "What are you doing?";
    } 
} 
?>

<body bgcolor="black">
&nbsp;&nbsp;&nbsp;&nbsp;
<h3>
<br>
<br>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<?php if(!empty($success_message)) { ?>	
<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
<?php } ?>
<?php if(!empty($error_message)) { ?>	
<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>
Username:<input type="text" name="username">
<br>
<br>
Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password">
<br>
<br>
<input type="hidden" name="form" value="A">
<input type="submit" value="Login">
</form>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<input type="hidden" name="form" value="B">
<input type="submit" value="Register">
</form>


</h3>
</body>
</html>