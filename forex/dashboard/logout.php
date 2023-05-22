													<?php
													include('conn.php');
													include('session.php');
													$query_logout= mysqli_query($conn, "update user_log set logout_date = NOW(), online_status = '0' where user_id = '$session_id' ");
													$query = mysqli_query($conn,"INSERT INTO activities_log (act_username ,act_action, act_date, act_system_id) 
														 
														 VALUES ('$reg_number','User Log Out', NOW(), '$session_id')");

															if(session_destroy()){
														 
															header("Location: ../index.php");
														}
													?>