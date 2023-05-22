<?php

														require_once("conn.php");
														include('session.php');
														$current_bal = "";
														if(isset($_POST['btn_trade']))
											{
														@$trade_amt = trim($_POST['trade_amt']);
														@$time = trim($_POST['time']);
														@$days = trim($_POST['days']);
														@$trade_price = trim($_POST['trade_price']);
														$getnumber = rand(10000,99999);
                                                        $sasa = $getnumber + 1;
                                                        $fgh='0'.$sasa;                     
                                                        $finalcode = 'CT'.$fgh;
                                                        $verify_code = sha1($finalcode);
														
														
														//Check username and password from database
												$sql_login = "SELECT * FROM user_tb WHERE user_id ='$session_id'";
												$result_login = mysqli_query($conn,$sql_login);
												$row_login = mysqli_fetch_array($result_login,MYSQLI_ASSOC);
												if(mysqli_num_rows($result_login) == 1)
												{
														$current_bal = ($user_amt - $trade_amt);
														if($user_amt < $trade_amt)
														{
														echo "error"; // error message here
														echo "<font color='#FFCC33'> Low balance! try again.</font>"; // wrong details 
														}else
														if($days =="")
														{
														echo "error"; // error message here
														echo "<font color='#FFCC33'> Select option type.</font>"; // wrong details 
														}else
														if($trade_amt =="")
														{
														echo "error"; // error message here
														echo "<font color='#FFCC33'> Enter amount.</font>"; // wrong details 
														}else
														{
															
															
														$query_help = mysqli_query ($conn, "INSERT INTO trading_tb(td_id, td_uid, td_email, td_amt, td_status, td_date, td_type, td_price, td_trac_code) 
							VALUES (NULL, '$session_id', '$email', '$trade_amt', 'Trading Pending', NOW(), '$days', '$trade_price', '$finalcode')");
							// upddate new balance
							$query_update = mysqli_query($conn, "UPDATE user_tb SET u_amount ='$current_bal' WHERE user_id = '$session_id'");
														echo "Yes"; // success message here
														echo "<font color='#009966'> Trading successfully placed</font>"; // wrong details
																				
														}
												}
														else{
														echo "<font color='#FF6600'> Error occured! try again.</font>"; // wrong details 
															}

											}
														
														?>