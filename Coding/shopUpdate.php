<?php
require_once 'connection.php';
    if(isset($_POST['btnShopUpdate']))
    {
        echo "<script>alert('Hello');</script>";

    }
	else
	{
		echo "<script>alert('Bye');</script>";
	}

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





?>
