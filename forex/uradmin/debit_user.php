<?php
include("dbcon.php");
include('session.php');
$finalcode = "";

                  
?>
<?php
if(isset($_GET['id']))
          
    {
    $id = $_GET['id'];
   
              $query = mysqli_query($conn, "select * from register_user where reg_id = '$id'");
              $row = mysqli_fetch_array($query);
              
  }
                  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Citizens Financial Bank | Debit / Credit User Account</title>

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
                 </li>
                  <li class=""><a href="account-holder"><i class="fa fa-users"></i> Account Holder</a>
                  </li>
                  <li><a href="pending-account"><i class="fa fa-book"></i> Pending Account</a>
                  </li>
                  <li class="active"><a href="credit-user"><i class="fa fa-credit-card"></i> Credit/Debit Account</a>
                  </li>
                  <li><a href="admin-user"><i class="fa fa-user"></i> Add Admin</a>
                  </li>
                  <li><a href="user-log"><i class="fa fa-magnet"></i> User Log</a>
                  </li>
                  <li><a href="system-log"><i class="fa fa-magnet"></i> Activities Log</a>
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
                <h3><i class="fa fa-user"></i>  Account Transaction <a href="credit-user"><button type="button" class="btn btn-round btn-primary"><i class="fa fa-arrow-left"></i> Back</button></a></h3>
              </div>

              
            </div>


            <?php //include("user_graphReport.php")?>
            
            <br><br>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><small>Run Account Crediting/Debiting Here</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  
              <div class="x_content">
                
              
               <form id="add_student" method="post" enctype="multipart/form-data">
                 <div class="row">
                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    First Name
                    <input type="text" name="name" value="<?php echo $row['fname'].' '.$row['lname']; ?>" placeholder="First Name" class="form-control">
                  </div>
                  <input class="input focused" name="uid" value="<?php echo $row['reg_id']; ?>" id="focusedInput" type="hidden" placeholder = "User ID">

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Account Number
                    <input type="text" value="<?php echo $row['acct_number']; ?>"  name="acct_number" placeholder="Last Name" class="form-control">
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                  Account Type
                  <input value="<?php echo $row['acct_type']; ?>"  name="username" class="form-control" id="focusedInput" type="text" placeholder = "Email Address">
                  </div>

                  

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                 Current Balance
                  <input value="<?php echo @number_format($row['amount'], 2); ?>"  name="pass" class="form-control" id="focusedInput" type="text" placeholder = "Current Balance" required>
                  </div>

                  
                  
                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                  Enter Amount
                  <input name="new_amt" id="focusedInput" type="text" placeholder = "Enter Amount " class="form-control" required>
                  </div>

                  <input class="input focused"  name="umail" id="focusedInput" type="hidden" value="<?php echo $row['email']; ?>" placeholder = "Enter Email " required>
                  <input class="input focused"  name="acct_number" id="focusedInput" type="hidden" value="<?php echo $row['acct_number']; ?>" placeholder = "Enter Email " required>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                  Debit / Credit
                
                <select name="action" class="form-control" required>
                    <option></option>
                    <option value="Debit"> Debit</option>
                    <option value="Credit"> Credit </option>
                    </select>
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                  Post Date
                  <input name="post_date" id="focusedInput" type="date" class="form-control" id="focusedInput" type="text" placeholder = "Post Date" required>
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                  Discriptions
                  <textarea class='form-control' name="note" id='' placeholder='Description' rows='3' required></textarea>
                  </div>
 
                  <br>
                  <div class="">
                    <br>
                  </div>
            
                </div>
             
              <br><br><div align="Center">
                <button type="submit" id="update" name="update" class="btn btn-round btn-primary align-center"><i class="fa fa-check"></i> Post</button>
                </div>
                  </div>
                  </form>
                </div>
              </div>
            </div>
      

            <br>

            
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php include('footNote.php')?>
        <!-- /footer content -->
      </div>
    </div>

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

  <?php
            if (isset($_POST['update'])){
            
            $new_amt = $_POST['new_amt'];
            $old_amt = $_POST['old_amt'];
            $action = $_POST['action'];
            $name = $_POST['name'];
            $note = $_POST['note'];
            $acct_number = $_POST['acct_number'];
            $transac_date = $_POST['transac_date'];
            $post_date = $_POST['post_date'];
            $uid = $_POST['uid'];
            
            if ($action == 'Debit')
            {
              $email = $_POST['umail'];
              $acct_number = $_POST['acct_number'];
              @$fn = $_POST['fn'];
               @$ln = $_POST['ln'];
               
            $to = $email;
            $subject = "Debit Alert";

         // Create the body message
         $message .= "<div style='font-family:HelveticaNeue-Light,Arial,sans-serif;background-color:#eeeeee'>
  <table align='center' width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee'>
    <tbody>
        <tr>
          <td>
                <table align='center' width='750px' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee' style='width:750px!important'>
                <tbody>
                  <tr>
                      <td>
                      <table width='690' align='center' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee'>
                            <tbody>
                              <tr>
                                    <td colspan='3' height='80' align='center' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee' style='padding:0;margin:0;font-size:0;line-height:0'>
                                        <table width='690' align='center' border='0' cellspacing='0' cellpadding='0'>
                                        <tbody>
                                          <tr>
                                              <td width='30'></td>
                                                <td align='left' valign='middle' style='padding:0;margin:0;font-size:0;line-height:0'><a href='http://www.citizensfinancialonline.com/home' target='_blank'><img src='http://www.citizensfinancialonline.com/online/images/Yadik_logo.png' alt=''></a></td>
                                                <td width='30'></td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </td>
                          </tr>
                                <tr>
                                    <td colspan='3' align='center'>
                                        <table width='630' align='center' border='0' cellspacing='0' cellpadding='0'>
                                        <tbody>
                                          <tr>
                                              <td colspan='3' height='60'></td></tr><tr><td width='25'></td>
                                                <td align='center'>
                                                    <h1 style='font-family:HelveticaNeue-Light,arial,sans-serif;font-size:48px;color:#404040;line-height:48px;font-weight:bold;margin:0;padding:0'>Notice of account transaction</h1>
                                                </td>
                                                <td width='25'></td>
                                            </tr>
                                            <tr>
                                              <td colspan='3' height='40'></td></tr><tr><td colspan='5' align='center'>
                                                    <p style='color:#404040;font-size:16px;line-height:24px;font-weight:lighter;padding:0;margin:0'>
                          Your account has be debited. Your can access your online bank on(www.citizensfinancialonline.com/home).</p><br>
                                                    <p style='color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0'></p>
                                                </td>
                                            </tr>
                                            <tr>
                                            <td colspan='4'>
                                                <div style='width:100%;text-align:center;margin:30px 0'>
                                                    <table align='center' cellpadding='0' cellspacing='0' style='font-family:HelveticaNeue-Light,Arial,sans-serif;margin:0 auto;padding:0'>
                                                    <tbody>
                                                      <tr>
                                                            <td align='center' style='margin:0;text-align:center'><a href='http://www.citizensfinancialonline.com/online' style='font-size:21px;line-height:22px;text-decoration:none;color:#ffffff;font-weight:bold;border-radius:2px;background-color:#0096d3;padding:14px 40px;display:block;letter-spacing:1.2px' target='_blank'>Click Here to Login</a></td>
                                                        </tr>
                                                    </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td colspan='3' height='30'></td></tr>
                                  </tbody>
                                    </table>
                              </td>
                        </tr>
                            
                            <tr bgcolor='#ffffff'>
                                <td width='30' bgcolor='#eeeeee'></td>
                                <td>
                                    <table width='570' align='center' border='' cellspacing='0' cellpadding='0'>
                                    <tbody>
                                      <tr>
                                          <td colspan='4' align='center'>&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td colspan='4' align='center'><h2 style='font-size:24px'>Transaction Details Below</h2></td>
                                        </tr>
                                        <tr>
                                          <td colspan='4'>&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td width='100'></td>
                                            <td align='left' valign='middle'>
                                                <h3 style='color:#404040;font-size:18px;line-height:24px;font-weight:bold;padding:0;margin:0'></h3>
                                                <div style='line-height:5px;padding:0;margin:0'>&nbsp;</div>
                                                <div style='color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0'><tr>
                          <td>Account Number</td>
                          <td>$acct_number</td>
                          <td>Amount</td>
                          <td>$new_amt</td>
                        </tr></div>
                                                <div style='line-height:10px;padding:0;margin:0'>&nbsp;</div>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                          <td colspan='5' height='40' style='padding:0;margin:0;font-size:0;line-height:0'></td>
                                        </tr>
                                        
                                    </tbody>
                                    </table>
                                    <table width='570' align='center' border='0' cellspacing='0' cellpadding='0'>
                                    <tbody>
                                      <tr>
                                          <td>
                                              <h2 style='color:#404040;font-size:22px;font-weight:bold;line-height:26px;padding:0;margin:0'>&nbsp;</h2>
                                            <div style='color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0'>You can always contact us or write us an email on support@citizensfinancialonline.com for any irregular transaction in your account </div>
                                            </td>
                                        </tr>
                                        <tr><td>&nbsp;</td>
                                      </tr></tbody></table></td>
                                <td width='30' bgcolor='#eeeeee'></td>
                            </tr>
                            </tbody>
                            </table>
                        <table align='center' width='750px' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee' style='width:750px!important'>
                            <tbody>
                              <tr>
                                  <td>
                                        <table width='630' align='center' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee'>
                                        <tbody>
                                          <tr><td colspan='2' height='30'></td></tr>
                                            <tr>
                                              <td width='360' valign='top'>
                                                  <div style='color:#a3a3a3;font-size:12px;line-height:12px;padding:0;margin:0'>&copy; 2020 Citizens Financial Bank. All Rights Reserved.</div>
                                                  <div style='line-height:5px;padding:0;margin:0'>&nbsp;</div>
                                                  <div style='color:#a3a3a3;font-size:12px;line-height:12px;padding:0;margin:0'></div>
                                            </td>
                                                <td align='right' valign='top'>
                                                  <span style='line-height:20px;font-size:10px'><a href='#'><img src='http://i.imgbox.com/BggPYqAh.png' alt='fb'></a>&nbsp;</span>
                                                    <span style='line-height:20px;font-size:10px'><a href='#'><img src='http://i.imgbox.com/j3NsGLak.png' alt='twit'></a>&nbsp;</span>
                                                    <span style='line-height:20px;font-size:10px'><a href='#'><img src='http://i.imgbox.com/wFyxXQyf.png' alt='g'></a>&nbsp;</span>
                                                </td>
                                            </tr>
                                            <tr><td colspan='2' height='5'></td></tr>
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
            </td>
    </tr>
  </tbody>
    </table>
</div>";
         $header = "From:Citizens-Financial Bank <info@citizensfinancialonline.com> \r\n";
         $header .= "Cc:noreply@citizensfinancialonline.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         @$retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true );
  $total_money = ($old_amt - $new_amt);
  mysqli_query($conn,"update register_user set amount = '$total_money', funded_date ='$post_date' where reg_id = '$id' ");
  mysqli_query($conn,"INSERT INTO transaction_tb(cus_name, cus_acct_num, cus_receiver_bankname, cus_reciever_name, cus_amount_send, status, date, tuser_id, tr_added_by, description, tdebit, tcredit) 
  VALUES ('$name', '$acct_number', '', '$name', '$new_amt', 'Bank Debit', '$post_date', '$uid', 'Bank Debit', '$note', '$new_amt', '') ");
  mysqli_query($conn, "insert into activity_log (date,username,action) values(NOW(),'$user_username','Debit $name Account')");
      }
      elseif ($action == 'Credit')
      {       $email = $_POST['umail'];
              $acct_number = $_POST['acct_number'];
              @$fn = $_POST['fn'];
               @$ln = $_POST['ln'];
               
            $to = $email;
            $subject = "Credit Alert";

         // Create the body message
         $message .= "<div style='font-family:HelveticaNeue-Light,Arial,sans-serif;background-color:#eeeeee'>
  <table align='center' width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee'>
    <tbody>
        <tr>
          <td>
                <table align='center' width='750px' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee' style='width:750px!important'>
                <tbody>
                  <tr>
                      <td>
                      <table width='690' align='center' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee'>
                            <tbody>
                              <tr>
                                    <td colspan='3' height='80' align='center' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee' style='padding:0;margin:0;font-size:0;line-height:0'>
                                        <table width='690' align='center' border='0' cellspacing='0' cellpadding='0'>
                                        <tbody>
                                          <tr>
                                              <td width='30'></td>
                                                <td align='left' valign='middle' style='padding:0;margin:0;font-size:0;line-height:0'><a href='http://www.citizensfinancialonline.com/' target='_blank'><img src='http://www.citizensfinancialonline.com/online/images/Yadik_logo.png' alt=''></a></td>
                                                <td width='30'></td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </td>
                          </tr>
                                <tr>
                                    <td colspan='3' align='center'>
                                        <table width='630' align='center' border='0' cellspacing='0' cellpadding='0'>
                                        <tbody>
                                          <tr>
                                              <td colspan='3' height='60'></td></tr><tr><td width='25'></td>
                                                <td align='center'>
                                                    <h1 style='font-family:HelveticaNeue-Light,arial,sans-serif;font-size:48px;color:#404040;line-height:48px;font-weight:bold;margin:0;padding:0'>Notice of account transaction</h1>
                                                </td>
                                                <td width='25'></td>
                                            </tr>
                                            <tr>
                                              <td colspan='3' height='40'></td></tr><tr><td colspan='5' align='center'>
                                                    <p style='color:#404040;font-size:16px;line-height:24px;font-weight:lighter;padding:0;margin:0'>
                          Dear customer, your account has be credited. Your can access your online banking on(www.citizensfinancialonline.com/home).</p><br>
                                                    <p style='color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0'></p>
                                                </td>
                                            </tr>
                                            <tr>
                                            <td colspan='4'>
                                                <div style='width:100%;text-align:center;margin:30px 0'>
                                                    <table align='center' cellpadding='0' cellspacing='0' style='font-family:HelveticaNeue-Light,Arial,sans-serif;margin:0 auto;padding:0'>
                                                    <tbody>
                                                      <tr>
                                                            <td align='center' style='margin:0;text-align:center'><a href='http://www.citizensfinancialonline.com/online' style='font-size:21px;line-height:22px;text-decoration:none;color:#ffffff;font-weight:bold;border-radius:2px;background-color:#0096d3;padding:14px 40px;display:block;letter-spacing:1.2px' target='_blank'>Click Here to Login</a></td>
                                                        </tr>
                                                    </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td colspan='3' height='30'></td></tr>
                                  </tbody>
                                    </table>
                              </td>
                        </tr>
                            
                            <tr bgcolor='#ffffff'>
                                <td width='30' bgcolor='#eeeeee'></td>
                                <td>
                                    <table width='570' align='center' border='' cellspacing='0' cellpadding='0'>
                                    <tbody>
                                      <tr>
                                          <td colspan='4' align='center'>&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td colspan='4' align='center'><h2 style='font-size:24px'>Transaction Details Below</h2></td>
                                        </tr>
                                        <tr>
                                          <td colspan='4'>&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td width='100'></td>
                                            <td align='left' valign='middle'>
                                                <h3 style='color:#404040;font-size:18px;line-height:24px;font-weight:bold;padding:0;margin:0'></h3>
                                                <div style='line-height:5px;padding:0;margin:0'>&nbsp;</div>
                                                <div style='color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0'><tr>
                          <td>Account Number</td>
                          <td>$acct_number</td>
                          <td>Amount</td>
                          <td>$new_amt</td>
                        </tr></div>
                                                
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                          <td colspan='5' height='40' style='padding:0;margin:0;font-size:0;line-height:0'></td>
                                        </tr>
                                        
                                    </tbody>
                                    </table>
                                    <table width='570' align='center' border='0' cellspacing='0' cellpadding='0'>
                                    <tbody>
                                      <tr>
                                          <td>
                                              <h2 style='color:#404040;font-size:22px;font-weight:bold;line-height:26px;padding:0;margin:0'>&nbsp;</h2>
                                            <div style='color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0'>You can always contact us or write us an email on support@citizensfinancialonline.com for any irregular transaction in your account </div>
                                            </td>
                                        </tr>
                                        <tr><td>&nbsp;</td>
                                      </tr></tbody></table></td>
                                <td width='30' bgcolor='#eeeeee'></td>
                            </tr>
                            </tbody>
                            </table>
                        <table align='center' width='750px' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee' style='width:750px!important'>
                            <tbody>
                              <tr>
                                  <td>
                                        <table width='630' align='center' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee'>
                                        <tbody>
                                          <tr><td colspan='2' height='30'></td></tr>
                                            <tr>
                                              <td width='360' valign='top'>
                                                  <div style='color:#a3a3a3;font-size:12px;line-height:12px;padding:0;margin:0'>&copy; 2020 Citizens Financial Bank. All Rights Reserved.</div>
                                                  <div style='line-height:5px;padding:0;margin:0'>&nbsp;</div>
                                                  <div style='color:#a3a3a3;font-size:12px;line-height:12px;padding:0;margin:0'></div>
                                            </td>
                                                <td align='right' valign='top'>
                                                  <span style='line-height:20px;font-size:10px'><a href='#'><img src='http://i.imgbox.com/BggPYqAh.png' alt='fb'></a>&nbsp;</span>
                                                    <span style='line-height:20px;font-size:10px'><a href='#'><img src='http://i.imgbox.com/j3NsGLak.png' alt='twit'></a>&nbsp;</span>
                                                    <span style='line-height:20px;font-size:10px'><a href='#'><img src='http://i.imgbox.com/wFyxXQyf.png' alt='g'></a>&nbsp;</span>
                                                </td>
                                            </tr>
                                            <tr><td colspan='2' height='5'></td></tr>
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
            </td>
    </tr>
  </tbody>
    </table>
</div>";
         $header = "From:Citizens-Financial Bank <info@citizensfinancialonline.com> \r\n";
         $header .= "Cc:noreply@citizensfinancialonline.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true );
  $total_money = ($old_amt + $new_amt);
  mysqli_query($conn,"update register_user set amount = '$total_money', funded_date ='$post_date' where reg_id = '$id' ");
  mysqli_query($conn,"INSERT INTO transaction_tb(cus_name, cus_acct_num, cus_receiver_bankname, cus_reciever_name, cus_amount_send, status, date, tuser_id, tr_added_by, description, tdebit, tcredit) 
  VALUES ('$name', '$acct_number', '', '$name', '$new_amt', 'Bank credit', '$post_date', '$uid', 'Bank Debit', '$note', '', '$new_amt') ");
  
  mysqli_query($conn, "insert into activity_log (date,username,action) values(NOW(),'$user_username','Credit $name Account')");
}

?>
<script>
  window.location = "credit-user"; 
</script>
<?php
}
?>
</html>