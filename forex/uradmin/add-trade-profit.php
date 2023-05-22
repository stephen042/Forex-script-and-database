<?php 
include("dbcon.php");
include('session.php');
                          $success_message = '';
                          $inv_amt = '';
                          $trac_code = '';
                          $deposit_email = '';
                    //if update button is click, do this
                    if(isset($_POST['btn_profit']))
                    {
                    $a = $_POST['receiver_id'];
                    $trac_code = $_POST['trac_code'];
                    $amt_add = $_POST['amt_add'];
                    @$due_date = $_POST['due_date'];
                    $earning_state = $_POST["earning_state"];
                    $note = $_POST['note'];
                    $trade_code = $_POST["trade_code"];
                    
                    $query_st1 = mysqli_query($conn," SELECT * FROM  user_tb where user_id = '$a'");
                    $counter = 0;
                    while(@$row = mysqli_fetch_array($query_st1))
                    {
                    $id = $row['user_id'];
                    $deposit_email = $row['uemail'];
                    $user_fname = $row['fname'];
                    $user_amt = $row['u_amount'];
                    @$user_pending_balance = $row['u_withraw_pending'];
                    }
                    
                    if($earning_state =="Successful")
                    {
                        
                    
                  $new_pending = ($amt_add + $user_pending_balance);
                  
                  @$clear_balance = ($new_pending + $user_amt);
              // update user record
                  $query_inv = mysqli_query($conn, "UPDATE user_tb SET u_withraw_pending ='$new_pending' WHERE user_id ='$a'");
                    $query_trade = mysqli_query($conn, "UPDATE trading_tb SET td_status ='$earning_state' WHERE td_trac_code ='$trade_code'");
                 // insert into earning table
                  $query_act1 = mysqli_query($conn,"INSERT INTO earning_tb(ea_id, ea_uid, ea_email, ea_amt, ea_status, ea_date, ea_type) 
                  VALUES (NULL, '$a', '$deposit_email', '$amt_add', '$earning_state', NOW(), '$note')");
                 // keep record of action
                   $query_act = mysqli_query($conn,"INSERT INTO activities_log (act_id, act_username, act_action, act_date, act_system_id) 
                 
                 VALUES (NULL, '$user_username', 'Added Trading Profit', NOW(), '$session_id')");
                  
                    if($query_inv)
                    {
                    $success_message = "<div class='alert alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <h4>Successful</h4>
                    Profit Added successfully, User trading is completed.</div>
                    <p align ='center'><font style='text-align:center'></font></p>
                    <meta http-equiv='refresh' Content='4; url=user-trade' />
                    ";
                    
                    
                    // Send mail to user with verification here
      $to = $deposit_email;
          $subject = "Trade Credit Transaction Alert";
         
         // Create the body message
         @$message .= "<br>
         <div style='font-family:HelveticaNeue-Light,Arial,sans-serif;background-color:#eeeeee'>
  <table align='center' width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee'>
    <tbody>
        <tr>
          <td bgcolor='#FFFFFF'>
                <table align='center' width='750px' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee' style='width:750px!important'>
                <tbody>
                  <tr>
                      <td>
                      <table width='690' align='center' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee'>
                            <tbody>
                              <tr>
                                    <td height='80' align='center' border='0' cellspacing='0' cellpadding='0' bgcolor='#FFFFFF' style='padding:0;margin:0;font-size:0;line-height:0'><img src='http://www.cryptoean.com/eu/img/logo-white.png'>
                                    
                                    </td>
                          </tr>
                                <tr>
                                    <td align='center'>
                                        <table width='630' align='center' border='0' cellspacing='0' cellpadding='0'>
                                        <tbody>
                                          <tr>
                                              <td colspan='3' height='60'></td></tr><tr><td width='25'></td>
                                                <td align='center'>
                                                  <h6 style='font-family:HelveticaNeue-Light,arial,sans-serif;font-size:25px;color:#404040;line-height:48px;font-weight:bold;margin:0;padding:0'>Deposit Transaction</h6>
                                                </td>
                                                <td width='25'></td>
                                            </tr>
                                            <tr>
                                              <td colspan='3' height='40'></td></tr><tr>
                                                <td colspan='5' align='center'>
                                                    <p style='color:#404040;font-size:16px;line-height:24px;font-weight:lighter;padding:0;margin:0'>
                          Hello $user_fname, Your account has be credited with EUR$amt_add. This will reflect in your account in the next few minutes.</p>
                                                    <br>
                                                    <p style='color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0'></p>
                                                </td>
                                            </tr>
                                            <tr>
                                            <td colspan='4'>
                                                <div style='width:100%;text-align:center;margin:30px 0'>
                                                    <table align='center' cellpadding='0' cellspacing='0' style='font-family:HelveticaNeue-Light,Arial,sans-serif;margin:0 auto;padding:0'>
                                                    <tbody>
                                                      <tr>
                                                            <td align='center' style='margin:0;text-align:center'><a href='http://www.cryptoean.com/eu/login' style='font-size:21px;line-height:22px;text-decoration:none;color:#ffffff;font-weight:bold;border-radius:2px;background-color:#0096d3;padding:14px 40px;display:block;letter-spacing:1.2px' target='_blank'>Click here to login</a></td>
                                                        </tr>
                                                    </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                  </tbody>
                                    </table>
                              </td>
                        </tr>
                            
                            <tr bgcolor='#ffffff'>
                                <td bgcolor='#FFFFFF'>
                                  
                                  <table width='570' align='center' border='0' cellspacing='0' cellpadding='0'>
                                    <tbody>
                                      <tr>
                                        <td>
                                          <h2 style='color:#404040;font-size:22px;font-weight:bold;line-height:26px;padding:0;margin:0'>&nbsp;</h2>
                                          <div style='color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0'>You can always contact us for any support or write us an email on support@cryptoean.com </div>
                                        </td>
                                      </tr>
                                      <tr><td>&nbsp;</td>
                                </tr></tbody></table></td>
                              </tr>
                            </tbody>
                            </table>
                        <table align='center' width='750px' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee' style='width:750px!important'>
                            <tbody>
                              <tr>
                                  <td align='center'>
                                        <table width='630' align='center' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee'>
                                        <tbody>
                                          <tr><td colspan='2' height='30'></td></tr>
                                            <tr>
                                              <td width='360' valign='top'>&nbsp;</td>
                                                <td align='right' valign='top'>
                                                  <span style='line-height:20px;font-size:10px'><a href='#'><img src='http://i.imgbox.com/BggPYqAh.png' alt='fb'></a>&nbsp;</span>
                                                    <span style='line-height:20px;font-size:10px'><a href='#'><img src='http://i.imgbox.com/j3NsGLak.png' alt='twit'></a>&nbsp;</span>
                                                    <span style='line-height:20px;font-size:10px'><a href='#'><img src='http://i.imgbox.com/wFyxXQyf.png' alt='g'></a>&nbsp;</span>
                                                </td>
                                            </tr>
                                            <tr><td colspan='2' height='5'></td></tr>
                                        </tbody>
                                        </table>
                                    <p><span style='color:#a3a3a3;font-size:12px;line-height:12px;padding:0;margin:0'>&copy; 2020 Cryptoean. All Rights Reserved. </span></p></td>
                          </tr>
                            </tbody>
                          </table>
                    </td>
                  </tr>
                </tbody>
                </table>
            </td>
    </tr>
  </tbody>
    </table>
</div>";
         $header = "From:Cryptoean Trade <support@cryptoean.com> \r\n";
         $header .= "Cc:noreply@cryptoean.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         @$retval = mail ($to,$subject,$message,$header);
                    
                    }
                        
                    }else
                    
                  if($earning_state !="Successful")
                  {
                     $new_pending = ($amt_add + $user_pending_balance);
                  
                  @$clear_balance = ($new_pending + $user_amt);
              // update user record
                  $query_inv = mysqli_query($conn, "UPDATE user_tb SET u_withraw_pending ='$new_pending' WHERE user_id ='$a'");
                  $query_trade_update = mysqli_query($conn, "UPDATE trading_tb SET td_status ='$earning_state' WHERE td_trac_code ='$trade_code'");
                 // insert into earning table
                  $query_act1 = mysqli_query($conn,"INSERT INTO earning_tb(ea_id, ea_uid, ea_email, ea_amt, ea_status, ea_date, ea_type) 
                  VALUES (NULL, '$a', '$deposit_email', '$amt_add', '$earning_state', NOW(), '$note')");
                 // keep record of action
                   $query_act = mysqli_query($conn,"INSERT INTO activities_log (act_id, act_username, act_action, act_date, act_system_id) 
                 
                 VALUES (NULL, '$user_username', 'Added Trading Profit', NOW(), '$session_id')");
                  
                  
                    if($query_inv)
                    {
                    $success_message = "<div class='alert alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <h4>Successful</h4>
                    record added successfully, User trading report is completed.</div>
                    <p align ='center'><font style='text-align:center'></font></p>
                    <meta http-equiv='refresh' Content='4; url=user-trade' />
                    ";
                  }
                }
                    else
                    {
                  $success_message = "<div class='alert alert-warning'>
                  <button type='button' class='close' data-dismiss='alert'>&times;</button>
                  <h4>Error occured!</h4>
                  The operation was not successful, try again.</div>";
                  }
                
                  // admin choose no
                  
                      
                    
                  }
                      
                         if(isset($_GET['id']))
          
                            {
                          $id = $_GET['id'];
                            }
            
                          
                    // Send the bonus action      
                    
                    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin | Add Profit Trade</title>

    <!-- Bootstrap -->
     <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index" class="site_title"><img src="images/new_logo.png" width="150px" height="40px"></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <!--<div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
          -->
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                 <li><a href="index"><i class="fa fa-home"></i> Home</a>

                  <li><a href="users"><i class="fa fa-users"></i> Registered User</a>
                  </li>
                  <li class=""><a href="referral"><i class="fa fa-book"></i> Referal</a>
                  <li class=""><a href="user-investement"><i class="fa fa-file"></i> Investment</a>
                  </li>
                  </li>
                  <li class="active"><a href="user-trade"><i class="fa fa-credit-card"></i> Trade Result</a>
                  </li>
                  <li><a href="users-earning"><i class="fa fa-user"></i> User Earning</a>
                  </li>
                  <li><a href="users-deposit"><i class="fa fa-magnet"></i> User Deposit</a>
                  </li>
                  <li><a href="users-withdrawal"><i class="fa fa-magnet"></i> Withdrawal</a>
                  </li>
                  <li><a href="yearly-forcast"><i class="fa fa-magnet"></i> Yearly Forecast Report</a>
                  </li>
                  <li><a href="stats"><i class="fa fa-magnet"></i> Statistics (Charts)</a>
                  </li>
                  <li><a href="users-log"><i class="fa fa-magnet"></i> Logs</a>
                  </li>
                  <li><a href="system-log"><i class="fa fa-magnet"></i> System Activities</a>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <?php include('bottom_menu.php')?>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <?php include("top_nav.php")?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
           <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><i class="fa fa-user"></i>  Add Profit <a href="user-trade"><button type="button" class="btn btn-round btn-primary"><i class="fa fa-arrow-left"></i> Back</button></a></h3>
              </div>

              
            </div>


            <?php //include("user_graphReport.php")?>
            
            <br><br>
            <?php 
            $query = mysqli_query($conn, "SELECT * from trading_tb where '$id' = sha1(td_id) ");
            $row = mysqli_fetch_array($query);
            $num_row = mysqli_num_rows($query);
                  
            if ($num_row > 0) 
              {
          ?>
          <?php echo $success_message;?>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><small>Enter details to add profit trading to user account</small></h2>
                    <?php
            $query_st = mysqli_query($conn," SELECT * from trading_tb where '$id' = sha1(td_id) ");
                  $counter = 0;
                  while(@$row = mysqli_fetch_array($query_st))
                  {
                    
                    $id = $row['td_id'];
                    
                  ?>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
          
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">

              
               <form method="post" enctype="multipart/form-data">
                 <div class="row">
                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Amount Traded
                    <input class="form-control" id="focusedInput" type="text" name="withdrawa_year" disabled value="<?php echo @$row['td_amt']; ?>">
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    User Email ID
                    <input class="form-control" id="focusedInput" type="text" name="deposit_year" disabled value="<?php echo @$row['td_email']; ?>">
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Transaction ID
                    <input class="form-control" id="focusedInput" type="text" name="" disabled value="<?php echo @$row['td_trac_code']; ?>">
                    
                  </div>

              <input class="input-xlarge focused" id="focusedInput" type="hidden" name="trac_code" value="<?php echo @$row['td_trac_code']; ?>">
                  
                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Profit Percentage Earning
                    <input class="form-control" id="focusedInput" type="text" name="amt_add" value="<?php echo @$row['inv_profit_amt']; ?>" placeholder ="Enter Profit Earning" required>%
                    
                  </div>


                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Start Date/Time
                    <input class="form-control" id="focusedInput" type="text" name="start_date" value="<?php echo @$row['td_date']; ?>" placeholder ="Duration Time">
                    
                  </div>


                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    End Date/Time
                    <input class="form-control" id="focusedInput" type="text" name="duration" value="<?php echo @$row['tr_time'].'Min'; ?>" placeholder ="Duration Time">
                    
                  </div>

                  <input class="input-xlarge focused" id="focusedInput" type="hidden" name="receiver_id" value="<?php echo @$row['td_uid']; ?>">
                <input class="input-xlarge focused" id="focusedInput" type="hidden" name="trade_code" value="<?php echo @$row['td_trac_code']; ?>">
                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Discription
                    <input class="form-control" id="focusedInput" type="text" name="note">
                    
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Trading Status ?
                    <select class="form-control" name="earning_state" required>
                    <option></option>
                    <option value="Failed" title="Failed">Trade Failed</option>
                    <option value="Lost" title="Trade Lost">Trade Lost</option>
                    <option value="Successful" title="Successful">Successful</option>
                    <option value="Profit" title="Earning Pending">Profit</option>
                    
                    </select>
                    
                  </div>
                  <br>
                  <div class="">
                    <br>
                  </div>
            
                </div>
             
              <br><br><div align="Center">
                <button type="submit" id="btn_profit" name="btn_profit" class="btn btn-round btn-primary align-center"><i class="fa fa-paper-plane"></i> Post Profit</button>
                </div>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <?php 
                      }
                ?>  
         
          <?php 
          
          }else
      echo $message = '<h4 class="text-center p2"><div class="alert alert-dismissible alert-warning">
  
      <strong>Sorry!</strong> You currently do not have any record at the moment.</div></div></h4>';;
  ?>

            <br>

            
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php include('footNote.php')?>
        <!-- /footer content -->
      </div>
    </div>
<style type="text/css">
            .p2 {
             position: fixed;
            top: 50%;
            left: 50%;
            margin-top: -20px;
            margin-left: -120px;
            }

            #bottom { 
                position:absolute;                  
                bottom:10px;                          
                margin-left : auto;
                margin-right : auto;   
                width: 100%;
                height: auto;                      
            } 
        </style>
    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
  </body>
</html>