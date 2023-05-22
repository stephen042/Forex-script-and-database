<?php
include("dbcon.php");
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Citizens Financial Bank | User Transaction Details</title>

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
                  <li class=""><a href="account-holder"><i class="fa fa-user"></i> Account Holder</a>
                  </li>
                  <li><a href="pending-account"><i class="fa fa-book"></i> Pending Account</a>
                <li class="active"><a href="user-transaction"><i class="fa fa-file"></i> Transaction</a>
                  </li>
                  </li>
                  <li><a href="credit-user"><i class="fa fa-credit-card"></i> Credit/Debit Account</a>
                  </li>
                  <li><a href="admin-user"><i class="fa fa-user"></i> Add Admin</a>
                  </li>
                  <li class=""><a href="user-log"><i class="fa fa-magnet"></i> User Log</a>
                  </li>
                  <li class=""><a href="system-log"><i class="fa fa-magnet"></i> Activities Log</a>
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
                <h3><i class="fa fa-user"></i>  User Transaction </h3>
              </div>

              
            </div>


            <?php //include("user_graphReport.php")?>
            
            <br><br>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><small>User action carried out in the system.</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
          
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                        <th>Name</th>
                          <th>Acct. ID</th>
                          <th>Reciever Name</th>
                          <th>Reciever Account ID</th>
                          <th>Reciever Bank Name</th>
                          <th>Amount Send</th>
                          <th>Amount Bal.</th>
                          <th>Country</th>
                          <th>Bank Code</th>
                          <th>Sender Bank Name</th>
                          <th>Status</th>
                          <th>Date</th>
                        
                       </tr>
                    </thead>
                    <tbody>
                          <?php
                          $user_query = mysqli_query($conn,"select * from transaction_tb order by t_id ");
                          while($row = mysqli_fetch_array($user_query)){
                          $id = $row['t_id'];
                          ?>
                  
                        <tr>
                      
                        <td><?php echo $row['cus_name']; ?></td>
                        <td><?php echo $row['cus_acct_num']; ?></td>
                        <td><?php echo $row['cus_reciever_name']; ?></td>
                        <td><?php echo $row['cust_receiver_acctno']; ?></td>
                        <td><?php echo $row['cus_receiver_bankname']; ?></td>
                        <td><?php echo $row['cus_amount_send']; ?></td>
                        <td><?php echo $row['cus_bal']; ?></td>
                        <td><?php echo $row['rcountry']; ?></td>
                        <td><?php echo $row['rbank_code']; ?></td>
                        <td><?php echo $row['sender_bank_name']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        
                        </tr>
                        
                        <?php } ?>
                        
                      </tbody>
                    </table>
          
          
                  </div>
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
</html>