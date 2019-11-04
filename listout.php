<html>
<head>
<title>Table</title>
<style>
table{
    margin-top:10px;
    top:10%;
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
</style>
</head>
<script>
function edit_row(Item){
var name=document.GetElementById('Item');
}
</script>
<body bgcolor="black">
<h1>SVS</h1>
<table align="center">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tndemocrat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM ITEM";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $item=$row["Item"];$type=$row["Type"];$rate=$row["Rate"];$rating=$row["Rating"];
        $image=$row["Photo"];
    ?>
    <tr id="row<?php?>">
<td class="t1"><img src="poda.jpg" style="width:60px;height:60px;"><br>
<input type='button' class="edit_button" id="edit-button<?php echo $row["Item"];?>"value="Add To Cart" onclick="edit_row('<?php echo $row['Item'];?>');"> 
</td>
    <td class="t2"><h1><?php echo($item);?></h1><br>
    <h3>Type:<?php echo($type);?></h3>
    <h3>Rating:<?php echo($rating);?>/5</h3>
    <br>
    <label>Rs.<?php echo($rate);?></label><br><br></td></tr>
    <?php
    
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>
</body>
</html>