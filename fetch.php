<html>
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Webslesson Demo - Ajax Live Data Search using Jquery PHP MySql</title>
		<script src="js/jquery.min.js"></script>
		<script src="bootstrap.min.js"></script>
		<link href="bootstrap.min.css" rel="stylesheet" />
	</head>
<style>
input [type="text"]{
    border:3px solid cyan;
    float:right;
    font-size:26px;
    background-color:black;
    color:white;
    border-radius:10px;
}
input:hover [type="text"]{
    border:3px solid cyan;
    float:right;
    font-size:26px;
    background-color:white;
    color:black;
    border-radius:10px;
}
/* table{
    margin-top:10px;
    top:40%;
    margin-left:30%;
    position:absolute;

} */
.t1{
    width:40%;
    border:3px solid cyan;
    border-right:none;
    background-color:black;
    color:white;
    border-radius:10px;

}
/* .t1:hover{
    width:40%;
    border:3px solid cyan;
    border-right:none;
    background-color:white;
    color:black;
    border-radius:10px;

} */

.t2{
    border:3px solid cyan;
    border-left:none;
    background-color:black;
    color:white;
    border-radius:10px;

}
/* .t2:hover{
    width:40%;
    border:3px solid cyan;
    border-right:none;
    background-color:white;
    color:black;
    border-radius:10px;

}  */

}
.side{
    margin-left:none;
    margin-right:90%;
}
</style>

<?php
$connect = mysqli_connect("localhost", "root", "", "tndemocrat");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM item 
	WHERE Item LIKE '%".$search."%'
	OR Type LIKE '%".$search."%' 
	OR Rate LIKE '%".$search."%' 
	OR Rating LIKE '%".$search."%' 
	";
}
else
{
	$query = "
	SELECT * FROM item ORDER BY Item";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table align="center">
						';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
            <td class="t1"><img src="img/'.$row["Path"].'" class="img-responsive" style="width:300px;height:350px;border:4px solid cyan;border-left:none;border-top:none;border-bottom:none;"/>
            </td>
            <td class="t2"><h1>'.$row["Item"].'</h1><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" name="hi" value="View Details" id="'.$row["Item"].'"class="btn btn-success btn-xs view_data" />
    <h3>Type:'.$row["Type"].'</h3>
    <h3>Rating:'.$row["Rating"].'/5</h3>
    
						<input type="hidden" name="hidden_name" value="'.$row["Item"].'" />

						<input type="hidden" name="hidden_price" value="'.$row["Rate"].'" />

						<input type="button" name="edit" value="Add To Cart" id="'.$row["Item"].'"class="btn btn-success btn-xs edit_data" />
    <br>
    <label id="kolangi">Rs.'.$row["Rate"].'</label><br><br></td></tr>
            <br>
            <br>
		';
    }
    $output .="</table></div>";
    echo $output;
}
    
else
{
     $output='<h3 style="color:white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data not found</h3>';
     echo $output;
}
?>
</html>
<div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Item to be added</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title text-center">Your Order</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                          <!-- <label id="sw" name="sw"></label>   -->
                          <label>Item-Name</label> 
                          <input type="text" name="name" id="name" class="form-control" readonly/>  
                         
                          
                            
                          <br /> 
                          <br />  
                          <label>Rate</label>  
                          <input type="text" name="designation" id="designation" class="form-control" readonly />  
                          <br />  
                          <label>Quantity</label>  
                          <input type="text" name="age" id="age" class="form-control" />  
                          <br />  
                          <input type="hidden" name="path" id="path" />  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <script>  
 $(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });  
      $(document).on('click', '.edit_data', function(){  
           var employee_id = $(this).attr("id"); 
           $.ajax({  
                url:"fetch-1.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#name').val(data.Item);  
                     $('#designation').val(data.Rate);  
                    // $('#designation').val(data.Rate);  
                    //  $('#designation').val(data.designation);  
                    //  $('#age').val(data.age);  
                     $('#path').val(data.Path);  
                    $('#insert').val("Update");  
                    $('#employee_detail').html(data);  
                    $('#add_data_Modal').modal('show');  
                }  
           });  
         
      });  
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
           if($('#name').val() == "")  
           {  
                alert("Name is required");  
           }  
           else if($('#address').val() == '')  
           {  
                alert("Address is required");  
           }  
           else if($('#designation').val() == '')  
           {  
                alert("Designation is required");  
           }  
           else if($('#age').val() == '')  
           {  
                alert("Age is required");  
           }  
           else  
           {  
                $.ajax({  
                     url:"insert.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val("Inserting");  
                     },  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#add_data_Modal').modal('hide');  
                          $('#employee_table').html(data);  
                     }  
                });  
           }  
      });  
     $(document).on('click', '.view_data', function(){  
    
          var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"select.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }             
       });  
 });  
 </script>
 



 
 