<?php

require_once("dbcon.php");
                    $display_message = "";
                    if (isset($_POST['btn_login']))
                  {
                    $username = mysqli_real_escape_string($conn, $_POST['user_email']);
                    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
                    
              $query = mysqli_query($conn, "SELECT * FROM d_admin_user WHERE d_admin_username='$username' AND d_admin_password='$password'");
                    $row = mysqli_fetch_array($query);
                    $num_row = mysqli_num_rows($query);
                    
                    if ($num_row > 0) 
                      { 
                      @session_start(); 
                      //$_SESSION['user_id']=$row['user_id'];
                      $_SESSION['id']= $row['d_admin_id'];
                      $_SESSION['userlevel'] = $row['d_admin_level'];
          
          $display_message = "<font style='text-align:center' color='#009966' style='font-family:Arial, sans-serif' size='+1'><h3 class='mt-0'>Autheticated..</h3></font>
          <p align ='center'><span class='text-black pt-5'>Please wait, system will redirect you in a moment</span></p>
           
          <p align ='center'><font style='text-align:center'><i class='fas fa-spinner fa-spin'></i></font></p>
          <meta http-equiv='refresh' Content='4; url=index' />";
            
          //Insert into log activities
          $query = mysqli_query($conn,"INSERT INTO user_log(username, login_date, online_status, logout_date, user_id) 
          VALUES ('$username', NOW(),'1','', '".$row['d_admin_id']."') ");
          
          $query_up2 = mysqli_query($conn,"INSERT INTO activities_log(act_username, act_action, act_date, act_system_id) 
          VALUES ('$username', 'Login Successful', NOW(), '".$row['d_admin_id']."') ");

          }else
          
          $display_message = "<font style='text-align:center' color='#FF0000' style='font-family:Arial, sans-serif' size='+1'><h4 class='mt-0'>Access denied!</h4></font>
          <p align ='center'><span class='text-black pt-10'>Invalide Login Details</span></p>";
          
    } 
//Add Applicant details to eRegister record

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Direct Trading | Admin Portal </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sweetalert.min.js">
    <link rel="stylesheet" href="css/sweet-alert.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <script src="https://use.fontawesome.com/4b789087e7.js"></script>
    <script src="js/sweet-alert.js"></script>
    <script type="text/javascript" src="js/validation.min.js"></script>
    <script type="text/javascript" src="login_scripts.js"></script>
  </head>

  <body class="login">
    <div>

      <div class="login_wrapper">
        <div class="">
          <section class="login_content">
            <div class="line"></div>
            <div id="error"></div>
            <?php echo $display_message ?>
            <form method="post" name="userlogin-form" id="userlogin-form" >
              <h1>Admin Login Section</h1>
              <div>
                <input type="text" class="form-control" id="user_email" name="user_email" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <button type="submit" name="btn_login" id="btn_login" class="btn btn-block btn-success rounded border-0 z-2">Sign in</button>
            
        
              </div>
            </form>

              <div class="clearfix"></div>
                <br />

                <div>
                  <h1><img src="images/logo.png"/></h1>
                  <p>©2020 All Rights Reserved. Direct Trading System. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
    

  </body>
</html>
