<?php 
 
include('conn.php');
include('session.php');
										if(isset($_GET['id']))
													{
										$id = $_GET['id'];
							// update into db
					
								$query25 = mysqli_query($conn, "DELETE FROM deposit_tb WHERE '$id' = sha1(d_id)");
								if($query25)
										{
								$query = mysqli_query($conn,"INSERT INTO activities_log (act_id, act_username, act_action, act_date, act_system_id) 
	 
	 VALUES (NULL, '$user_username', 'Deleted Deposit Details', NOW(), '$session_id')");
									header('Location: users-deposit');
										}
									
									}
?>