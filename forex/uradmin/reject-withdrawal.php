<?php 
 
include('conn.php');
include('session.php');
										if(isset($_GET['id']))
													{
										$id = $_GET['id'];
									// update into db
					
									$query25 = mysqli_query($conn, "UPDATE withraw_tb SET w_status = 'Rejected' WHERE '$id' = sha1(w_code)");
									$query25 = mysqli_query($conn, "UPDATE mtran_history SET mtran_status = 'Rejected' WHERE '$id' = sha1(mtran_code)");
									if($query25)
										{
								$query = mysqli_query($conn,"INSERT INTO activities_log (act_id, act_username, act_action, act_date, act_system_id) 
	 
	 VALUES (NULL, '$user_username', 'Rejected Withdrawal Notice', NOW(), '$session_id')");
									header('Location: users-withdrawal');
										}
									
									}
?>