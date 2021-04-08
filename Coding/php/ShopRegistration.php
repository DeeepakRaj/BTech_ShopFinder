<?php
session_start();

include '../php/database/connection.php';
if(isset($_POST['submit']))
{  
    $ShopName = $_POST['txtShopName'];
    $ShopPhoneNumber = $_POST['txtShopPhoneNumber'];
    $ShopDescription = $_POST['txtShopDescription'];
    $ShopAddress = $_POST['txtShopAddress'];
    $ShopLocation = $_POST['txtShopLocation'];
    $ShopPostCode = $_POST['txtShopPostcode'];
    $ShopCategory = $_POST['optShopCategory'];
    $ShopOpeningTime = $_POST['lstShopOpeningTime'];
    $ShopClosingTime = $_POST['lstShopClosingTime'];
    $ShopDuration = $_POST['optShopDuration'];
    $ShopImg1 = '../images/rtxtShopImg1'.$_FILES['avatar']['name'];

    //Validating Imag files

    if(preg_match("!image!", $_FILES['avatar']['type']))
    {
        if(copy($_FILES['avatar'['tmp_name'],$ShopImg1]))
        {
            20:11
        }
    }
    else
    {
          echo'<script> alert("Invalid extension of file") </script> ';
    }
}



?>