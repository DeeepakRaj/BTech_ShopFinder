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
        //$ShopImg1 = '../images/registerShopImages/shopMainImg'.$_FILES['txtShopImg1']['name'];

        $sql = "INSERT INTO tblshopregistration(ShopName, ShopPhoneNumber, ShopDescription, ShopAddress, ShopLocation, ShopPostCode, ShopCategory, ShopOpeningTime, ShopClosingTime, ShopDuration) VALUES ('$ShopName', '$ShopPhoneNumber', '$ShopDescription','$ShopAddress','$ShopLocation','$ShopPostCode','$ShopCategory','$ShopOpeningTime','$ShopClosingTime','$ShopDuration')";

        // $sql = "INSERT INTO tblshopregistration(ShopName, ShopPhoneNumber, ShopDescription, ShopAddress, ShopLocation, ShopPostCode, ShopCategory, ShopOpeningTime, ShopClosingTime, ShopDuration, ShopImg1) VALUES ('$ShopName', '$ShopPhoneNumber', '$ShopDescription','$ShopAddress','$ShopLocation','$ShopPostCode','$ShopCategory','$ShopOpeningTime','$ShopClosingTime','$ShopDuration','$ShopImg1')";

        if(mysqli_query($conn,$sql))
        {
            
            echo '<script>alert("Shop Registered!")</script>';
        }
        else
        {
            
            echo "Error:\n" . $sql . "<br>" . mysqli_error($conn);
        }


        //Validating Imag files
    /*
        if(preg_match("!image!", $_FILES['txtShopImg1']['type']))
        {
            if(copy($_FILES['txtShopImg1']['tmp_name'],$ShopImg1))
            {
                $_SESSION['txtShopName'] = $ShopName;
                $_SESSION['txtShopImg1'] = $ShopImg1;
                echo'Line 28';
                $sql = "INSERT INTO tblshopregistration(ShopName, ShopPhoneNumber, ShopDescription, ShopAddress, ShopLocation, ShopPostCode, ShopCategory, ShopOpeningTime, ShopClosingTime, ShopDuration, ShopImg1) VALUES ('$ShopName', '$ShopPhoneNumber', '$ShopDescription','$ShopAddress','$ShopPostCode','$ShopCategory','$ShopOpeningTime','$ShopClosingTime','$ShopDuration','$ShopImg1')";
                echo 'Line 30';
                // $insertQry = "INSERT INTO tblshopimage (ImgName,ImgUrl) VALUES ('$fileName','$finalImg')";

                // $data=mysqli_query($conn,$insertQry);
                // if(mysqli_query($conn,$sql))
                // {
                //     echo 'Line 36';
                //     echo '<script>alert("Shop Registered!")</script>';
                // }
                // else
                // {
                //     echo 'Line 41';
                //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                // }
            }
            else
            {
                echo '<script>alert("Falied to Upload file!")</script>';
            }
        }
        else
        {
            echo'<script> alert("Invalid extension of file") </script> ';
        } 
    */
    }
    else
    {
        echo 'error in isset variable\n';
    }



?>

