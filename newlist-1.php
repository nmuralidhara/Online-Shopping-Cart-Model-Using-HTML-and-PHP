<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Webslesson Demo - Ajax Live Data Search using Jquery PHP MySql</title>
		<script src="js/jquery.min.js"></script>
		<script src="bootstrap.min.js"></script>
		<link href="bootstrap.min.css" rel="stylesheet" />
	</head>
	<style>
table{
    margin-top:10px;
    top:70%;
    margin-left:30%;
    position:absolute;

}
.t1{
    width:40%;
    border:3px solid cyan;
    border-right:none;
    background-color:black;
    color:white;
    border-radius:10px;
	
}
tr.hover{
    width:40%;
    border:3px solid cyan;
    border-right:none;
    background-color:white;
    color:black;
    border-radius:10px;

}
label{
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
#search_text{
width:30%;
height:30%;
}
</style>
	<body bgcolor="black">
		<div class="container">
			<br />
			<br />
			<br />
			<h2 align="center">Ajax Live Data Search using Jquery PHP MySql</h2><br />
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" />
				</div>
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




