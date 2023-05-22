													<?php require_once('conn.php');
													include('session.php');
													include('functions.php');
													$newm = '';
													?>


													<!DOCTYPE html>
													<html style=""><head>
													<meta http-equiv="content-type" content="text/html; charset=UTF-8">
													<meta charset="utf-8">
														<meta http-equiv="X-UA-Compatible" content="IE=edge">
														<title> Providus option Main </title>
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

								<script>
								var balance = <?php echo $trade_amt2?>
								var newm2 = document.getElementById("profit").value = "+" + pip.toFixed(2);
								</script>
								
<link rel="stylesheet" href="assets/platform.css" />
<style>
.red{background:#f7495c !important}
.red:hover{background:#FF6071 !important}
.red:active{background:#FF0000 !important}
.green:active{background:#008800 !important}
hr{
border:none;
font-size:2px;
}
.hidden{
display:none;
}
.trading-iframe{margin-left:220px; margin-right:235px; min-height:600px !important; height: 600px;}
.menu-toggle{display:none;height:30px;width:25px;cursor:pointer;margin-top:19px; z-index:99999999 !important;}.menu-toggle i,.menu-toggle:after,.menu-toggle:before{display:block;width:100%;height:2px;background:#2597c7}.menu-toggle i{margin-top:6px}.menu-toggle:before{content:'';margin-top:3px}.menu-toggle:after{content:'';margin-top:6px}

.lefttabnav{display:none;height:30px;width:25px;cursor:pointer;margin-top:30px; position:relative; top:0px; left:0; z-index:9999 !important}
.lefttabnav i,.lefttabnav:after,.lefttabnav:before{display:block;width:100%;height:2px;background:#2597c7}
.lefttabnav i{margin-top:6px}
@media (max-width:1139px){
.lefttabnav{display:none;float:left;margin-left:0}
.lefttabnav:before{content:'';margin-top:3px}.lefttabnav:after{content:'';margin-top:6px}
.menu-toggle{display:block;float:right;margin-left:25px}
}
@media (max-width:920px){
.menu-toggle{margin-left:15px; display:block !important}
.trading-iframe{
margin:0px;
width: 100%;
}
.lefttabnav{display:block;margin-left:10px}
.lefttab{display:none; }
.righttab{
width: 100% !important;
margin-bottom:20px !important;
z-index:0 !important;
position:absolute !important;
top:630px !important;
}
.table{
position:absolute !important;
top:1180px !important;
width:100%;
}
body{
height: 1500px !important;
}
.pusher{
height:1300px;
}
.footer{
position:absolute;
bottom:5;
right:0;
width:100%;
}
.left{
position: absolute;
left: 10px;
top: 0;
width: 40% !important;
margin-right: 20px !important;
margin-bottom: 20px;
}
.left input{
width: 100% ;
}
.right{
position: absolute;
right: -30px !important;
top: 0;
width: 40% !important;
}
.right button{
margin: 10px auto !important;
height: 70px !important;
width: 80% !important;
}
.right input{
margin: 10px auto !important;
width: 80% !important;
}
.clearfix{
display:block !important;
}
.icon-nav{
display:none;
}
}
@media (max-width: 890px){
.tabdiv, .walletdrop{
top: 25px !important;
}
}

@media (min-width:920px){
.lefttab{display:block !important; }
.walletdrop{display:block !important; }
.trading-iframe{margin-right:235px !important;}

}
</style>

					<div class="root-content">
                   <div class="pusher push-trading">
				   
					<div class="ds-table ds-rework">
					   <div class="row-cell row-run">
					<div class="latest-bid">
						<table class="wrap tl-table">
							<tbody>
							<tr height="30px">
								<th class="nowrap" height="30px">Live forex:</th>
								<td class="" width="100%" height="30px" style="max-height:30px !important">
								   
										
                   <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "title": "S&P 500",
      "proName": "OANDA:SPX500USD"
    },
    {
      "title": "Shanghai Composite",
      "proName": "INDEX:XLY0"
    },
    {
      "title": "EUR/USD",
      "proName": "FX_IDC:EURUSD"
    },
    {
      "title": "BTC/USD",
      "proName": "BITFINEX:BTCUSD"
    },
    {
      "title": "ETH/USD",
      "proName": "BITFINEX:ETHUSD"
    },
    {
      "description": "AUD/USD",
      "proName": "OANDA:AUDUSD"
    },
    {
      "description": "CAD/USD",
      "proName": "FX_IDC:CADUSD"
    },
    {
      "description": "BCH/USD",
      "proName": "KRAKEN:BCHUSD"
    }
  ],
  "colorTheme": "dark",
  "isTransparent": true,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
                       
                   
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

</div>

<div style="width: 100%; height:60px; padding:0px; margin:0px">
<span class="lefttabnav float-left" onClick="showtab()"><i></i></span>
<div style="z-index:9999 !important; position:absolute; top: 40px;left: 0px; width:220px !important;" class="lefttab">
<div class="category ui option-select tabdiv selection dropdown" tabindex="0" style="height:60px; width:220px;  position:absolute;">

			<input type="hidden" value=""><i class="dropdown icon" tabindex="0"><div class="menu" tabindex="-1"></div></i><div class="default text">Forex</div>
			<div class="menu" tabindex="-1"><a href="#" class="item" onClick="showed('forexscr')">Forex</a><a href="#" class="item" onClick="showed('cryptoscr')">Crypto</a>
			<a href="#" class="item" onClick="showed('stockscr')">Stock</a></div></div>

</div>
            <div class="wallet-drop-func" data-ng-func="" style="position:absolute; top: 40px; right: 0px; width:250px;">
                <div class="ui dropdown amount-dropdown walletdrop" tabindex="0" style="width:250px; z-index:99;">
                  
                    <div class="text"><div class="amount-item">
                                
                                <div class="amount-val">
								<span style="margin-top:10px;"><b><?php echo $acct_amt2.'.00'?></b> <b>USD</b></span>
								<span style="position:absolute; font-size:small; top:0; right: 20px;"><i class="fa fa-envelope-o"></i> <?php echo $email;?></span>
								</div>
                                <span class="amount-net">Net Balance: <b><?php echo $current_bal;?></b> <b ng-bind="w.currency" class="ng-binding">USD</b></span>
                            </div></div>
                    <i class="dropdown icon" tabindex="0"><div class="menu" tabindex="-1"></div></i>
                    <div class="menu" tabindex="-1">
                        <!-- ngRepeat: w in info.balances --><div class="item active" role="button" tabindex="0" style="">
                            <div class="amount-item">
                                <span class="amount-id">
                                   </span>
                                   
                                <div class="amount-val"><b><?php echo $acct_amt2.'.00'?></b> <b>USD</b></div>
                                <span class="amount-net">Net Balance: <b><?php echo $current_bal;?></b> <b>USD</b></span>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

</div>

<div class="chat-platform-wrap minimized">
      <hr>
        <div class="theme-wrap dark-theme-wrap" style="width: 100%;">
		
		<div style="width:220px; position:absolute; top:0px; left:0px; font-size:small !important; color:#FFFFFF !important; z-index:999 !important" class="lefttab">
		<div id="forexscr" class="screener">
		<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
  {
  "width": "220",
  "height": 600,
  "defaultColumn": "overview",
  "defaultScreen": "general",
  "market": "forex",
  "showToolbar": false,
  "colorTheme": "dark",
  "transparency": false,
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
</div>
<div id="cryptoscr" class="screener hidden">
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
  {
  "width": "220",
  "height": 600,
  "defaultColumn": "overview",
  "defaultScreen": "general",
  "market": "crypto",
  "showToolbar": false,
  "colorTheme": "dark",
  "transparency": false,
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
</div>
	<div id="stockscr" class="screener hidden">
	<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
 
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
  {
  "width": "220",
  "height": 600,
  "defaultColumn": "overview",
  "defaultScreen": "most_capitalized",
  "market": "america",
  "showToolbar": false,
  "colorTheme": "dark",
  "transparency": false,
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
	</div>
		</div>
      
            <div class="trading-iframe" id="trading" style="min-height:600px !important; height:600px">
         <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container" >
  <div id="tradingview_eeb1c" style="min-height:600px !important; height:600px; width:100%"></div>

  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "autosize": true,
  "symbol": "OANDA:EURUSD",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "Dark",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "withdateranges": true,
  "hide_side_toolbar": false,
  "allow_symbol_change": true,
  "studies": [
    "BB@tv-basicstudies",
    "MASimple@tv-basicstudies",
    "RSI@tv-basicstudies"
  ],
  "container_id": "tradingview_eeb1c"
}
  );
  </script>
</div>
			<!-- TradingView Widget END -->
               
            </div>
		<form method="post" style="overflow: visible;" onsubmit="return call()" name="tradeform" id="tradeform" >
			<div class="clearfix" style="display: none;"></div>
			
			<div style="width:250px; position:absolute; top:0; right:0px;" class="righttab">
			<div style="width:200px; !important; margin:0 auto; color:#FFFFFF">
			<div class="line"></div>
			<div class="rightcontent left">
			<label><!-- react-text: 95 -->Option type: <!-- /react-text --><span title="Select option type" class="ask">?</span></label>
			<div>
			<select class="category ui option-select selection dropdown" tabindex="0" name="days" id="days" required>
			<option></option>
   
			<option value="Turbo">Turbo</option>
			<option value="Intraday">Intraday</option>
			<option value="Long term">Long term</option>
			</select>
			</div>
			
			<div class="line"></div>
			
			<label>Platform Time: <span id="clockbox"></span></label>
			<div class="line"></div>
			<label><!-- react-text: 107 -->Expiration Time: <!-- /react-text --><span title="'Time' represents duration of the option. In case of Fixed time mode, option 
			'Time' is the difference between the time when you enter to the market purchase the option, and option expiration time. If fixed time is switched off, 
			'Time' represents the difference between the time when option becomes available to purchase it on the market and option expiration time." class="ask">?</span>
			<time style="float: right; color:#FF0000" id="time"></time></label><div class="category ui time-select selection dropdown" tabindex="0"><input type="hidden" value="">
			<i class="dropdown icon" tabindex="0"><div class="menu" tabindex="-1"></div></i><div class="default text">1min</div><div class="menu" tabindex="-1">
			<div class="item" onclick="expTime('01')">1min</div><div class="item" onclick="expTime('02')">2min</div><div class="item" onclick="expTime('03')">3min</div>
			<div class="item" onclick="expTime('04')">4min</div><div class="item" onclick="expTime('05')">5min</div><div class="item" onclick="expTime('06')">6min</div>
			<div class="item" onclick="expTime('07')">7min</div><div class="item" onclick="expTime('08')">8min</div><div class="item" onclick="expTime('09')">9min</div>
			<div class="item" onclick="expTime('10')">10min</div><div class="item" onclick="expTime('11')">11min</div><div class="item" onclick="expTime('12')">12min</div>
			<div class="item" onclick="expTime('13')">13min</div><div class="item" onclick="expTime('14')">14min</div><div class="item" onclick="expTime('15')">15min</div>
			<div class="item" onclick="expTime('16')">16min</div><div class="item" onclick="expTime('17')">17min</div><div class="item" onclick="expTime('18')">18min</div>
			<div class="item" onclick="expTime('19')">19min</div><div class="item" onclick="expTime('20')">20min</div><div class="item" onclick="expTime('21')">21min</div>
			<div class="item" onclick="expTime('22')">22min</div><div class="item"onclick="expTime('23')">23min</div><div class="item" onclick="expTime('24')">24min</div>
			<div class="item" onclick="expTime('25')">25min</div><div class="item" onclick="expTime('26')">26min</div><div class="item" onclick="expTime('27')">27min</div>
			<div class="item" onclick="expTime('28')">28min</div><div class="item" onclick="expTime('29')">29min</div><div class="item" onclick="expTime('30')">30min</div></div>
			</div>

		
			<div class="line"></div>
			
			<label><!-- react-text: 117 -->Fixed time: <!-- /react-text --><span title="'Time' represents duration of the option. In case of Fixed time mode, option 'Time' 
			is the difference between the time when you enter to the market purchase the option, and option expiration time. If fixed time is switched off, 'Time' 
			represents the difference between the time when option becomes available to purchase it on the market and option expiration time." class="ask">?</span>
			<div class="theme-switcher"><input type="checkbox" id="theme-switcher" value="on"><label for="theme-switcher"><i></i></label></div></label>
			
			<div class="line"></div>
			
			<label><!-- react-text: 125 -->Amount: <!-- /react-text --><span title="Trade amount in base currency of the trading account." class="ask">?</span></label>
			<div class="input-number-box">
			<input type="text" value="10.00" id="amount" name="trade_amt" class="input-number amount-input" required>
			<div class="input-number-more"></div>
			<div class="input-number-less"></div></div>
			
			<div class="line"></div>
			
			<span id="hiddenamt" value="<?php echo $hiddenamt;?>"></span>
			<label><!-- react-text: 133 -->Profit: <!-- /react-text --><span title="Profitability of the chosen option" class="ask">?</span></label>
			<div class="profit-sum"><span id="profit" value=""></span> <span class="profit-cur">USD</span><?php echo $newm;?>
			
			
			</div>
			
			<div class="line"></div>
			
			<label><!-- react-text: 125 -->Trade Rate: <!-- /react-text --><span title="Trade amount in base currency of the trading account." class="ask"></span></label>
			<div class="profit-sum"><input type="text" style="margin-bottom:10px; width:200px;" readonly="" id="percent" name="trade_price" value="87% +0.87"  />
			</div>
			</div>
			<div class="line"></div>
			
			<div id="error"></div>
			
			<div class="rightcontent right">
			<button class="ui button primal green" style="height:50px; width:200px; margin-bottom:10px" onclick="call()" id="btn_trade" name="btn_trade">Trade</button>
			<label><!-- react-text: 125 -->Cap Rate: <!-- /react-text --><span title="Trade amount in base currency of the trading account." class="ask"></span></label>
			<input type="text" value="87% +0.87" style="margin-bottom:10px; width:200px;" readonly="" id="percent" />
			<!--<button class="ui button primal red" style="height:50px; width:200px; margin:0 auto;" onclick="call()">Put</button>-->
			</div>
			</div>
			</div>
        </div>
		<hr>
        <div class="clarfix"></div>
    </div>
	</form>
	<div class="clarfix"></div>
				<section>
					<div style="clear:both"></div>
					<div>
						<div class="table" style="overflow-y:auto;">
						 

							<table class="" style=" min-width:600px;">
								<tbody><tr>
									<td>Date</td>
									<td >Type</td>
									<td>Pair</td>
									<td>Price</td>
									<td>Volume</td>
									<td>Cost</td>
									<td >Status</td>
									
								</tr>

									<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									</tr>

						   
							</tbody>
						</table>
					
						</div>
					</div>
				</section>
				


</div></div>	
										   <script>
										   var forexscr = document.getElementById('forrxscr');
										   var cryptoscr = document.getElementById('cryptoscr');
										   var stockscr = document.getElementById('stockscr');
										   var screener = document.getElementsByClassName('screener');
										   function showed(id){
												var shown = document.getElementById(id);
												screener[0].classList.add('hidden');
												screener[1].classList.add('hidden');
												screener[2].classList.add('hidden');
												shown.classList.remove('hidden');
												
										   }
										   
										   </script> 
												   <script>
													var lefttab = document.getElementsByClassName('lefttab');
													var lefttabnav = document.getElementsByClassName('lefttabnav');
													var tabdiv = document.getElementsByClassName('tabdiv');
													var trading= document.getElementById('trading');
													var wallet = document.getElementsByClassName('walletdrop');
													function showtab(){
													if(lefttab[0].style.display === "block"){
													lefttab[0].style="display:none; z-index:9999 !important; position:absolute; top: 40px;left: 0px; width:220px !important;";
													lefttab[1].style="display:none; position:absolute;  z-index:999 !important; top:0px; left:0px;";
													lefttabnav[0].style="margin-left:10px";
													tabdiv[0].style="position:absolute; left:0; top:0px; width:220px; height:60px";
													trading.style="margin:0; min-height:600px !important; margin-left:0px;";
													wallet[0].style="display:block;width:250px; z-index:99";
													}
													else{
													lefttab[0].style="display:block; z-index:9999 !important; position:absolute; top: 40px;left: 0px; width:220px !important;";
													lefttab[1].style="display:block; position:absolute;  z-index:999 !important; top:0px; left:0px;";
													lefttabnav[0].style="margin-left:230px";
													tabdiv[0].style="position:absolute; left:0; top:0px; width:220px; height:60px";
													trading.style="margin-left:220px; margin-right:0; min-height:600px !important";
													wallet[0].style="display:none;width:250px; z-index:99";
													}
													}
													</script>



<script>
function expTime(iddd){
var expiration = iddd;

var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate();
				var nhour=d.getHours(),nmin=d.getMinutes(),ap,nsec=d.getSeconds();
				

				if(nhour<=9) nhour="0"+nhour;
				if(nmin<=9) nmin="0"+nmin;
				if(nsec<=9) nsec="0"+nsec;
var nminutes = Number(nmin) + Number(expiration);
if(nminutes > 60){
		var excess = Number(nminutes) - 60;
		
		var nhours = Number(nhour) + 01;
		if(excess<=9) excess="0"+excess;
		if(nhours<=9) nhours="0"+nhours;
		document.getElementById('time').innerHTML="<i class='fa fa-clock-o'></i>&nbsp;"+nhours+":"+excess;
	}
	else{
	if(nminutes<=9) nminutes="0"+nminutes;
		document.getElementById('time').innerHTML="<i class='fa fa-clock-o'></i>&nbsp;"+nhour+":"+nminutes;
	}
}
</script>
<script>
            var pip = ((Math.random() * 1) + 8.3 );
			document.getElementById("profit").innerHTML = "+" + pip.toFixed(2);
            document.getElementById("percent").value = (pip*10).toFixed(1) + "% +" + (pip/10).toFixed(1);
			document.getElementById('hiddenamt').value = document.getElementById('profit').innerHTML;
			var npercent = document.getElementById("profit").innerHTML = "+" + (amount.value * (pip/10)).toFixed(2);
			
            </script>
			
			
		
		
<script>
			var amount = document.getElementById('amount');
			amount.onkeyup = function(){
			var percent = document.getElementById('percent').value;
			if(amount.value <= 0){
				document.getElementById('profit').innerHTML = "+NaN";
			}
			else document.getElementById('profit').innerHTML = "+" + (amount.value * (pip/10)).toFixed(2);
			}
			
			function call(){
				if(amount.value <= 0){
					alert('Amount is invalid');
				}
				else if(amount.value > balance){
					alert('Amount exceeds available balance');
				}
				else{
					alert('Your trading account is already in session');
				}
			}
			</script>
			
<?php
include('footer.php');
?>
	</div>
  <script type="text/javascript" async="" src="https://gbtraderoptions.com/assets/js/conversion_async.js"></script>
  <script type="text/javascript" async="" src="https://gbtraderoptions.com/assets/js/watch.js"></script>
  <script async="" src="https://gbtraderoptions.com/assets/js/analytics.js"></script>
  <script src="https://gbtraderoptions.com/dashboard/assets/inner.js"></script>
    <script src="https://gbtraderoptions.com/assets/js/vendor.js"></script>
<script src="https://gbtraderoptions.com/dashboard/assets/app.js"></script>

<script type="text/javascript" src="validation.min.js"></script>
<script type="text/javascript" src="trade_script.js"></script>	
<script src="js/sweet-alert.js"></script>
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

	<?php include('');?>
	</body></html>