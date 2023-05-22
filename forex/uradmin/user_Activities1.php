<?php
include("dbcon.php");
include('session.php');
?>
          <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-users"></i></div>
                  <div class="count"><?php 
                //$query_student = mysqli_query($conn,"select * from users");
                //$count_admin = mysqli_num_rows($query_student); ?>
                12
                  </div>
                  <h3>Register User</h3>
                  <!--<p>Lorem ipsum psdea itgum rixt.</p> -->
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-user"></i></div>
                  <div class="count"><?php 
                //$query_student = mysqli_query($conn,"select * from users");
                //$count_admin = mysqli_num_rows($query_student);
                ?>20
                  </div>
                  <h3>Deposit</h3>
                  
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-tag"></i></div>
                  <div class="count"><?php 
                //$query_student = mysqli_query($conn,"select * from register_user");
                //$count_student = mysqli_num_rows($query_student);
                ?>
                  <?php //echo $count_student ?>10
                </div>
                  <h3>Withdrawal</h3>
                  
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-tag"></i></div>
                  <div class="count"><?php 
                //$query_acct = mysqli_query($conn,"select * from register_user where acct_status ='Activated'");
                //$count_act = mysqli_num_rows($query_acct);
                ?>
                  <?php //echo $count_act ?>9</div>
                  <h3>Earning</h3>
                 
                </div>
              </div>
            </div>
