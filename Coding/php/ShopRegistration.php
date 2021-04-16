<?php
session_start();
$_SESSION['message'] = '';
include '../php/database/connection.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    { 
        /*
            checking FILES array Data
            print_r($_FILES);die;
        */ 
        //$shopName = $mysqli->real_escape_string($_POST['txtShopName']);
        //$ShopName =  $mysqli->real_escape_string($_POST['txtShopName']);
        $ShopPhoneNumber = $mysqli->real_escape_string($_POST['txtShopPhoneNumber']);
        $ShopDescription = $mysqli->real_escape_string($_POST['txtShopDescription']);
        $ShopAddress = $mysqli->real_escape_string($_POST['txtShopAddress']);
        $ShopLocation = $mysqli->real_escape_string($_POST['txtShopLocation']);
        $ShopPostCode = $mysqli->real_escape_string($_POST['txtShopPostcode']);
        $ShopCategory = $mysqli->real_escape_string($_POST['optShopCategory']);
        $ShopOpeningTime = $mysqli->real_escape_string($_POST['lstShopOpeningTime']);
        $ShopClosingTime = $mysqli->real_escape_string($_POST['lstShopClosingTime']);
        $ShopDuration = $mysqli->real_escape_string($_POST['optShopDuration']);
        // adding image
        $ShopImg1 = $mysqli->real_escape_string('../images/registerShopImages/shopMainImg'.$_FILES['txtShopImg1']['name']);

        //making sure that IMG files are of valid extension

        if(preg_match("!../images/registerShopImages/shopMainImg!",$_FILES['txtShopImg1']['name']))
        {
            //copy ShopImg to Folder
            if(copy($_FILES['txtShopImg1']['tmp_name'],$ShopImg1))
            {
                $_SESSION['txtShopName'] = $shopName;
                $_SESSION['txtShopImg1'] = $ShopImg1;

                // INSERTING DATA

                // $sql = "INSERT INTO ";

                $sql = "INSERT INTO `tblshopregistration`(`ShopImg1`, `ShopName`, `ShopDescription`, `ShopPhone`, `ShopOctime`, `ShopCategary`, `ShopTemp`, `ShopLocation`) VALUES ('$ShopImg1','$ShopName','$ShopDescription','$ShopPhoneNumber','$ShopOpeningTime','$ShopCategory','$ShopDuration','$ShopLocation')";

                // on succesfull query!
                if($mysqli->query($sql) === true)
                {
                    $_SESSION['message'] = 'Shop Registered!';
                    header("location:../index.html");
                }
                else
                {
                    $_SESSION['message'] = "Shop NOT Registered";
                }
            }
            else
            {
                $_SESSION['message'] = "Failed to upload Shop Image!";
            }
        }
        else
        {
            $_SESSION['message'] = "Invalid Image type. Please use PNG, JPG or GIF image file only";
        }

    }

/*
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
    
    }*/
    else
    {
        $_SESSION['message'] = "Failed to pass data!";
        // echo 'Data \n';
    }



?>

