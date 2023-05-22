<?php
$finalcode = "";
if(isset($_GET['id']))
          
    {
      
    include("dbcon.php");
	include('session.php');
    $id = $_GET['id'];
   
              $query = mysqli_query($conn,"DELETE FROM product_details WHERE pid = '$id'");
              header("location: shippment-details.php");
              

  }
                  
?>