<?php
include("dbcon.php");
include('session.php');
$finalcode = "";

                  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Citizens Financial Bank | Register Admin Details</title>

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

                  <li><a href="process"><i class="fa fa-shopping-cart"></i> Add New Shippment</a>
                  <li><a href="shippment-details"><i class="fa fa-shopping-cart"></i> View Shippment</a>

                  <li><a href="admin-user"><i class="fa fa-shopping-cart"></i> Add Admin</a>
                  <li><a href="user-log"><i class="fa fa-shopping-cart"></i> User Log</a>
                  <li><a href="system-log"><i class="fa fa-shopping-cart"></i> Activities Log</a>
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
                <h3><i class="fa fa-user"></i>  Registered Admin <a href="admin-user"><button type="button" class="btn btn-round btn-primary"><i class="fa fa-arrow-left"></i> Back</button></a></h3>
              </div>

              
            </div>


            <?php //include("user_graphReport.php")?>
            
            <br><br>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><small>Enter details to register new admin</small></h2>
                    
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
                    First Name
                    <input type="text" name="firstname" placeholder="First Name" class="form-control">
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Last Name
                    <input type="text" name="lastname" placeholder="Last Name" class="form-control">
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Username
                    <input type="text" name="username" placeholder="User Name" class="form-control">
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Password
                    <input type="password" name="password" placeholder="Password" class="form-control">
                  </div>


                  
                  <br>
                  <div class="">
                    <br>
                  </div>
            
                </div>
             
              <br><br><div align="Center">
                <button type="submit" id="save" name="save" class="btn btn-round btn-primary align-center"><i class="fa fa-paper-plane"></i> Submit</button>
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
$code = '';
                include('dbcon.php');
        
        if (isset($_POST['save'])){
          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $username = $_POST['username'];
          $password = $_POST['password'];


$query = mysqli_query($conn, "select * from users where username = '$username' and password = '$password' and firstname = '$firstname' and password = '$password' ");
$count = mysqli_num_rows($query);

if ($count > 0){ ?>
<script>
alert('User Details Already Exist');
</script>
<?php
}else{
mysqli_query($conn, "insert into users (username,password,firstname,lastname,userlevel) values('$username','$password','$firstname','$lastname', '1')");

mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$user_username','Add User $username')");
?>
<script>
window.location = "admin-user.php";
</script>
<?php
}
}

?>
  // 
</html>