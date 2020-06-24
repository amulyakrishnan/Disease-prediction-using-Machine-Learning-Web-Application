<?php
require_once 'book_lab.php';

if(isset($_POST['submit'])){
    // Authorisation details.
    
 
    $name = $_POST["customer_name"];
	$username = "brindashree29@gmail.com";
	$hash = "0a1a9ad551b34f36819f2ed3663ab470d97482c0c0126d13a6e1e26aec3663b3";
	$otp=mt_rand(100000,999999);
	$link="http://www.google.com";
	$msg="Hey ".$name. "your appointment is confirmed and your otp is ".$otp."to cancel your booking please click here ".$link;
	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	// $numbers = "$contact_number,$phone_number";
	$numbers = "$contact_number"; // A single number or a comma-seperated list of numbers
	$message = "$msg";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	echo(" Thankyou for booking.");
	curl_close($ch);
	
}

?>