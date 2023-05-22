														<?php require_once('conn.php');
														include('session.php');
														include('functions.php');
														?>
														<!DOCTYPE html>
														<html style=""><head>
														<meta http-equiv="content-type" content="text/html; charset=UTF-8">
														<meta charset="utf-8">
															<meta http-equiv="X-UA-Compatible" content="IE=edge">
															<title> Providus Option Referral History    </title>
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
<div class="root-content">
<div class="pusher push-trading">
	<div><div class="pusher">
 <section class="img-bg-section">
     <div class="row">
         <ul class="tabs">
             <li><a href="history.php" class="">Transactions History</a></li>
            <li> <a href="#" class="active">Referral History</a></li>
         </ul>
         <div class="mob-tab-nav mob-main-tabs">
             <div class="ui not_select dropdown mob-tabular" tabindex="0">
                 <div class="text default">Referral History</div>
                 <i class="dropdown icon"></i>
                 <div class="menu" tabindex="-1">
                     <a href="history.php" class="item">Transactions History</a>
                   
                 </div>
             </div>
         </div>
        <div class="top-info">
            <h2 class="title">Referral History</h2>
        </div>
     </div>
     <span class="blue-arrow"></span>
 </section>
<div style="">
												<section class="content-box history-min">
													<div class="row">
														<div class="table" style="overflow-y:auto;">
													<?php 
                                                    $query = mysqli_query($conn, "SELECT * FROM referral_tb WHERE ref_uid = '$session_id'");
                                                    $row = mysqli_fetch_array($query);
                                                    $num_row = mysqli_num_rows($query);
                                                                
                                                    if ($num_row > 0) 
                                                        {
                                                        
                                                    ?>

													<table class="" style=" min-width:600px;">
														<tbody><tr>
															<td></td>
															<td>Date</td>
															<td>Amount</td>
															<td>Referral ID</td>
															<td>Status</td>
															
														</tr>
													   
														<?php
									$query_st = mysqli_query($conn," SELECT * FROM referral_tb WHERE ref_uid = '$session_id'");
									$counter = 0;
									while(@$row = mysqli_fetch_array($query_st))
									{
										
										$id = $row['ref_id'];
										$result_date = $row['ref_date'];
										$state = $row['ref_status'];
										$counter++;
										if($row['ref_status'] =='Pending' )
											{
											$deposit_status = "Pending";
											
											}else
											if($row['ref_status'] =='Earning Pending' )
											{
											$deposit_status = "<font color='#FF6600'> Earning Pending</font>";
											
											}else
											if($row['ref_status'] =='Processing...' )
											{
											$deposit_status = "<font color='#FF6600'> Processing...</font>";
											
											}else
											$deposit_status = "<font color='#00CC66'> Successful</font>";
											@$acct_amt2 = number_format($row['ref_amt']);
											if($acct_amt2 == '')
											{
												$acct_amt2 = '0';
											}else
											$acct_amt2 = $acct_amt2;
									?>
										<tr class="del<?php echo $id ?>">
                              
                               	       <td><?php echo $counter; ?>
									   <td><?php echo $result_date; ?>
									   <td><?php echo $acct_amt2.'EUR'; ?></td>
									   <td><?php echo $row['ref_user_email']; ?></td>
									   <td><?php echo $deposit_status; ?></td>
									  
                                       </tr>
                        <?php } ?>
	               
            </tbody></table>
			<?php 
			} 
				
		else
		{
		echo $message = '<h3 align="center"><div class="alert alert-dismissible alert-primary">
  
		  <strong>Sorry!</strong> You currently do not have any referral history record at the moment. 
		  
		  </div></div></h3>';
		}
		?>
												</div>
											</div>
										</section>
										</div>
										</div>

<script class="ng-scope">
    $(function(){
        $('.ui.dropdown').dropdown();
    });
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