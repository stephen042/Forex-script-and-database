<?php
//Start session
					@session_start();
					//Check whether the session variable SESS_MEMBER_ID is present or not
					if (!isset($_SESSION['userid']) || (trim($_SESSION['userid']) == '')) {
						@header("location: ../");
						exit();
					}
					$session_id = $_SESSION['userid'];
					$query = mysqli_query ($conn,"SELECT * FROM user_tb where user_id = '$session_id'");
					$row_session = mysqli_fetch_array($query);
					$fullname = $row_session['fname'];
					@$email = $row_session['uemail'];
					$username = $row_session['uusername'];
					$bitcoin_wallet = $row_session['ubit_wallet'];
					$question = $row_session['uquestion'];
					$qanswer = $row_session['uquestion_answer'];
					$mynetwork = $row_session['u_refer_code'];
					$reg_code = $row_session['u_invit_code'];
					$acct_amt = $row_session['u_amount'];
					$country = $row_session['ucountry'];
					$reg_date = $row_session['u_datereg'];
					$record_update = $row_session['u_update_record'];
					$last_see = $row_session['u_last_login'];
					$acct_status = $row_session['u_status'];
					$user_uid = $row_session['user_id'];
					$withdral_bal = $row_session['withraw_bal'];
					$refbonus_bal = $row_session['u_ref_amt'];
					$refbonus_amt = $row_session['u_ref_amt'];
					$demo_amt = $row_session['udemo_amt'];
					$withdral_pending = $row_session['u_withraw_pending'];
					$phone = $row_session['uphone'];
					$doc_aprrove = $row_session['u_document_approve'];
					
					if($doc_aprrove == 'Yes')
					{
						$account_approved = "<span class='ui button green'>Account verified <i class='fa fa-check'></i></span>";
						$verify_form = "";
					}
					if($doc_aprrove == 'No')
					{
						$account_approved = "<span class='ui button red'>Account not verified <i class='fa fa-times'></i></span>";
						$verify_form = "<p>Account verification usually takes 1-2 working days</p>
						<div  class=''>
						<form method='post' enctype='multipart/form-data' action=''>
						<div class='line'>
                    <label class='ng-binding'>Choose your ID type</label>
                    <div tabindex='0'><select class='selection ui dropdown' dropdown='100' name='desc' aria-invalid='false' required=''>
                        <option value='Passport' selected='selected'>Intl Passport</option>
                        <option value='Personal ID'>Personal ID</option>
						<option value='Voters Card'>Voters Card</option>
                       
                    </select><i class='dropdown icon'></i></div>
                </div>

                <div class='line'>
                    <label>Copy of passport (Please upload a passport in a full layout, with borders clearly visible)</label>
                    <span class='upload_label'>Upload file [ png, jpg, jpeg ] max 10Mb</span></div>
					<div class='line'>
					<label class='form-input form-input--file'>
                    <input type='file' name='file' id='file' class='load_passport' required=''>
                    <div class='button ui green-bm' style='display:inline'><i class='fa fa-photo'></i> Browse file for upload</div>&nbsp;&nbsp;<span class='form-input--file-text' id='showfile'></span>
					          </label>
                </div>
  <div class='line'>
  <p id='myBtn' style='cursor:pointer'>*click to read and accept the terms of service*</p>
  </div>
             
                <div class='line clearfix' aria-hidden='true'>
				<!-- The Modal -->
                    <div id='myModal' class='pop-up verification-paper modal'>
					<!-- Modal content -->
  <div class='modal-content'>
    <span class='close' role='button' tabindex='0'>&times;</span>
    <h1 class='yh1'>&nbsp;Acceptance of service</h1>
    <p class='Standard'>I,
        <span class='T1'>Dfgcv</span> <span class='T1'>Wsedrcfgv</span>
        certify that on <span class='T2'>06-04-2020</span> have selected unique login
        information
        (user name/email and password)
        and possess full access to my account; that it is my duty not to share them with anyone else
        other than the
        YQOptions Tradings  staff for the purpose of assisting me on the use of the platform and that in the event of
        needing assistance
        accessing my account I will contact only YQOptions Tradings and I will do so by email, chat or phone. I
        acknowledge
        that
        the YQOptions Tradings staff will be available to me on a timely manner and that my request for contact
        will be
        answered in the
        order of arrival. Furthermore I agree that I am not resident of USA and I have received the services agreed upon from
        yqoptiontradings.com (use of their trading platform), outside US territory, for the purpose of trading.</p>
    <p class='Standard'>I agree and acknowledge that despite the outcome, any trade undertaken using the
        YQOptions Tradings trading platform shall be considered as provision of the service. The provision of the service shall be
        completed no later than 7 days after the card or any other account funding transaction is done. Should this not
        happen I shall contact YQOptions Tradings within 5 days after the expect delivery date via a written notification.</p>
		<div class='check-terms float-left relative'>
   <label class='confi form-input'> <p class='Standard' style='color:#000000'>I have read and accepted User Agreement as listed on this website
        (<a href='../terms.php' target='_blank'>terms</a>).</p><input type='checkbox' name='agree' required=''><span class='checkmark'></span></label>
		</div>
    <p class='Standard'>&nbsp;</p>
    <p class='Standard'>&nbsp;</p>
   </div></div>
   </div>
   <div class='line clearfix'>
    <button class='ui button green-bm float-right' name='upload_btn' id='upload_btn' type='submit'><i class='fa fa-upload'></i> Upload</button>
      </div>
            
   </form>
</div>    
</div>";
					}
					
					if($doc_aprrove == '')
					{
						$account_approved = "<span class='ui button red'>Account not verified <i class='fa fa-times'></i></span>";
						$verify_form = "<p>Account verification usually takes 1-2 working days</p>
						<div  class=''>
						<form method='post' enctype='multipart/form-data' action=''>
						<div class='line'>
                    <label class='ng-binding'>Choose your ID type</label>
                    <div tabindex='0'><select class='selection ui dropdown' dropdown='100' name='desc' aria-invalid='false' required=''>
                        <option value='Passport' selected='selected'>Intl Passport</option>
                        <option value='Personal ID'>Personal ID</option>
						<option value='Voters Card'>Voters Card</option>
                       
                    </select><i class='dropdown icon'></i></div>
                </div>

                <div class='line'>
                    <label>Copy of passport (Please upload a passport in a full layout, with borders clearly visible)</label>
                    <span class='upload_label'>Upload file [ png, jpg, jpeg ] max 10Mb</span></div>
					<div class='line'>
					<label class='form-input form-input--file'>
                    <input type='file' name='file' id='file' class='load_passport' required=''>
                    <div class='button ui green-bm' style='display:inline'><i class='fa fa-photo'></i> Browse file for upload</div>&nbsp;&nbsp;<span class='form-input--file-text' id='showfile'></span>
					          </label>
                </div>
  <div class='line'>
  <p id='myBtn' style='cursor:pointer'>*click to read and accept the terms of service*</p>
  </div>
             
                <div class='line clearfix' aria-hidden='true'>
				<!-- The Modal -->
                    <div id='myModal' class='pop-up verification-paper modal'>
					<!-- Modal content -->
  <div class='modal-content'>
    <span class='close' role='button' tabindex='0'>&times;</span>
    <h1 class='yh1'>&nbsp;Acceptance of service</h1>
    <p class='Standard'>I,
        <span class='T1'>Dfgcv</span> <span class='T1'>Wsedrcfgv</span>
        certify that on <span class='T2'>06-04-2020</span> have selected unique login
        information
        (user name/email and password)
        and possess full access to my account; that it is my duty not to share them with anyone else
        other than the
        YQOptions Tradings  staff for the purpose of assisting me on the use of the platform and that in the event of
        needing assistance
        accessing my account I will contact only YQOptions Tradings and I will do so by email, chat or phone. I
        acknowledge
        that
        the YQOptions Tradings staff will be available to me on a timely manner and that my request for contact
        will be
        answered in the
        order of arrival. Furthermore I agree that I am not resident of USA and I have received the services agreed upon from
        yqoptiontradings.com (use of their trading platform), outside US territory, for the purpose of trading.</p>
    <p class='Standard'>I agree and acknowledge that despite the outcome, any trade undertaken using the
        YQOptions Tradings trading platform shall be considered as provision of the service. The provision of the service shall be
        completed no later than 7 days after the card or any other account funding transaction is done. Should this not
        happen I shall contact YQOptions Tradings within 5 days after the expect delivery date via a written notification.</p>
		<div class='check-terms float-left relative'>
   <label class='confi form-input'> <p class='Standard' style='color:#000000'>I have read and accepted User Agreement as listed on this website
        (<a href='../terms.php' target='_blank'>terms</a>).</p><input type='checkbox' name='agree' required=''><span class='checkmark'></span></label>
		</div>
    <p class='Standard'>&nbsp;</p>
    <p class='Standard'>&nbsp;</p>
   </div></div>
   </div>
   <div class='line clearfix'>
    <button class='ui button green-bm float-right' name='upload_btn' id='upload_btn' type='submit'><i class='fa fa-upload'></i> Upload</button>
      </div>
            
   </form>
</div>    
</div>";
					}
					
					if($withdral_pending == '')
					{
						$withdral_pending = '0';
					}else
					$withdral_pending = $withdral_pending;
				
					
					@$acct_amt2 = number_format($row_session['u_amount']);
					if($acct_amt2 == '')
					{
						$acct_amt2 = '0';
					}else
					$acct_amt2 = $acct_amt2;
				
				
					@$demo_amt2 = number_format($row_session['udemo_amt']);
					if($demo_amt2 == '')
					{
						$demo_amt2 = '0';
					}else
					$demo_amt2 = $demo_amt2;
				
					@$trade_amt2 = $row_session['u_amount'];
					@$user_amt = $row_session['u_amount'];
					if($trade_amt2 == '')
					{
						$trade_amt2 = '0';
					}else
					$trade_amt2 = $trade_amt2;
				
					
					@$refbonus_bal = number_format($row_session['u_ref_amt']);
					if($refbonus_bal == '')
					{
						$refbonus_bal = '0';
					}else
					$refbonus_bal = $refbonus_bal;
					
					@$current_bal = number_format($withdral_bal + $refbonus_bal + $acct_amt);
					if($current_bal == '')
					{
						$current_bal = '0';
					}else
					$current_bal = $current_bal;
					/*$mypic = '';
					$menubar2_pic ='';
					@$form_upload = '';
				if($pic == ''){
					$mypic ='image/student_icon.png';
					
					}
					if($pic != ''){
					$mypic ='../uradmin/home/image/'.$pic;
					}
					
					
					if($pic == ''){
					$menubar2_pic ='image/student_icon.png';
					}
					if($pic != ''){
					$menubar2_pic ='../uradmin/home/image/'.$pic;
					}*/
					include('about.php');

?>