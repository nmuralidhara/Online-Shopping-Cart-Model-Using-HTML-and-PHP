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
table{
	margin-top:0%;
	top:20%;
	right:25%;
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
 #kolangi{
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
</style>
<?php
session_start();
?>
	<body style="background-color:black;">
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div> -->
    <ul class="nav navbar-nav">
      <li class="active"><a href="newlist.php" id="h">Home</a></li>
      <li> <a id="ho"><div class="input-group">
  <!-- <span class="input-group-addon">Search</span> -->
 <input type="text" name="search_text" id="search_text" id="tu" placeholder="Search by Item"  class="form-control" /><span class="glyphicon glyphicon-search"></span> 
</div></a></li>
      <!-- <li><a id="ho"><i class="material-icons">search</i></a> -->
      <li><a href="sc-1.php" id="h">Shopping Cart</a></li>
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
	
	
	<!-- <div class="topnav">
  <a class="active" href="#home">Home</a>
  <a><div class="input-group">
  <span class="input-group-addon">Search</span>
 <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
</div></a>

  <a href="#news" >Shopping Cart</a>
  <a href="#contact">Contact</a>
  &nbsp;&nbsp;
  <a href="#about"><span class="glyphicon glyphicon-user"></span><?php echo($_SESSION['name'])?></a>
</div> -->
    <!-- <h3>Welcome, <?php echo $_SESSION["name"];?>!</h3> -->
		<div class="container">
			<br />
			<br />
			<br />
			<div class="form-group" >
				
			</div>
			<br>
			<div id="result"></div>
		</div>
		<div style="clear:both"></div>
		<br />
		
		<br />
		<br />
		<br />
	</body>
</html>


<script>

$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"fetch.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>




