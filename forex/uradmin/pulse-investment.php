<?php 
 
include('conn.php');
include('session.php');
										if(isset($_GET['id']))
								{
										$id = $_GET['id'];
							// update into db
								}
									$query_st = mysqli_query($conn," SELECT * FROM  investment_tb WHERE '$id' = sha1(inv_id)");
									
									while(@$row = mysqli_fetch_array($query_st))
									{
										
										$id2 = $row['inv_id'];
										$status = $row['inv_status'];
									}
									if($status == 'Confirm')
									{
								$query25 = mysqli_query($conn, "UPDATE investment_tb SET inv_status ='Pursed' WHERE inv_id = '$id2'");
								if($query25)
										{
									header('Location: user-investement');
										}
									}
									if($status =='Pursed')
										{
											
							$query20 = mysqli_query($conn, "UPDATE investment_tb SET inv_status ='Confirm' WHERE inv_id = '$id2'");
								if($query20)
										{
									header('Location: user-investement');
									    }
									}
							
							
?>