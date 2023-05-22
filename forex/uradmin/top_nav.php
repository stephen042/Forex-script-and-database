<?php
include("dbcon.php");
include('session.php');
?>
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="" width="100px" height="50px"> <?php echo $user_mail;?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="password-update"> Update Password</a></li>
                    <li>
                      <a href="#">
                        <span class="badge bg-green pull-right">50%</span>
                        <span>Service Progress</span>
                      </a>
                    </li>
                    <li><a href="#">Help</a></li>
                    <li><a href="logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <?php include("inbox_notification.php");?>
              </ul>
            </nav>
          </div>
        </div>