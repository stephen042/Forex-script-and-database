<?php
 @session_start(); 
 include('dbcon.php');
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) { ?>
<script>
window.location = "login.php";
</script>
<?php
}
$session_id=$_SESSION['id'];

$user_query = mysqli_query($conn, "select * from d_admin_user where d_admin_id = '$session_id'");
$user_row = mysqli_fetch_array($user_query);
$user_username = $user_row['d_admin_username'];
$user_mail = $user_row['d_admin_email'];
?>