<?php
   session_start();
   //unset($_SESSION["unm"]);
	//$_SESSION['uid']="";
	//$_SESSION['unm']="";
  session_destroy();
  
   header('location:index.php');
?>