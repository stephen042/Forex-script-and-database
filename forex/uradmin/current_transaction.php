              <?php
            include('conn.php');
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
                    <h2>Current Withdrawal <small> Transaction Details</small></h2>
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
                          <th>Full Name</th>
                          <th>Amount </th>
                          <th>Status</th>
                          <th>Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                  $query_st = mysqli_query($conn," SELECT * FROM  user_tb, withraw_tb where user_tb.user_id = withraw_tb.w_uid order by w_date DESC LIMIT 5");
                  $counter = 0;
                  while(@$row = mysqli_fetch_array($query_st)){
                    
                    $id = $row['w_id'];
                    $counter++;
                    
                      ?>
                      <tr class="odd gradeX">
                        <td><?php echo $counter++; ?></td>
                        <td><?php echo @$row['fname']; ?></td>
                        <td><?php echo @$row['w_amt']; ?></td>
                        <td ><?php echo @$row['w_status']; ?></td>
                        <td ><?php echo @$row['w_date']; ?></td>
                                                
                      </tr>
                      <?php } ?>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>