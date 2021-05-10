<?php
session_start();
$con=mysqli_connect('localhost','root','','shopfinder');
$otp=$_POST['otp'];
$email=$_SESSION['EMAIL'];
$res=mysqli_query($con,"select * from tblusertable where UEmail='$email' and OTP='$otp'");
$count=mysqli_num_rows($res);
if($count>0){
	mysqli_query($con,"update tblusertable set OTP='' where UEmail='$email'");
	$_SESSION['IS_LOGIN']=$email;
	echo "yes";
}else{
	echo "not_exist";
}
?>