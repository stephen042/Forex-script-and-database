
												$('document').ready(function()
												{ 
												/* validation */
												$("#tradeform").validate({
												rules:
												{
												trade_amt: {
												required: true, 
												},
												time: {
												required: true,

												},

												days: {
												required: true,

												},
												},
												messages:
												{
												trade_amt:{
												required: "Enter trade amount"
												},

												days:{
												required: "Enter  Duration"
												},
												time: "Enter time",
												},
												submitHandler: submitForm	
												});  
												/* validation */

												/* login submit */
												function submitForm()
												{		
												var data = $("#tradeform").serialize();

												$.ajax({

												type : 'POST',
												url  : 'trade.php',
												data : data,
												beforeSend: function()
												{	
												$("#error").fadeOut();
												$("#btn_trade").html('<img src="btn-ajax-loader.gif" /> &nbsp; Wait..');
												},
												success :  function(response)
												{						
														if(response=="Yes"){

																$("#btn_trade").html('<img src="btn-ajax-loader.gif" /> &nbsp; Processing..');
																$("#error").html('<div class="alert alert-success"> <span class="fa fa-check"></span> &nbsp; '+response+' .</div>');
																$("#btn_trade").html('<span class="fa fa-check"></span> &nbsp; trade');
																setTimeout(' window.location.href = "dashboard.php"; ',2000);
														}
														else if(response=="error"){

																$("#error").fadeIn(2000, function(){						
												$("#error").html('<div class="alert alert-danger"> <span class="fa fa-times"></span> &nbsp; '+response+' </div>');
												$("#btn_trade").html('<span class="fa"></span> &nbsp; trade');
																						});
														}
														
														else{

																$("#error").fadeIn(2000, function(){						
												$("#error").html('<div class="alert alert-danger"> <span class="fa fa-times"></span> &nbsp; '+response+' </div>');
												$("#btn_trade").html('<span class="fa"></span> &nbsp; trade');
																						});
														}
												}
												});
												return false;
												}
												/* login submit */
												});