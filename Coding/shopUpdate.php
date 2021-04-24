<?php

session_start();
// echo 'Hello';
require_once 'connection.php';


// fetching Data from DB
if (isset($_GET['shp_id'])) {
	$shopEditId = $_GET['shp_id'];
	// $shopEditId =$_SESSION['shopId'];
	//echo $shopEditId;



	$query = "SELECT * FROM `tblshopregistration` where SysId = $shopEditId";
	$query_run = mysqli_query($conn, $query);
} else {
	echo '<script>
            alert("Edit id NOT Fetched!");
          </script>';
}

//     session_start();
// require_once 'connection.php';

//         // fetching Data from DB
//     if(isset($_GET['shp_id']))
//     {
//         $shopUpdateId =$_GET['shp_id'];
//         //$shopUpdateId =$_SESSION['shopId'];
    
    


//      $query = "SELECT * FROM `tblshopregistration` where SysId = $shopUpdateId";
//      $query_run = mysqli_query($conn,$query);
//      echo '<script>
//                 alert("Updated shop ID  Fetched");
//               </script>';

//     }
//     else
//     {
//         echo '<script>
//                 alert("Updated shop ID not Fetched");
//               </script>';
        
//     }

     $shopCatSQL = "SELECT * FROM tblcategorytable";
     $shopCat = mysqli_query($conn, $shopCatSQL);

    if(isset($_POST['btnShopUpdate']))
    {   
        // $id = $_POST['shp_id'];
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
        $ShopImg1 = $_POST['txtShopImg1'];

        $query = "UPDATE tblshopregistration SET ShopName = '$ShopName', 
                                                 ShopPhone = '$ShopPhoneNumber', 
                                                 ShopAddress = '$ShopAddress', 
                                                 ShopPinCode = '$ShopPinCode', 
                                                 ShopLocation = '$ShopLocation', 
                                                 ShopDescription = '$ShopDescription', 
                                                 ShopCategory = '$ShopCategory', 
                                                 ShopTime = '$ShopTiming', 
                                                 ShopDuration = '$ShopDuration', 
                                                 ShopImg1 = '$ShopImg1' 
                WHERE SysId = '$shopUpdateId' ";

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
        echo $shopEditId;
    

        $query_run = mysqli_query($conn,$query);
        if($query_run)
        {
            echo "<script>alert('Query Executed!');</script>";
        }
        else
        {
            echo "<script>alert('Query NOT Executed!');</script>";
        }


         

    }
	else
	{
		echo "<script>alert('Bye');</script>";
	}

	





?>
