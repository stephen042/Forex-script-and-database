<?php

include("dbcon.php");
include('session.php'); 
$success_message ="";
                    if(isset($_GET['id']))
                          {
                    $id = $_GET['id'];
                  // update into db
                          
                  $query25 = mysqli_query($conn, "UPDATE user_tb SET u_status = 'Blocked' WHERE '$id' = sha1(user_id)");
                  if($query25)
                    {
                $query = mysqli_query($conn,"INSERT INTO activities_log (act_id, act_username, act_action, act_date, act_system_id) 
   
   VALUES (NULL, '$user_username', 'Block User Account', NOW(), '$session_id')");
                  $success_message = "<div class='alert alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <h4>Successful</h4>
                    User account has be blocked successfully.</div>
                    <p align ='center'><font style='text-align:center'></font></p>
                    
                    ";
                    }
                    else
                    {
                    $success_message = "<div class='alert alert-warning'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <h4>Error occured!</h4>
                    The operation was not successful, try again.</div>";
                    }
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

    <title>Admin | Users Log Details</title>

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
                  <li class=""><a href="stats"><i class="fa fa-magnet"></i> Statistics (Charts)</a>
                  </li>
                  <li class="active"><a href="users-log"><i class="fa fa-magnet"></i> Logs</a>
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
                <h3><i class="fa fa-users"></i> System Log Activities </h3>
              </div>

              
            </div>
           <?php 
            $query = mysqli_query($conn, "SELECT * FROM user_log");
            $row = mysqli_fetch_array($query);
            $num_row = mysqli_num_rows($query);
                  
            if ($num_row > 0) 
              {
            ?>
            <br><br>
            <?php echo $success_message;
          ?>
           <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                          
                           <th class="column-title">#</th>
                           <th class="column-title">Full Name</th>
                            <th class="column-title">Username</th>
                            <th class="column-title">Login Date</th>
                            <th class="column-title">Status</th>
                            <th class="column-title">Last Visited</th>
                            <th class="column-title"></th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                  $query_st = mysqli_query($conn," SELECT * FROM user_log, user_tb where user_tb.user_id = user_log.user_id ");
                  $counter = 0;
                  while(@$row = mysqli_fetch_array($query_st)){
                    
                    $id = $row['user_log_id'];
                    $status = $row['online_status'];
                    $uid = $row['user_id'];
                    if($status == 1)
                    {
                      $online = "<font color='#00CC00'> Online</font>";
                    }else
                    if($status == 0)
                    {
                      $online = "<font color='#FF3300'> Offline</font>";
                    }
                    $counter++;
                    
                      ?>
                          <tr class="even pointer">
                            
                          <td><?php echo @$counter; ?></td>
                          <td><?php echo @$row['fname']; ?></td>
                          <td><?php echo @$row['username']; ?></td>
                          <td><?php echo @$row['login_date']; ?></td>
                          <td><?php echo $online; ?></td>
                          <td ><?php echo @$row['logout_date']; ?></td>
                            
                            <td>
                            <a href="users-log?id=<?php echo sha1($uid); ?>" class="btn btn-round btn-xs btn-danger tooltip-left" type="button"><i class="fa fa-time"></i> Logout</a>
                            </td>
                            
                          </tr>
                          <?php 
                        }
                          }
                    else
                        {
                    echo'<div class="text-center p2"><p>No current log at the moment</p></div>
                </div>';
                        }
                        '<br>';
                      ?>    
                        </tbody>
                      </table>
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