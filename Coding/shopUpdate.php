<?php
require_once 'connection.php';

        // fetching Data from DB
    if(isset($_GET['shp_id']))
    {
        $shopUpdateId =$_GET['shp_id'];
        //$shopEditId =$_SESSION['shopId'];
    //cho $shopEditId;
    


     $query = "SELECT * FROM `tblshopregistration` where SysId = $shopUpdateId";
     $query_run = mysqli_query($conn,$query);

    }
    // else
    // {
    //     echo '<script>
    //             alert("Edit Button Not Clicked!");
    //           </script>';
        
    // }

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
        
        $ShopImg1 = getimagesize($_FILES["txtShopImg1"]["tmp_name"]);

        $query = "UPDATE tblshopregistration SET ShopName = '$ShopName', ShopPhone = '$ShopPhoneNumber', ShopAddress = '$ShopAddress', ShopPinCode = '$ShopPinCode', ShopLocation = '$ShopLocation', ShopDescription = '$ShopDescription', ShopCategory = '$ShopCategory', ShopTime = '$ShopTiming', ShopDuration = '$ShopDuration', ShopImg1 = '$ShopImg1' WHERE SysId = $shopUpdateId ";

        $query_run = mysqli_query($query, $conn);


        // echo "<script>alert('Hello');</script>";

    }
	else
	{
		echo "<script>alert('Bye');</script>";
	}

	





?>
