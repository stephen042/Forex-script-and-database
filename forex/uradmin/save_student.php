<?php
        include('dbcon.php');
				if (isset($_POST['save'])) 
        {
			   $dob = $_POST['dob'];
			   $sex = $_POST['sex'];
         $fn = $_POST['fn'];
         $ln = $_POST['ln'];
         $country = $_POST['country'];
			   $city = $_POST['city'];
			   $state = $_POST['state'];
         $phone = $_POST['phone'];
         $email = $_POST['email'];
         $bank_name = $_POST['bank_name'];
			   $acct_number = $_POST['acct_number'];
			   $acctype = $_POST['acctype'];
         $currency_type = $_POST['currency_type'];
         $pin = $_POST['pin'];
         $cot = $_POST['cot'];
			   $tax_code = $_POST['tax_code'];
			   $imf_code = $_POST['imf_code'];
			   $image = $_POST['image'];
			   $pass = $_POST['pass'];
			   $pass2 = md5($_POST['pass']);
			   $address = $_POST['address'];
			   $image = $_FILES['image']['name'];
			   $tmp_image = $_FILES['image']['tmp_name'];
			   move_uploaded_file($tmp_image,"images/$image");

         $query = mysqli_query($conn, "INSERT INTO register_user(reg_id, acct_number, u_username, password, password_2, fname, lname, phone_num, amount, acct_pin, pic_url, acct_status, acct_state, reg_date, dob, email, sex, city, state, zipcode, datapass, acct_type, currency_type, added_by, country, funded_date, bank_name, rout_number, acct_nature, imf_code, imf_code2, tax_code) 
        VALUES ( NULL, '$acct_number', '', '$pass2', '$pass', '$fn', '$ln', '$phone', '', '$pin', 'images/NO-IMAGE-AVAILABLE.jpg', 'Pending', '', NOW(), '$dob', '$email', '$sex', '$city', '$state', '', '$address', '$acctype', '$currency_type', '', '$country', '', '$bank_name', '', '', '$cot', '$imf_code', '$tax_code')"); 

         if($query)
         {
          $to = "$email";
          $subject = "Account Opening";
         
         // Create the body message
         $message .= "<div style='font-family:HelveticaNeue-Light,Arial,sans-serif;background-color:#eeeeee'>
  <table align='center' width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee'>
    <tbody>
        <tr>
          <td>
                <table align='center' width='750px' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee' style='width:750px!important'>
                <tbody>
                  <tr>
                      <td>
                      <table width='690' align='center' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee'>
                            <tbody>
                              <tr>
                                    <td colspan='3' height='80' align='center' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee' style='padding:0;margin:0;font-size:0;line-height:0'>
                                        <table width='690' align='center' border='0' cellspacing='0' cellpadding='0'>
                                        <tbody>
                                          <tr>
                                              <td width='30'></td>
                                                <td align='left' valign='middle' style='padding:0;margin:0;font-size:0;line-height:0'><a href='http://www.citizensfinancialonline.com/' target='_blank'><img src='http://www.citizensfinancialonline.com/online/images/Yadik_logo1.png' alt=''></a></td>
                                                <td width='30'></td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </td>
                          </tr>
                                <tr>
                                    <td colspan='3' align='center'>
                                        <table width='630' align='center' border='0' cellspacing='0' cellpadding='0'>
                                        <tbody>
                                          <tr>
                                              <td colspan='3' height='60'></td></tr><tr><td width='25'></td>
                                                <td align='center'>
                                                    <h1 style='font-family:HelveticaNeue-Light,arial,sans-serif;font-size:48px;color:#404040;line-height:48px;font-weight:bold;margin:0;padding:0'>Welcome to Citizens Financial Online</h1>
                                                </td>
                                                <td width='25'></td>
                                            </tr>
                                            <tr>
                                              <td colspan='3' height='40'></td></tr><tr><td colspan='5' align='center'>
                                                    <p style='color:#404040;font-size:16px;line-height:24px;font-weight:lighter;padding:0;margin:0'>
                          Hello $fn.' '.$ln, Your account has be created. Your can access your online bank on(www.citizensfinancialonline.com).</p><br>
                                                    <p style='color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0'></p>
                                                </td>
                                            </tr>
                                            <tr>
                                            <td colspan='4'>
                                                <div style='width:100%;text-align:center;margin:30px 0'>
                                                    <table align='center' cellpadding='0' cellspacing='0' style='font-family:HelveticaNeue-Light,Arial,sans-serif;margin:0 auto;padding:0'>
                                                    <tbody>
                                                      <tr>
                                                            <td align='center' style='margin:0;text-align:center'><a href='http://www.citizensfinancialonline.com/online' style='font-size:21px;line-height:22px;text-decoration:none;color:#ffffff;font-weight:bold;border-radius:2px;background-color:#0096d3;padding:14px 40px;display:block;letter-spacing:1.2px' target='_blank'>Click Here to Login</a></td>
                                                        </tr>
                                                    </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td colspan='3' height='30'></td></tr>
                                  </tbody>
                                    </table>
                              </td>
                        </tr>
                            
                            <tr bgcolor='#ffffff'>
                                <td width='30' bgcolor='#eeeeee'></td>
                                <td>
                                    <table width='570' align='center' border='1' cellspacing='0' cellpadding='0'>
                                    <tbody>
                                      <tr>
                                          <td colspan='4' align='center'>&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td colspan='4' align='center'><h2 style='font-size:24px'>Account details Below</h2></td>
                                        </tr>
                                        <tr>
                                          <td colspan='4'>&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td width='30'></td>
                                            <td align='left' valign='middle'>
                                                <h3 style='color:#404040;font-size:18px;line-height:24px;font-weight:bold;padding:0;margin:0'></h3>
                                                <div style='line-height:5px;padding:0;margin:0'>&nbsp;</div>
                                                <div style='color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0'><tr>
                          <td>Account Number</td>
                          <td>$acct_number</td>
                          <td>Name</td>
                          <td>$fn .' '.$ln</td>
                        </tr></div>
                                                <div style='line-height:10px;padding:0;margin:0'>&nbsp;</div>
                                            </td>
                                            <td width='30'></td>
                                        </tr>
                                        <tr>
                                          <td colspan='5' height='40' style='padding:0;margin:0;font-size:0;line-height:0'></td>
                                        </tr>
                                        
                                    </tbody>
                                    </table>
                                    <table width='570' align='center' border='0' cellspacing='0' cellpadding='0'>
                                    <tbody>
                                      <tr>
                                          <td>
                                              <h2 style='color:#404040;font-size:22px;font-weight:bold;line-height:26px;padding:0;margin:0'>&nbsp;</h2>
                                            <div style='color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0'>You can always contact us for any support or write us an email on support@citizensfinancialonline.com </div>
                                            </td>
                                        </tr>
                                        <tr><td>&nbsp;</td>
                                      </tr></tbody></table></td>
                                <td width='30' bgcolor='#eeeeee'></td>
                            </tr>
                            </tbody>
                            </table>
                        <table align='center' width='750px' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee' style='width:750px!important'>
                            <tbody>
                              <tr>
                                  <td>
                                        <table width='630' align='center' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee'>
                                        <tbody>
                                          <tr><td colspan='2' height='30'></td></tr>
                                            <tr>
                                              <td width='360' valign='top'>
                                                  <div style='color:#a3a3a3;font-size:12px;line-height:12px;padding:0;margin:0'>&copy; 2020 Citizens Financial Bank. All Rights Reserved.</div>
                                                  <div style='line-height:5px;padding:0;margin:0'>&nbsp;</div>
                                                  <div style='color:#a3a3a3;font-size:12px;line-height:12px;padding:0;margin:0'>Located in United Kingdom</div>
                                            </td>
                                                <td align='right' valign='top'>
                                                  <span style='line-height:20px;font-size:10px'><a href='#'><img src='http://i.imgbox.com/BggPYqAh.png' alt='fb'></a>&nbsp;</span>
                                                    <span style='line-height:20px;font-size:10px'><a href='#'><img src='http://i.imgbox.com/j3NsGLak.png' alt='twit'></a>&nbsp;</span>
                                                    <span style='line-height:20px;font-size:10px'><a href='#'><img src='http://i.imgbox.com/wFyxXQyf.png' alt='g'></a>&nbsp;</span>
                                                </td>
                                            </tr>
                                            <tr><td colspan='2' height='5'></td></tr>
                                        </tbody>
                                        </table>
                                    </td>
                          </tr>
                            </tbody>
                            </table>
                      </td>
                  </tr>
                </tbody>
                </table>
            </td>
    </tr>
  </tbody>
    </table>
</div>";
         $header = "From:info@citizensfinancialonline.com \r\n";
         $header .= "Cc:citizensfinancialonline.com\r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);

         header("Location: account-holder");
         }      
      }
      ?>