<?php
session_start();
$getnumber = rand(10000,99999);
  $sasa = $getnumber + 1;
$fgh='0'.$sasa;						
$finalcode = 'MP-'.$fgh;						
session_regenerate_id();
$_SESSION['finalcode'] = $finalcode;
header("location: add-shippment-details");
exit();
		?>