<?php

include("db.php");

session_start();



$phno = $_POST['phno'];

$password = $_POST['password'];



$phno = stripcslashes($phno);

$password = stripcslashes($password);



//echo $email;

//echo $password;



$query = "SELECT * FROM `tblusertable` WHERE PhoneNumber = '$phno' and PassWord = '$password';";



$data = mysqli_query($con, $query);



$row = mysqli_fetch_array($data);



//echo $row['UEmail'];

//echo $row['PassWord'];



if($row['PhoneNumber'] == $phno && $row['PassWord'] == $password)

{

    header("Location:blog.php");

    $_SESSION["uid"] = $row['Sysid'];

    $_SESSION["usrname"] = $row['FirstName'];

}

else

{

    echo "<h1> Login failed. Invalid username or password.</h1>";
    echo "<a href='login.php'>Click Here</a> to login again";

}



?>