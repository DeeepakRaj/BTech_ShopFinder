<?php

session_start();
// echo 'Hello';
require_once 'connection.php';


     $shopCatSQL = "SELECT * FROM tblcategorytable";
     $shopCat = mysqli_query($conn, $shopCatSQL);

    if(isset($_POST['btnShopUpdate']))
    {   
         $id = $conn->real_escape_string($_POST['shopid']);
        $ShopName =  $conn->real_escape_string($_POST['txtShopName']);
        $ShopPhoneNumber = $conn->real_escape_string($_POST['txtShopPhoneNumber']);
        $ShopDescription = $conn->real_escape_string($_POST['txtShopDescription']);
        $ShopAddress = $conn->real_escape_string($_POST['txtShopAddress']);
        $ShopLocation = $conn->real_escape_string($_POST['txtShopLocation']);
        $ShopPinCode = $conn->real_escape_string($_POST['txtShopPostcode']);
        #echo 'Line 12';
        $ShopCategory = $conn->real_escape_string($_POST['optShopCategory']);
        #$ShopOtherCategory = $_POST['txtOtherShopCategory'];

        $ShopTiming = $conn->real_escape_string($_POST['txtShopTiming']);
        $ShopDuration = $conn->real_escape_string($_POST['optShopDuration']);
        // adding image
        #$ShopImg1 =$conn->real_escape_string('../images/registerShopImages/shopMainImg'.$_FILES['txtShopImg1']['name']);
        $ShopImg1 = $conn->real_escape_string($_POST['txtShopImg1']);

        $query = "UPDATE tblshopregistration SET ShopName = IFNULL('$ShopName','NA'), 
                                                 ShopPhone = IFNULL('$ShopPhoneNumber','NA'),
                                                 ShopAddress = IFNULL('$ShopAddress','NA'),
                                                ShopPincode = IFNULL('$ShopPinCode','NA'),
                                                 ShopLocation = IFNULL('$ShopLocation','NA'),
                                                 ShopDescription = IFNULL('$ShopDescription','NA'),
                                               ShopCategory = IFNULL('$ShopCategory','NA'),
                                                 ShopOctime = IFNULL('$ShopTiming','NA'),
                                                 ShopTemp = IFNULL('$ShopDuration','NA'),
                                                 ShopImg1 = IFNULL('$ShopImg1','NA')
                WHERE SysId =$id ";

        // $query = "UPDATE `tblshopregistration` SET `ShopName`=$ShopName,`ShopPhone`=$ShopPhoneNumber,`ShopAddress`=$ShopAddress,`ShopPinCode`=$ShopPinCode,`ShopLocation`=$ShopLocation,`ShopDescription`=$ShopDescription,`ShopCategory`=$ShopCategory,`ShopTime`=$ShopTiming,`ShopDuration`=$ShopDuration,`ShopImg1`=$ShopImg1 WHERE 'SysId' = $shopUpdateId";
        
        echo $ShopName;?> <br> <?php
        echo $ShopPhoneNumber; ?> <br> <?php
        echo $ShopAddress;?> <br> <?php
        echo $ShopPinCode; ?> <br> <?php
        echo $ShopLocation; ?> <br> <?php
        echo $ShopDescription; ?> <br> <?php
        echo $ShopCategory;?> <br> <?php
        echo $ShopTiming; ?> <br> <?php
        echo $ShopDuration; ?> <br> <?php
        echo $ShopImg1;?> <br> <?php
        echo $id;
    

        $query_run = mysqli_query($conn,$query);
        if($query_run)
        {
            echo '<script>alert("Query Executed!");
            window.location.href="myShops.php";
            </script>';
        }
        else
        {
            echo '<script>alert("Query NOT Executed!");
            window.location.href="myShops.php";
            </script>';
        }


         

    }
	else
	{
        echo '<script>alert("Bye");
        window.location.href="myShops.php";
        </script>';
	}

	





?>
