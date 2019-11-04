<?php
session_start();
?>

<?php
$connect = mysqli_connect("localhost", "root", "", "tndemocrat");
$output = '';
$user=$_SESSION['name'];
$idn=0;
            $q="SELECT * FROM bill";
            $result1 = mysqli_query($connect, $q);
   if(mysqli_num_rows($result1) > 0)
   {
        while($row = mysqli_fetch_array($result1))
       {
          $idn=$idn+1;
        }
           }
           $idn=$idn+1;
if(isset($_POST['submit']))
{
    if(!empty($_POST['result'])){
        // Loop to store and display values of individual checked checkbox.
        
        foreach($_POST['result'] as $selected){
            
            $query="SELECT * FROM shoppingcart WHERE Id=$selected";
            $result = mysqli_query($connect, $query);
            if(mysqli_num_rows($result) > 0)
            {
                
                while($row = mysqli_fetch_array($result))
                {
                    
                    $id=$idn;
                    $item=$row["Item"];
                    
                    $quantity=$row["Quantity"];
                    $f=$row["FixedPrice"];
                    $r=$row["Rate"];
                    $query = "  
           INSERT INTO billsub(Billno,Item,Quantity,FixedPrice,Rate)  
           VALUES('$id','$item','$quantity','$f','$r');  
           
           "; 
           $result1 = mysqli_query($connect, $query); 
           echo("hi");
                }
               
            }
        }
    }
    $q2="SELECT * FROM user WHERE Name='$user'";
    $t=mysqli_query($connect, $q2);
    if(mysqli_num_rows($t) > 0)
            {
                
                while($row = mysqli_fetch_array($t))
                {
                    $add=$row["Address"];
    $query1 = "  
    INSERT INTO bill(Billno,Name,Address,Status)  
    VALUES('$idn','$user','$add','1');  
    
    ";  
$v=mysqli_query($connect, $query1);
}
                }
}
?>