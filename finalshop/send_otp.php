<?php
session_start();
$con=mysqli_connect('localhost','root','','shopfinder');
$email=$_POST['email'];

$res=mysqli_query($con,"select * from tblusertable where UEmail='$email'");
$count=mysqli_num_rows($res);
if($count>0){

	echo "yes";
	$otp=rand(11111,99999);
	mysqli_query($con,"update tblusertable set OTP='$otp' where UEmail='$email'");
	$html="Your otp verification code is ".$otp;
	$_SESSION['EMAIL']=$email;
	mailer($email,'OTP Verification',$html);
	
}else{
	echo "not_exist";
}

function mailer($to,$subject, $msg){
	$to_email = $to;
	$subject = $subject;
	$body = $msg;
	$headers = "From: patelmayankb73@gmail.com";

	if (mail($to_email, $subject, $body, $headers))
	{
    	return 0;
	}
	else 
	{
    	return 1;
	}
} 	



?>