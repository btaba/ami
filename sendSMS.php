<?php
// Get the PHP helper library from twilio.com/docs/php/install
require_once('/home/imbenzene/Documents/ami/php/twilio-php/Services/Twilio.php'); // Loads the library
 
// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "AC76de558201b9927e3bdb03f209f15a81"; 
$token = "4ba4e3995a2e1fd5de33d8af2676a84f"; 
$client = new Services_Twilio($sid, $token);
 
$client->account->messages->sendMessage("6465028711", "+16072167043", "Hi Tushar! How is Hackathon going?");

?>