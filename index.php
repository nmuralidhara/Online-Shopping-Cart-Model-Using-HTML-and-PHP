<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Webslesson Demo - Ajax Live Data Search using Jquery PHP MySql</title>
		<script src="js/jquery.min.js"></script>
		<script src="bootstrap.min.js"></script>
		<link href="bootstrap.min.css" rel="stylesheet" />
	</head>
	<style>
input[type=text] {
    width: 40%;
    padding: 15px 22px;
    margin: 10px 5px;
	border:3px solid cyan;
	border-radius:10px;
	background-color:black;
    color:white;
    box-sizing: border-box;  
}
/* input:hover{
    
    float:right;
    font-size:26px;
    background-color:white;
    color:black;
    
} */
</style>
	<body style="background-color:black;">
		<div class="container">
			<br />
			<br />
			<br />
			<div class="jumbotron text-center"><strong>shanmuga vilas</strong></div>
			<!-- <h2 align="center" style="background-color:green;">Shanmuga Vilas</h2><br /> -->
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" />
				</div>
			</div>
			<br />
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




