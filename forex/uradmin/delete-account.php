<?php
include("dbcon.php");
include('session.php');
$finalcode = "";
if(isset($_GET['id']))
          
    {
      
    $id = $_GET['id'];
   
              $query = mysqli_query($conn,"DELETE FROM register_user WHERE reg_id = '$id'");
              header("location: account-holder.php");
              

  }
                  
?>