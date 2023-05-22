													<?php require_once('conn.php');
													include('session.php');
													include('functions.php');
													
												$amt_message = "";
												$success_message = "";
												$error_message = "";
												
												if (isset($_POST['profile_btn']))
							{
												
										//$_SESSION['app_id'] = $finalcode;
										$fname = mysqli_real_escape_string($conn, $_POST['fname']);
										@$bit_wallet = mysqli_real_escape_string($conn, $_POST['bit_wallet']);
										@$phone = mysqli_real_escape_string($conn, $_POST['phone']);
										
										
											
											$query_staff = mysqli_query($conn, "UPDATE user_tb SET fname ='$fname', uphone = '$phone', u_update_record = NOW() WHERE user_id = '$session_id'");
											
											
											@$query2 = mysqli_query($conn, "INSERT INTO mtran_history(muid, mtran_nature, mtran_status, mtran_code, mtran_amt, mtran_added, mtran_date) 
										VALUES ('$session_id', 'Update Profile', 'Successful', '', '', '', NOW())");
										
											if ($query_staff) 
											{	
											$success_message = "<font color='#009966' size='+2'>Information updated successfully.</font>
												<p align ='center'><font style='text-align:center'><img src='img/btn-ajax-loader.gif' /></font></p>
												<meta http-equiv='refresh' Content='5; url=dashboard.php' />";
											}
												
										else{
											$success_message ="<font color='#FF0000'>Sorry, error occurred trying to update your profile, try again</font>";
											}			
													
						}
													
													
													
													?>
													<!DOCTYPE html>
													<html style=""><head>
													<meta http-equiv="content-type" content="text/html; charset=UTF-8">
													<meta charset="utf-8">
														<meta http-equiv="X-UA-Compatible" content="IE=edge">
														<title> Providus Option Personal Settings    </title>
													<meta name="description" content="            
														">

														<?php include('css.php');?>
													<style>
													.divider{
													border-bottom: 1px dotted;
													}
													.blinking{
														animation:blinkingText 2s infinite;
													}
													@keyframes blinkingText{
														0%{		color: #f00;	}
														49%{	color: #600;	}
														50%{	color: #c00;	}
														99%{	color:#e00;	}
														100%{	color: #f00;	}
													}
													.blinkgreen{
														animation:blinkgreenText 2s infinite;
													}
													@keyframes blinkgreenText{
														0%{		color: #0f0;	}
														49%{	color: #060;	}
														50%{	color: #0c0;	}
														99%{	color:#0e0;	}
														100%{	color: #0f0;	}
													}
													</style>
													<SCRIPT type="text/javascript">
																	var tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
																	var tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

																	function GetClock(){
																	 tzOffset = 0;//set this to the number of hours offset from UTC

																	 d=new Date();
																	 dx=d.toGMTString();
																	dx=dx.substr(0,dx.length -3);
																	d.setTime(Date.parse(dx))
																	d.setHours(d.getHours()+tzOffset);
																	var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate();
																	var nhour=d.getHours(),nmin=d.getMinutes(),ap,nsec=d.getSeconds();
																	
																	if(nhour<=9) nhour="0"+nhour;
																	if(nmin<=9) nmin="0"+nmin;
																	if(nsec<=9) nsec="0"+nsec;

																	document.getElementById('clockbox').innerHTML="<i class='fa fa-clock-o'></i>&nbsp;"+nhour+":"+nmin+":"+nsec;
																	var nminutes = Number(nmin) + 01;
																	if(nminutes<=9) nminutes="0"+nminutes;
																	time = "<i class='fa fa-clock-o'></i>&nbsp;"+nhour+":"+nminutes;
																	
																	}

																	window.onload=function(){
																	GetClock();
																	setInterval(GetClock,1000);
																	document.getElementById('time').innerHTML=time;
																	}
																	</SCRIPT>
													</head>
<body class="pushable  dimmable scrolling" style="">
<?php include('sider-bar.php');?>

    <div class="pusher" aria-hidden="false">
<?php 
include('navigation.php');
?>
<div class="root-content" >
<div class="pusher push-trading">
	<!-- uiView:  --><div style=""><div class="pusher">
 <section class="img-bg-section">
     <div class="row">
         <ul class="tabs">
             <li><a href="#" class="active">Personal Data</a></li>
             <li><a href="security.php">Security Settings</a></li>
         </ul>
         <div class="mob-tab-nav mob-main-tabs">
             <div class="ui not_select dropdown mob-tabular" tabindex="0">
                 <div class="text default">Personal Data</div>
                 <i class="dropdown icon"></i>
                 <div class="menu" tabindex="-1">
                    
                     <a href="security.php" class="item">Security Settings</a>
                 </div>
             </div>
         </div>
         <h2 class="title">Account Data</h2>
     </div>
     <span class="blue-arrow"></span>
 </section>
 
 <div style=""><section class="content-box verification-new">
	<div align="center"><p class="p"><?php echo $success_message; ?></p></div>
		<div class="row">
        <div class="form-row account-data">
            <form class="line" name="personal" method="post">
			<div class="line"></div>
                <div class="line ui disabled input">
                    <input type="text" placeholder="Name" name="fname"  value="<?php echo $fullname?>">
                </div>
                 <div class="line ui disabled input">
                    <input type="email" placeholder="E-mail"  disabled="disabled" value="<?php echo $email?>">
                </div>
                <div class="line ui input">
                    <input type="tel" placeholder="Phone number" name="phone" value="<?php echo $phone?>" required="">
                </div>
								<div class="line ui disabled input">
                    <input type="text" placeholder="Country"  readonly="" value="<?php echo $country?>" name="country">
					                </div>
                <div class="line clearfix">
                    <button class="ui button primal float-right" name="profile_btn">Save</button>
                </div>
            </form>
            <h4><span id="p1">Referral Link: <?php echo 'https://providusoption.com/eu/register?ref='.$username?></span>
                                        
                                         <button class="ui button primal float-right" onClick="copyToClipboard('#p1')" >Copy Referral Link</button>
                                          </h4>
            <!-- ///////////////////////////////////// -->

            <h2 class="title personal">Account Verification</h2>
					<center>
					<?php echo $account_approved;?>
					</center><br />
					<div class="line clearfix">
					Click here to upload document
                    <a href="../upload-doc" target="_blank" ><button class="ui button primal float-right" name="profile_btn">Upload Document</button></a>
                </div>
              
   </div>
</section>
</div>
 
 </div>
 <style>
  .confi {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.confi input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.confi:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.confi input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.confi input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.confi .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}


 /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
} 
 </style>
 <script class="ng-scope">
    $(function(){
        $('.ui.dropdown').dropdown();
    });
</script>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
} 



var myfile = document.getElementById('file');
var upload_btn = document.getElementById('upload_btn');
 myfile.onchange = function() {
        var file = this.files[0];
        var imagefile = file.type;
        var match= ["image/jpeg","image/png","image/jpg"];
        if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
            alert('Please select a valid image file (jpeg/jpg/png).');
            file = '';
			upload_btn.setAttribute("disabled", "disabled");
            return false;
        }
		else{
			 document.getElementById('showfile').innerHTML = file.name;
			 upload_btn.removeAttribute("disabled");
		}
    }

</script>
</div>
</div>
 </div>
											
								<?php
include('footer.php');
?>
	</div>
    <?php

include("javascript.php");
?>

<script>
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
</script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-76636433-1', 'auto');
    ga('send', 'pageview');

</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">

    if(bowser.safari || bowser.mac){
        // disable for this
    }else{
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter38379630 = new Ya.Metrika({
                        id:38379630,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }

            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    }
</script>
<noscript aria-hidden="false"><div><img src="https://mc.yandex.ru/watch/38379630" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 1057644682;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="https://gbtraderoptions.com/assets/js/conversion.js">
</script>
<noscript aria-hidden="false">
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1057644682/?guid=ON&amp;script=0"/>
    </div>
</noscript>

<!-- Global site tag (gtag.js) - Google AdWords: 824992907 -->
<script async="" src="https://gbtraderoptions.com/assets/js/js.js"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'AW-824992907');
</script>

	<?php include('livechat-script.php');?>
	</body></html>			