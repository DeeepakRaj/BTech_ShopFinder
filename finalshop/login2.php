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

    header("Location:index.php");

    $_SESSION["uid"] = $row['SysId'];

    $_SESSION["username"] = $row['FirstName'];

    $_SESSION["lname"] = $row['LastName'];

    $_SESSION["gender"] = $row['Gender'];

    $_SESSION["dob"] = $row['DOB'];

    $_SESSION["pwd"] = $row['PassWord'];

    $_SESSION["mail"] = $row['UEmail'];


}

else

{

    echo'<script>
    var ask = window.confirm("Login Email Or Password Incorrect");
    if (ask) {

        window.location.href = "login.php";

    } else {}
    </script>';

}



?>