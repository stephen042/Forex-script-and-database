<?php
            include('conn.php');
            // get total number of user deposit_tb 
                 $query_ref = mysqli_query ($conn,"SELECT COUNT(d_id) AS total_deposit FROM deposit_tb ");
                while($row=mysqli_fetch_assoc($query_ref)){
                $num_ref = $row['total_deposit'];
                 @$formatted_ref =  number_format($num_ref);
                
                }
                  if($formatted_ref == '')
                  {
                    $formatted_ref = 0;
                  }else
                  $formatted_ref = $formatted_ref;
                  
                  
                  // get total number of user deposit_tb 
                 $query_ref = mysqli_query ($conn,"SELECT COUNT(w_id) AS total_withdr FROM withraw_tb ");
                while($row=mysqli_fetch_assoc($query_ref)){
                $num_drw = $row['total_withdr'];
                 @$formatted_drw =  number_format($num_drw);
                
                }
                  if($formatted_drw == '')
                  {
                    $formatted_drw = 0;
                  }else
                  $formatted_drw = $formatted_drw;
            ?>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Current Deposit <small>Transaction</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Amount</th>
                          <th>Status</th>
                          <th>Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                  $query_st2 = mysqli_query($conn," SELECT * FROM  user_tb, deposit_tb where user_tb.user_id = deposit_tb.d_uid order by d_date DESC LIMIT 5");
                  $counter = 0;
                  while(@$row = mysqli_fetch_array($query_st2)){
                    
                    $id = $row['d_id'];
                    $counter++;
                    
                      ?>
                        <tr class="odd gradeX">
                        <td><?php echo $counter++; ?></td>
                        <td><?php echo @$row['fname']; ?></td>
                        <td><?php echo @$row['d_amt']; ?></td>
                        <td ><?php echo @$row['d_status']; ?></td>
                        <td ><?php echo @$row['d_date']; ?></td>
                         
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>