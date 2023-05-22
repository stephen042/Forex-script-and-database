<?php
include("dbcon.php");
include('session.php');
$finalcode = "";
if(isset($_GET['id']))
          
    {
      
    $id = $_GET['id'];
   
              $query = mysqli_query($conn,"DELETE FROM users WHERE user_id = '$id'");
              header("location: admin-user.php");
              

  }
                  
?>