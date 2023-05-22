<?php 
 
include("dbcon.php");
include('session.php');
										if(isset($_GET['id']))
													{
										$id = $_GET['id'];
							// update into db
					
								$query25 = mysqli_query($conn, "DELETE FROM trading_tb WHERE '$id' = sha1(td_id)");
								if($query25)
										{
								$query = mysqli_query($conn,"INSERT INTO activities_log (act_id, act_username, act_action, act_date, act_system_id) 
	 
	 VALUES (NULL, '$user_username', 'Deleted trading details', NOW(), '$session_id')");
									header('Location: user-trade');
										}
									
									}
?>