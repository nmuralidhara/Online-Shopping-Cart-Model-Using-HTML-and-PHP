<html>
<style>
h3{
 color:white;
 background-color:black;
 border:10px solid cyan;

}
</style>

<body bgcolor="black">
<?php
session_start();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tndemocrat";
$name=$_POST["name"];
$emailAddress=$_POST["emailaddress"];
$password=$_POST["password"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM user WHERE Username='$_POST['username']' AND Password='$_POST['password']'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $_SESSION["name"]=$row["Name"];
    }
  header("location:newlist.php");
} 
}
$conn->close();
?>

</body>