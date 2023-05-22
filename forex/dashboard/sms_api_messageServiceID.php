<?php
													require __DIR__ . '/twilio-php-master/src/Twilio/autoload.php';
                                                    //require_once "vendor/autoload.php"; 
                                                    use Twilio\Rest\Client;
													// send sms here to user
                                                    $sid    = "ACea38b34925d83248b8c84d4fc0448975"; 
                            						$token  = "b1cb0f542d1ba08fa616b6284b39df90"; 
                            						$twilio = new Client($sid, $token); 
                            						 
                            						$message = $twilio->messages 
                            										  ->create($phone, // to 
                            										   array( 
                            											   "messagingServiceSid" => "MGe6639f2970ce53dbae3bfb2c030b9c33",      
                            											   "body" => "Natwest Bank Online! Your account has be Debited with $money_sent" 
                            										        ) 
                            								  );
?>