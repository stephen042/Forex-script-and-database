<?php
include('dbcon.php');
include('session.php');
mysqli_query($conn,"update user_log set logout_Date = NOW() where user_id = '$session_id' ");

 session_destroy();
header('location:login.php'); 
?>