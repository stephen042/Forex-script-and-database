<?php

require_once 'dbconfig.php';
// generate the PIN code here
$getnumber = rand(10000,99999);
$sasa = $getnumber + 1;
$fgh='0'.$sasa;                     
$finalcode = 'UTB'.$fgh;

if(isset($_POST['btn_login']))
{
$user_email = $_POST['user_email'];
$password = trim(md5($_POST['password']));
$password = ($password);

try
{	

$stmt = $db->prepare("SELECT * FROM reg_user WHERE username=:user_email");
$stmt->execute(array(":user_email"=>$user_email));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$count = $stmt->rowCount();

if($row['password']==$password){

echo "ok";
session_start();
 // log in 
//$_SESSION['userid'] = $row['user_id'];
//$_SESSION['username'] = $row['uemail'];
//$_SESSION['user_level_id'] = $row['u_invit_code'];

$_SESSION['id'] = $row['reg_id'];
@$_SESSION['username'] = $row['u_username'];
@$_SESSION['fullname'] = $row['fname'].' '.$row['lname'];
@$_SESSION['acct_number'] = $row['acct_number'];
@$_SESSION['amount'] = $row['amount'];
@$_SESSION['acct_pin'] = $row['acct_pin'];
@$_SESSION['phone_num'] = $row['phone_num'];
$_SESSION['code'] = $finalcode;
}
else{
echo "Invalid username or password entered."; // wrong details 
}

}
catch(PDOException $e){
echo $e->getMessage();
}
}

?>