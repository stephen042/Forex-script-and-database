<?php 
include("dbcon.php");
include('session.php');
                          $success_message = '';
                          if(isset($_POST['btn_bonus']))
                    {
                    $a = $_POST['receiver_id'];
                    $bonus_amt = $_POST['bonus_amt'];
                    // get the previous balance
                  $query_st = mysqli_query($conn," SELECT * FROM  user_tb where uemail = '$a'");
                  $counter = 0;
                  while(@$row = mysqli_fetch_array($query_st))
                    {
                    $id = $row['user_id'];
                    $amt_balance = $row['u_withraw_pending'];
                    $ref_balance = $row['u_ref_amt'];
                    }
                  $new_balance = ($amt_balance + $bonus_amt);
                  $new_balance_ref = ($ref_balance + $bonus_amt);
              // update user record
    $query_bonus = mysqli_query($conn, "UPDATE user_tb SET u_ref_amt ='$new_balance_ref', u_withraw_pending ='$new_balance' WHERE uemail = '$a'");
   // keep record of action
     $query = mysqli_query($conn,"INSERT INTO activities_log (act_id, act_username, act_action, act_date, act_system_id) 
   
   VALUES (NULL, '$a', 'Referral Bonus Approved', NOW(), '$session_id')");
    // add record to earning table
     $query = mysqli_query($conn,"INSERT INTO earning_tb(ea_uid, ea_email, ea_amt, ea_status, ea_date, ea_type) 
     VALUES ('$id', ".$row['uemail'].", '$bonus_amt', 'Confirm', NOW(), 'Referral Commission')");
      if($query_bonus)
      {
      $success_message = "<div class='alert alert-success'>
      <button type='button' class='close' data-dismiss='alert'>&times;</button>
      <h4>Bonus Added</h4>
      The transaction was successfully done.</div>
      <p align ='center'><font style='text-align:center'></font></p>
      <meta http-equiv='refresh' Content='4; url=referral' />
      ";
        
      }else
      {
      $success_message = "<div class='alert alert-warning'>
      <button type='button' class='close' data-dismiss='alert'>&times;</button>
      <h4>Error occured!</h4>
      The transaction was not successfully done.</div>";
  
      }
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

    <title>Admin | Add Referral Bonus</title>

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
                  <li class="active"><a href="referral"><i class="fa fa-book"></i> Referal</a>
                  <li class=""><a href="user-investement"><i class="fa fa-file"></i> Investment</a>
                  </li>
                  </li>
                  <li class=""><a href="user-trade"><i class="fa fa-credit-card"></i> Trade Result</a>
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
                <h3><i class="fa fa-user"></i>  Add Profit <a href="user-investement"><button type="button" class="btn btn-round btn-primary"><i class="fa fa-arrow-left"></i> Back</button></a></h3>
              </div>

              
            </div>


            <?php //include("user_graphReport.php")?>
            
            <br><br>
            <?php 
            $query = mysqli_query($conn, "SELECT * from referral_tb where '$id' = sha1(ref_id)");
            $row = mysqli_fetch_array($query);
            $num_row = mysqli_num_rows($query);
                  
            if ($num_row > 0) 
              {
          ?>
          <?php echo $success_message;?>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><small>Enter details to add referral bonus to user account</small></h2>
                    <?php 
            $query_st = mysqli_query($conn," SELECT * from referral_tb where '$id' = sha1(ref_id) ");
                  $counter = 0;
                  while(@$row = mysqli_fetch_array($query_st))
                  {
                    
                    $id = $row['ref_id'];
                    $result_date = $row['ref_date'];
                    $state = $row['ref_status'];
                    $counter++;
                  
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
                    Referral Email ID
                    <input class="form-control" id="focusedInput" type="text" disabled value="<?php echo @$row['ref_user_email']; ?>">
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Referred Person Email ID
                    <input class="form-control" id="focusedInput" type="text" name="" disabled value="<?php echo @$row['ref_my_username']; ?>">
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Bonus Amount
                    <input class="form-control" id="focusedInput" type="text" name="bonus_amt" placeholder ="Enter Bonus Amount Due" required>
                    
                  </div>

                  <input class="input-xlarge focused" id="focusedInput" type="hidden" name="receiver_id" value="<?php echo @$row['ref_user_email']; ?>">

                  
                 
                  <br>
                  <div class="">
                    <br>
                  </div>
            
                </div>
             
              <br><br><div align="Center">
                <button type="submit" id="btn_bonus" name="btn_bonus" class="btn btn-round btn-primary align-center"><i class="fa fa-paper-plane"></i> Add Bonus</button>

                <a href="referral"><button name="btn_reject" class="btn btn-round btn-warning">Rejected</button></a>
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