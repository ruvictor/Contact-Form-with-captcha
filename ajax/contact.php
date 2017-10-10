<?php
// let's start the session
session_start();
// get the data from the form
$admin_email = 'admin@admin.com';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$subject = 'Contact Form';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';
$captcha = isset($_POST['captcha']) ? $_POST['captcha'] : '';
$img_session = isset($_SESSION['img_session']) ? $_SESSION['img_session'] : '';
$website = $_SERVER['SERVER_NAME'];

// check if the fields are empty
if(empty($email) or empty($name) or empty($email) or empty($message)){
	$output = "All fields are required!";
}else{
	if(md5($captcha) == $img_session){
$header = "From: $email"."\r\n"
.'Content-Type: text/plain; charset=utf-8'."\r\n";

$message = "
New entry from $subject!

Name: $name
E-Mail: $email
Message:
$message

This message was sent from http://$website";
		
		if(mail($admin_email, '=?utf-8?B?'.base64_encode($subject).'?=', $message, $header)){
			$output = "Your message was sent!<br />Thank you!";
		}
	}else{
		$output = "Wrong captcha code!";
	}
}
echo $output;
?>