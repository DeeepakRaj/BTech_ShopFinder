<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopfinder";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn)
{
	
}
else
{
	die("Connection failid because ".mysqli_connect_error());
}

?>