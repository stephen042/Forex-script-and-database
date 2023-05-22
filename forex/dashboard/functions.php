<?php require_once('conn.php');
include('session.php');	

								//diclared some veriable for use
								$formatted_earning = '';
								$formatted_deposit = '';
								$formattedNum5 = '';
								$formatted_active_invest = '';
								$formatted_inv ='';
								$formatted_lastinv ='';
								// get total amount withdraw so for
							   $query1 = mysqli_query ($conn,"SELECT SUM(w_amt) AS total_withdraw FROM withraw_tb where w_uid ='$session_id'");
								while($row=mysqli_fetch_assoc($query1)){
								$num5 = $row['total_withdraw'];
							   @$formattedNum5 =  number_format($num5);
							  
								}
									if($formattedNum5 == '')
									{
										$formattedNum5 = 0;
									}else
									$formattedNum5 = $formattedNum5;
								
								// get last amount withdraw so for
							   $query7 = mysqli_query ($conn,"SELECT * FROM withraw_tb where w_uid ='$session_id'");
								while($row7=mysqli_fetch_assoc($query7)){
								$wid = $row7['w_id'];
								$num50 = $row7['w_amt'];
							   @$formatted_last_withdraw =  number_format($num50);
							  
								}
									if(@$formatted_last_withdraw == '')
									{
										@$formatted_last_withdraw = 0;
									}else
									@$formatted_last_withdraw = @$formatted_last_withdraw;
								
								// get total amount deposited so for
							   $query2= mysqli_query ($conn,"SELECT SUM(d_amt) AS total_deposit FROM deposit_tb where d_uid ='$session_id'");
								while($row=mysqli_fetch_assoc($query2)){
								$num_deposit = $row['total_deposit'];
							   @$formatted_deposit =  number_format($num_deposit);
							  
								}
									if($formatted_deposit == '')
									{
										$formatted_deposit = 0;
									}else
									$formatted_deposit = $formatted_deposit;
								
								
								// get total amount earned so for
							   $query20 = mysqli_query ($conn,"SELECT SUM(ea_amt) AS total_earning FROM earning_tb where ea_uid ='$session_id'");
								while($row=mysqli_fetch_assoc($query20)){
								$num_deposit2 = $row['total_earning'];
							   @$formatted_deposit2 =  number_format($num_deposit2);
							  
								}
									if($formatted_deposit2 == '')
									{
										$formatted_deposit2 = 0;
									}else
									$formatted_deposit2 = $formatted_deposit2;
								
								
								// get total investment amount so for
							   $query21 = mysqli_query ($conn,"SELECT SUM(inv_amt) AS total_invest FROM investment_tb where inv_uid ='$session_id'");
								while($row = mysqli_fetch_assoc($query21)){
								$num_invest = $row['total_invest'];
							   @$formatted_invest =  number_format($num_invest);
							  
								}
									if($formatted_invest == '')
									{
										$formatted_invest = 0;
									}else
									$formatted_invest = $formatted_invest;
								
								// get active investment in the system
							   $query52 = mysqli_query ($conn,"SELECT inv_id, inv_amt FROM investment_tb where inv_uid ='$session_id' AND inv_status ='Confirm' group by inv_uid");
								while($row = mysqli_fetch_assoc($query52)){
								$inv_id = $row['inv_id'];
								$active_invest = $row['inv_amt'];
								@$formatted_active_invest =  number_format($active_invest);
							  	}
									if($formatted_active_invest == '')
									{
										$formatted_active_invest = 0;
									}else
									$formatted_active_invest = $formatted_active_invest;
								
								// get user last login date in the system
							   $query4 = mysqli_query ($conn,"SELECT user_log_id, logout_date FROM user_log where user_id ='$session_id' AND online_status ='0'");
								while($row = mysqli_fetch_assoc($query4)){
								$log_id = $row['user_log_id'];
								$last_see = $row['logout_date'];
							  }
							  
							  // get active deposit in the system
							   $query5 = mysqli_query ($conn,"SELECT d_id, d_amt FROM deposit_tb where d_uid ='$session_id' AND d_status ='Confirm' group by d_uid");
								while($row = mysqli_fetch_assoc($query5)){
								$dop_id = $row['d_id'];
								$active_deposit = $row['d_amt'];
								@$formatted_active_deposit =  number_format($active_deposit);
							  	}
									if(@$formatted_active_deposit == '')
									{
										@$formatted_active_deposit = 0;
									}else
									$formatted_active_deposit = $formatted_active_deposit;
								
						// get last deposit in the system
							   $query6 = mysqli_query ($conn,"SELECT d_id, d_amt, d_status FROM deposit_tb where d_uid ='$session_id'");
								while($row = mysqli_fetch_assoc($query6)){
								$dop1_id = $row['d_id'];
								$last_deposit = $row['d_amt'];
								$last_deposit_state = $row['d_status'];
								@$formatted_last_deposit =  number_format($last_deposit);
							  	}
								
									if(@$formatted_last_deposit == '')
									{
										@$formatted_last_deposit = 0;
									}else
									@$formatted_last_deposit = $formatted_last_deposit;
								
								
								// get last withrawal in the system
							   $query6 = mysqli_query ($conn,"SELECT * FROM withraw_tb where w_uid ='$session_id'");
								while($row = mysqli_fetch_assoc($query6)){
								$dop1_id = $row['w_id'];
								$last_deposit = $row['w_amt'];
								
								@$formatted_lastwithdraw =  number_format($last_deposit);
							  	}
								@$formatted_acct_amt = number_format(@$acct_amt+$refbonus_amt);
								if($formatted_acct_amt == '')
									{
										$formatted_acct_amt = 0;
									}else
									$formatted_acct_amt = $formatted_acct_amt;
									
									
									// get current active investment plan in the system
							   $query_inv = mysqli_query ($conn,"SELECT * FROM investment_tb where inv_uid ='$session_id' AND inv_status = 'Confirm'");
								while($row = mysqli_fetch_assoc($query_inv)){
								$inv_id = $row['inv_id'];
								$current_inv = $row['inv_amt'];
								
								@$formatted_inv =  number_format($current_inv);
							  	}
								
								if($formatted_inv == '')
									{
										$formatted_inv = 0;
									}else
									$formatted_inv = $formatted_inv;
									
									// get the last investment plan in the system
							   $query_invlast = mysqli_query ($conn,"SELECT * FROM investment_tb where inv_uid ='$session_id' AND inv_status = 'Finished'");
								while($row = mysqli_fetch_assoc($query_invlast)){
								$inv_id = $row['inv_id'];
								$last_inv = $row['inv_amt'];
								
								@$formatted_lastinv =  number_format($last_inv);
							  	}
								
								if($formatted_lastinv == '')
									{
										$formatted_lastinv = 'n/a';
									}else
									$formatted_lastinv = $formatted_lastinv;

?>