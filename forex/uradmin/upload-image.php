<?php
include("dbcon.php");
include('session.php');
$finalcode = $_SESSION['finalcode'];

                  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Citizens Financial Bank | Shippment Details</title>

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
    <link rel="stylesheet" href="css/sweetalert.min.js">
    <link rel="stylesheet" href="css/sweet-alert.css">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index" class="site_title"><img src="images/new_logo.png"></a>
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

                  <li><a href="myservice"><i class="fa fa-shopping-cart"></i> Add Admin</a>
                  <li><a href="myservice"><i class="fa fa-shopping-cart"></i> User Log</a>
                  <li><a href="myservice"><i class="fa fa-shopping-cart"></i> Activities Log</a>
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
                <h3><i class="fa fa-shopping-cart"></i>  Registered Shippment <a href="shippment-details"><button type="button" class="btn btn-round btn-primary"><i class="fa fa-arrow-left"></i> Back</button></a></h3>
              </div>

              
            </div>


            <?php //include("user_graphReport.php")?>
            
            <br><br>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><small>Upload User Profile Pictures</small></h2>
                    
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
                    Select Image
                    <input type="file" name="image" placeholder="Sender Name" class="form-control" required>
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Select User
                    <select name="user_type" class="form-control" required>
                    <option></option>
                    <option value="Sender"> Sender Profile</option>
                    <option value="receiver"> Receiver's Profile </option>
                    </select>
                  </div>
                  <input name="code" class="input focused" id="focusedInput" type="hidden" value="<?php echo $finalcode?>" placeholder = "To Location" required >
                                        
                  
                  <br>
                  <div class="">
                    <br>
                  </div>
            
                </div>
             
              <br><br><div align="Center">
                <button type="submit" id="upload_btn" name="upload_btn" class="btn btn-round btn-primary align-center"><i class="fa fa-paper-plane"></i> Upload</button>
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
    <script src="js/sweet-alert.js"></script>
  </body>

  <?php


include('dbcon.php');
                        $code = $_SESSION['tcode'];
                        if (isset($_POST["upload_btn"])) {
                        $document_type = trim($_POST['user_type']);
                        $smart_code = trim($_POST['code']);
                        // Get Image Dimension
                        $fileinfo = @getimagesize($_FILES["image"]["tmp_name"]);
                        $width = $fileinfo[0];
                        $height = $fileinfo[1];
                        $img = $_FILES['image']['name'];
                        $allowed_image_extension = array(
                          "jpg","jpeg","png", "PNG","JPG"
                        );
                        
                        // Get image file extension
                        // Get image file extension
                        $file_extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
                        
                        // Validate file input to check if is not empty
                        if (! file_exists($_FILES["image"]["tmp_name"])) {
                          $response = array(
                            "type" => "error",
                            "message" => "Choose profile image to upload."
                          );
                        }    // Validate file input to check if is with valid extension
                        else if (! in_array($file_extension, $allowed_image_extension)) {
                          $response = array(
                            "type" => "error",
                            "message" => "Upload valid profile image. png and jpeg are allowed."
                          );
                          echo @$result;
                        }    // Validate image file size
                        else if (($_FILES["image"]["size"] > 5000000)) {
                          $response = array(
                            "type" => "error",
                            "message" => "Document upload size exceeds 4MB"
                          );
                        }    // Validate image file dimension
                        /*else if ($width > "300" || $height > "200") {
                          $response = array(
                            "type" => "error",
                            "message" => "Image dimension should be within 300X200"
                          );
                        }*/ 
                        else {
                          $target = "../track/profile_image/" . basename($_FILES["image"]["name"]);
                          if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {
                            
                            if($document_type == 'Sender'){
                            
                            mysqli_query($conn,"UPDATE product_details SET sender_image ='$img'  WHERE tcode ='$smart_code'");
                            
                            echo '<script>
                            setTimeout(function() {
                              swal({
                                title: "Sender Profile Uploaded",
                                text: "Upload other profile to complete this process",
                                type: "success"
                              }, function() {
                                window.location.href = "upload-image.php";
                              });
                            }, 1000);
                          </script>';
                          }
                          else
                          if($document_type == 'receiver'){
                            
                            mysqli_query($conn,"UPDATE product_details SET receiver_image ='$img'  WHERE tcode ='$smart_code'");
                            
                            echo '<script>
                            setTimeout(function() {
                              swal({
                                title: "Receiver Profile Uploaded",
                                text: "Upload other document to aviod delay of your accout approval",
                                type: "success"
                              }, function() {
                                window.location.href = "upload-image.php";
                              });
                            }, 1000);
                          </script>';
                          }
                                        
                          } else {
                            $response = array(
                              "type" => "error",
                              "message" => "Problem in uploading image files."
                            );
                          }
                          $sql = "SELECT * FROM product_details where tcode  ='$smart_code' AND receiver_image !='' AND sender_image !='' ";
                            $resultset = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($resultset);
                            if(mysqli_num_rows($resultset) > 0){
                            echo '<script>
                            setTimeout(function() {
                              swal({
                                title: "Congratulations",
                                text: "All profile has be uploaded successfully.",
                                type: "success"
                              }, function() {
                                window.location.href = "index.php";
                              });
                            }, 1000);
                          </script>';
                            }
                        }
                    
                      }
                      $code = $_SESSION['code'];                  
    
      ?>
                  <?php if(!empty($response)) { ?>
                                <div class="response <?php echo $response["type"]; ?>"><?php echo $response["message"]; ?></div>
                                <?php }?>

?>
  // 
</html>