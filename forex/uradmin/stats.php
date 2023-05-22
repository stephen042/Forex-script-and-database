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

    <title>Admin | Users Stats Details</title>

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
                  <li><a href="users"><i class="fa fa-users"></i> Registered User</a>
                  </li>
                  <li><a href="referral"><i class="fa fa-book"></i> Referal</a>
                  <li class=""><a href="user-investement"><i class="fa fa-file"></i> Investment</a>
                  </li>
                  </li>
                  <li class=""><a href="user-trade"><i class="fa fa-credit-card"></i> Trade Result</a>
                  </li>
                  <li class=""><a href="users-earning"><i class="fa fa-user"></i> User Earning</a>
                  </li>
                  <li><a href="users-deposit"><i class="fa fa-magnet"></i> User Deposit</a>
                  </li>
                  <li class=""><a href="users-withdrawal"><i class="fa fa-magnet"></i> Withdrawal</a>
                  </li>
                  <li class=""><a href="yearly-forcast"><i class="fa fa-magnet"></i> Yearly Forecast Report</a>
                  </li>
                  <li class="active"><a href="stats"><i class="fa fa-magnet"></i> Statistics (Charts)</a>
                  </li>
                  <li><a href="users-log"><i class="fa fa-magnet"></i> Logs</a>
                  </li>
                  <li><a href="system-log"><i class="fa fa-magnet"></i> System Activities</a>
                  </li>
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
                <h3><i class="fa fa-credit-card"></i> System Statistics Report </h3>
              </div>

              
            </div>
           
            <br><br>
            <?php 
            
            ?>
           <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <?php include("user_graphReport2.php")?>
                  </div>
                </div>
              </div>
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
    <?php include('java_scriptLinks.php')?>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
  </body>
</html>