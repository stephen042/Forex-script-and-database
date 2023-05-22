<?php
$finalcode = "";
if(isset($_GET['id']))
          
    {
      
    include("dbcon.php");
    include('session.php');
    $id = $_GET['id'];
   
              $query = mysqli_query($conn,"select * from product_details where pid = '$id'");
              $row = mysqli_fetch_array($query);
              $receiver_user_image = $row['receiver_image'];
              $sender_user_image = $row['sender_image'];
              $rec_customer_image = '../track/profile_image/'.$receiver_user_image;
              $sender_customer_image = '../track/profile_image/'.$sender_user_image;
              $id = $row['pid'];
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

    <title>Citizens Financial Bank | Shippment Details Update</title>

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
                <h3><i class="fa fa-shopping-cart"></i>  Update Record <a href="shippment-details"><button type="button" class="btn btn-round btn-primary"><i class="fa fa-arrow-left"></i> Back</button></a></h3>
              </div>

              
            </div>

            
            <?php //include("user_graphReport.php")?>
            
            <br><br>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><small>Post/Update product details for shipment Status</small></h2>
                    
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
                    Sender Name
                    <input type="text" name="sender_name" placeholder="Sender Name" value="<?php echo $row['sender_name']; ?>" class="form-control">
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Sender Phone Number
                    <input type="text" name="sender_phone" value="<?php echo $row['sender_phone']; ?>" placeholder="Sender Phone Number" class="form-control">
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Sender Email
                    <input type="text" name="sender_email" value="<?php echo $row['sender_email']; ?>" placeholder="Sender Email" class="form-control">
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Sender Company Name
                    <input type="text" name="sender_company" value="<?php echo $row['sender_companyname']; ?>" placeholder="Sender Company Name" class="form-control">
                  </div>


                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Sender Address
                    <textarea name="sender_address" placeholder="Receiver Address" class="form-control"><?php echo $row['sender_address']; ?></textarea> 
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Receiver Name
                    <input type="text" name="rec_name" value="<?php echo $row['receiver_name']; ?>" placeholder="Receiver Name" class="form-control">
                  </div>


                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Receiver Phone Number
                    <input type="text" name="rec_phone" value="<?php echo $row['receiver_phone']; ?>" placeholder="Receiver Phone Number" class="form-control">
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Receiver Email
                    <input type="text" name="rec_email" value="<?php echo $row['receiver_email']; ?>" placeholder="Receiver Email" class="form-control">
                  </div>


                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Receiver Company Name
                    <input type="text" name="rec_company" value="<?php echo $row['receiver_companename']; ?>" placeholder="Receiver Company Name" class="form-control">
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                     Receiver Address
                    <textarea name="rec_address" placeholder="Receiver Address" class="form-control"><?php echo $row['receiver_address']; ?></textarea> 
                  </div>


                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Booked Date
                    <input type="text" name="booked_date" value="<?php echo $row['booked_date']; ?>" placeholder="Booked Date" class="form-control">
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Shipment Date
                    <input type="text" name="shipment_date" value="<?php echo $row['shipp_date']; ?>" placeholder="Shipment Date" class="form-control">
                  </div>


                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Delivery Date
                    <input type="text" name="delivery_date" value="<?php echo $row['delivery_date']; ?>" placeholder="Delivery Date" class="form-control">
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Shipment Type
                    <input type="text" name="shipp_type" value="<?php echo $row['shipment_type']; ?>" placeholder="Shipment Type" class="form-control">
                  </div>


                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Quantity
                    <input type="text" name="unit" value="<?php echo $row['quantity']; ?>" placeholder="Unit" class="form-control">
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Content Description
                    <input type="text" name="description" value="<?php echo $row['description']; ?>" placeholder="Content Description" class="form-control">
                  </div>


                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Weight
                    <input type="text" name="weight" value="<?php echo $row['weight']; ?>" placeholder="Weight" class="form-control">
                  </div>
                
                   <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    
                    <input type="hidden" name="weight" placeholder="Weight" class="form-control">
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                    <font style="font-family:Georgia, 'Times New Roman', Times, serif" color="#0066CC" size="+2"> Product Status</font>
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Date
                    <input type="text" name="new_date" value="<?php echo $row['new_date']; ?>" placeholder="Date" class="form-control">
                  </div>


                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Time
                    <input type="text" name="new_time" value="<?php echo $row['new_time']; ?>" placeholder="Time" class="form-control">
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Current Location
                    <input type="text" name="new_location" value="<?php echo $row['new_location']; ?>" placeholder="Current Location" class="form-control">
                  </div>


                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Goods New Status
                    <input type="text" name="new_status" value="<?php echo $row['new_status']; ?>" placeholder="Goods Status" class="form-control">
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    <strong>Tracking Number</strong>
                    <input type="text" name="track_unmber" value="<?php echo $row['track_number']; ?>" placeholder="Tracking Number" class="form-control">
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                     <strong>Goods From </strong>
                    <input type="text" name="goods_from" value="<?php echo $row['goods_from']; ?>" placeholder="Goods From" class="form-control">
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    <strong>Goods To</strong>
                    <input type="text" name="goods_to" value="<?php echo $row['goods_to']; ?>" placeholder="Goods To" class="form-control">
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    <input name="tcode" class="input focused" id="focusedInput" value="<?php echo $row['tcode']; ?>" type="hidden" placeholder = "Transaction Code" >
                  </div>
                  <br>
                  <div class="">
                    <br>
                  </div>
            
                </div>
             
              <br><br><div align="Center">
                <button type="submit" id="update" name="update" class="btn btn-round btn-primary align-center"><i class="fa fa-paper-plane"></i> Save Update</button>

                <button type="submit" id="post_update" name="post_update" class="btn btn-round btn-success align-center"><i class="fa fa-paper-plane"></i> Update History</button>
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
        $_SESSION['tcode'] = $code;
        if (isset($_POST['update'])) {
        
         $sender_name = $_POST['sender_name'];
         $sender_phone = $_POST['sender_phone'];
               $sender_email = $_POST['sender_email'];
               $sender_address = $_POST['sender_address'];
               $sender_company = $_POST['sender_company'];
         $rec_name = $_POST['rec_name'];
         $rec_phone = $_POST['rec_phone'];
               $rec_email = $_POST['rec_email'];
               $rec_address = $_POST['rec_address'];
               $rec_company = $_POST['rec_company'];
         $booked_date = $_POST['booked_date'];
         $shipment_date = $_POST['shipment_date'];
               $delivery_date = $_POST['delivery_date'];
               $shipment_type = $_POST['shipp_type'];
               $unit = $_POST['unit'];
         $description = $_POST['description'];
         $weight = $_POST['weight'];
         $new_date = $_POST['new_date'];
         $new_time = $_POST['new_time'];
         $new_location = $_POST['new_location'];
         $goods_status = $_POST['new_status'];
         $track_number = $_POST['track_unmber'];
         $goods_from = $_POST['goods_from'];
         $goods_to = $_POST['goods_to'];
         $smart_id = $_POST['code'];
         
        
          $query = mysqli_query($conn, "UPDATE product_details SET sender_name = '$sender_name', sender_phone = '$sender_phone', sender_email ='$sender_email',
         sender_address ='$sender_address', sender_companyname ='$sender_company', receiver_name ='$rec_name', receiver_phone ='$rec_phone', 
         receiver_email ='$rec_email', receiver_companename ='$rec_company', receiver_address ='$rec_address', booked_date ='$booked_date', shipp_date ='$shipment_date', 
         delivery_date ='$delivery_date', shipment_type ='$shipment_type', quantity ='$unit', description ='$description', weight ='$weight', new_date ='$new_date', 
         new_time ='$new_time', new_location ='$new_location', new_status ='$goods_status', track_number ='$track_number', goods_from ='$goods_from', goods_to ='$goods_to' WHERE pid = '$id'" ); 
        
      
         // Create the body message
         
     ?>
<script>
window.location = "shippment-details.php";
</script>
<?php
}



        if (isset($_POST['post_update'])) {
        
         $sender_name = $_POST['sender_name'];
         $sender_phone = $_POST['sender_phone'];
               $sender_email = $_POST['sender_email'];
               $sender_address = $_POST['sender_address'];
               $sender_company = $_POST['sender_company'];
         $rec_name = $_POST['rec_name'];
         $rec_phone = $_POST['rec_phone'];
               $rec_email = $_POST['rec_email'];
               $rec_address = $_POST['rec_address'];
               $rec_company = $_POST['rec_company'];
         $booked_date = $_POST['booked_date'];
         $shipment_date = $_POST['shipment_date'];
               $delivery_date = $_POST['delivery_date'];
               $shipment_type = $_POST['shipp_type'];
               $unit = $_POST['unit'];
         $description = $_POST['description'];
         $weight = $_POST['weight'];
         $new_date = $_POST['new_date'];
         $new_time = $_POST['new_time'];
         $new_location = $_POST['new_location'];
         $goods_status = $_POST['new_status'];
         $track_number = $_POST['track_unmber'];
         $goods_from = $_POST['goods_from'];
         $goods_to = $_POST['goods_to'];
         $smart_id = $_POST['code'];
        // Insert into product update
      $query_update = mysqli_query($conn, "INSERT INTO product_update(pd_id, pud_track_uid, pud_date, pud_time, pud_location, pid_status, pud_nowdate) 
      VALUES (NULL, '$track_number', '$new_date', '$new_time','$new_location', '$goods_status',NOW())"); 
        
     ?>
<script>
window.location = "shippment-details.php";
</script>
<?php
}
    
      ?>
  // 
</html>