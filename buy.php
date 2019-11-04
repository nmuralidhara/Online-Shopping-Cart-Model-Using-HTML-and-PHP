
<?php
session_start();
?>


<html>
	<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
		<title>Shanmuga Vilas</title>
		<script src="jquery.min.js"></script>
		<script src="bootstrap.min.js"></script>
		<link href="bootstrap.min.css" rel="stylesheet" />
		<link href="icon.css" rel="stylesheet" />
		<link href="w3.css" rel="stylesheet" />
		<link href="font-awesome.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</head>
	<style>
  #ju{
    border:3px solid cyan;
    float:right;
    position:relative;
    top:100px;
    margin-bottom:none;
    right:100px;
    font-size:26px;
    background-color:black;
    color:white;
    border-radius:10px;
}
table{
	margin-top:30%;
	top:20%;
	right:0%;
   position:absolute;
	width:50%;
	height:50%; 

}
.t1{
    width:40%;
    border:3px solid cyan;
    border-right:none;
    background-color:black;
    color:white;
    border-radius:10px;
	
}
/* .form-control{
width:150%;
height:150%;
} */
/* #search-text{
width:150%;
height:150%;
} */
tr.hover{
    width:40%;
    border:3px solid cyan;
    border-right:none;
    background-color:white;
    color:black;
    border-radius:10px;

}
#arivu{
    border:3px solid cyan;
    float:right;
    font-size:26px;
    background-color:black;
    color:white;
    border-radius:10px;
} 
.t2{
    border:3px solid cyan;
    border-left:none;
    background-color:black;
    color:white;
    border-radius:10px;
   
}
}
.side{
    margin-left:none;
    margin-right:90%;
}
/* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
/* .hi{
 float: left; 
} */
.hello{
	margin-right:0px;
}

/* Change the color of links on hover */
a:hover {
  background-color:white;
  color: black;
  border:4px solid cyan;
  border-radius:10px;
}
#h:hover{
	border:4px solid cyan;
  border-radius:10px;	
}
#ho:hover{
	border:none;
  /* border-radius:10px;	 */
}
#tu {
background-color:black;
color:white;
  padding: 6px;
  margin-top: 0px;
  font-size: 17px;
  /* border:4px solid cyan;
  border-radius:12px;	 */
}
#search_text:hover {
background-color:white;
color:black;
  padding: 6px;
  margin-top: 0px;
  font-size: 17px;
  border:4px solid cyan;
  border-radius:12px;	
}
.active{
	border:4px solid cyan;
  border-radius:10px;	
}
.container-fluid{
	border:4px solid cyan;
  border-radius:10px;
}
/* Add a color to the active/current link */
.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 90;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color:black;
  background-color:white;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>

	<body style="background-color:black;">
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="newlist.php" id="h">Home</a></li>
      <li> <a id="ho"><div class="input-group">
  <!-- <span class="input-group-addon">Search</span> -->
 <input type="text" name="search_text" id="search_text" id="tu" placeholder="Search by Customer Details"  class="form-control" /><span class="glyphicon glyphicon-search"></span> 
</div></a></li>
      <!-- <li><a id="ho"><i class="material-icons">search</i></a> -->
      <li class="active"><a href="#" id="h">Shopping Cart</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
	<!-- <li><a>
	<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Narpavirajan
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
    </ul>
  </div>
	</a></li> -->
      <li><a href="#" id="h"><span class="glyphicon glyphicon-user"></span><?php echo($_SESSION['name'])?></a></li>
      <li><a href="logout.php" id="h"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
    </ul>
  </div>
</nav>
<div class="sidenav">
  <ul class="nav navbar-nav">
  <li class="active"><a href="sc.php">Pending Orders</a></li>
  <li><a href="ip.php">In Progress Orders</a></li>
  <li><a href="delivered.php">Delivered Orders</a></li>
  </ul>
</div>	
<
			<br>
			<div id="result"></div>
	
		<div style="clear:both"></div>
		<br />
		
		<br />
		<br />
		<br />	

	</div>	
	</body>
</html>
<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"buy.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
});
  </script>
  <?php
$connect = mysqli_connect("localhost", "root", "", "tndemocrat");
$arr=[];
$output = '';
$user=$_SESSION['name'];
if(isset($_POST['submit'])){//to run PHP script on submit
    $output .= '<div class="table-responsive">
    <form action="confirm.php" method="POST">
					<table class="table table bordered">
						<tr>
							<th>Item</th>
							<th>Quantity</th>
							<th>Rate</th>
							<th>Bill Amount</th>
						</tr>';
if(!empty($_POST['check_list'])){
// Loop to store and display values of individual checked checkbox.

foreach($_POST['check_list'] as $selected){
	$s=$selected;
	array_push($arr,$s);
$query="SELECT * FROM shoppingcart WHERE Id=$selected";
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	
	while($row = mysqli_fetch_array($result))
	{
        
		$output .= '
			<tr>
				<td>'.$row["Item"].'</td>
				<td>'.$row["Quantity"].'</td>
				<td>'.$row["FixedPrice"].'</td>
				<td>'.$row["Rate"].'</td>
			</tr>
		';
    }
   
}

}
foreach($arr as $v)
{
    $output .='<input type="hidden" name="result[]" value="'. $v. '">';
}
$output .= '</table></div><input type="submit" name="submit" id="ju" value="Confirm"></form>';
echo $output;
}
}
?>