<?php
// echo "Hello";
require_once 'connection.php';
if(isset($_POST['submit']))
    {
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
        $ShopImg1 =$conn->real_escape_string('../images/registerShopImages/shopMainImg'.$_FILES['txtShopImg1']['name']);

		// $createdDate = date('d-m-y h:i:s');
		// $resStatus = 1;



		#echo 'Line 21';
        $query = "INSERT INTO tblshopregistration (ShopName, ShopPhone, ShopAddress, ShopPinCode, ShopLocation, ShopDescription, ShopCategory, ShopTime, ShopDuration, ShopImg1) VALUES ('$ShopName','$ShopPhoneNumber','$ShopAddress','$ShopPinCode','$ShopLocation','$ShopDescription','$ShopCategory','$ShopTiming', '$ShopDuration', '$ShopImg1')";
		#echo 'Line 23';
		$query_run = mysqli_query($conn,$query );
        #echo 'Line 25';
		if($query_run)
        {
			#echo 'Line 28';
			
            $_SESSION['success'] = 'Shop Registered!';
            echo "<script>alert('Shop Registered Successfully! Want to add more Image to shop?');</script>";
			#header('Location:Add_More_Shop_Images.php');
        }
        else
        {
			#echo 'Line 34';
			
            $_SESSION['status'] = 'Shop NOT Registered!';
            echo "<script>alert('Failed Data Inserted');</script>";
			#header('Location:index.php');
        }
    #echo 'Line 38';  

    }
	else
	{
		//echo 'NOT ISSET';
	}

?>


<html>
    <body>
        
        <table class="table table-bordered" width="100%" cellspacing = "0%">
            <thead>
                <tr>
                    <th> SysID </th>
                    <th> CreatedDate </th>
                    <th> CreatedUser </th>
                    <th> ModifiedDate </th>
                    <th> ModifiedUserID </th>
                    <th> RecStatus </th>
                    <th> ShopName </th>
                    
                    <th> ShopPhone </th>
                    <th> ShopAddress </th>
                    <th> ShopPinCode </th>
                    <th> ShopLocation </th>
                    <th> ShopDescription </th>
                    <th> ShopCategory </th>
                    <th> ShopTime </th>
                    <th> ShopDuration </th>
                    <th> ShopImg1 </th>

                </tr> 
            </thead>

            <tbody>
                <?php

                echo $query;
                 
                    if(mysqli_num_rows($query_run) > 0)
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                            ?>
                        
                        <tr>
                            <td> <?php echo $row['SysID']; ?></td>
                            <td> <?php echo $row['CreatedDate']; ?></td>
                            <td> <?php echo $row['CreatedUserID']; ?></td>
                            <td> <?php echo $row['ModifiedUserID']; ?></td>
                            <td> <?php echo $row['RecStatus']; ?></td>
                            <td> <?php echo $row['ShopName']; ?></td>
                            <td> <?php echo $row['ShopPhone']; ?></td>
                            <td> <?php echo $row['ShopAddress']; ?></td>
                            <td> <?php echo $row['ShopPinCode']; ?></td>
                            <td> <?php echo $row['ShopLocation']; ?></td>
                            <td> <?php echo $row['ShopDescription']; ?></td>
                            <td> <?php echo $row['ShopCategory']; ?></td>
                            <td> <?php echo $row['ShopTime']; ?></td>
                            <td> <?php echo $row['ShopDuration']; ?></td>
                            <td> <?php echo $row['ShopImg1']; ?></td>
                            <td>
                                <form action=".YTcode.php" method="POST">
                                    <input type="text" name="edit_id" value="echo <?php echo $row['id']; ?>">
                                    <button type="submit" name="btnShopEdit" value="EDIT"></button>
                                </form>
                            </td>
                            <td>
                                <button type="submit" name="btnShopDelete" value="Delete"></button>
                            </td>
                        </tr>
                        <?php
                        }
                    }
                    else
                    {
                        echo "NO Record";
                    }

                ?>
            </tbody>
        </table>
    </body>
</html>