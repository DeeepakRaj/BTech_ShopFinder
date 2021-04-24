<?php
    session_start();
    require_once 'connection.php';

    // fetching shop Categories
    $shopCatSQL = "SELECT * FROM tblcategorytable";
    $shopCat = mysqli_query($conn, $shopCatSQL);

    #echo 'Line 3';
    if(isset($_POST['btnShopRegistration'])) 
    {
        $ShopName =  $conn->real_escape_string($_POST['txtShopName']);
        echo $ShopName;
        $ShopPhoneNumber = $conn->real_escape_string($_POST['txtShopPhoneNumber']);
        $ShopAddress = $conn->real_escape_string($_POST['txtShopAddress']);
        $ShopLocation = $conn->real_escape_string($_POST['txtShopLocation']);
        $ShopPinCode = $conn->real_escape_string($_POST['txtShopPostcode']);
        #echo 'Line 12';
        $ShopDescription = $conn->real_escape_string($_POST['txtShopDescription']);
        $ShopCategory = $conn->real_escape_string($_POST['optShopCategory']);
        #$ShopOtherCategory = $_POST['txtOtherShopCategory'];

        $ShopTiming = $conn->real_escape_string($_POST['txtShopTiming']);
        $ShopDuration = $conn->real_escape_string($_POST['optShopDuration']);
        $ShopImg1 = $_FILES['txtShopImg1'];
        
        // adding image
        $target_dir = "images/registerShopImages/shopMainImg/";
        $target_file = $target_dir . basename($_FILES["txtShopImg1"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        
        $check = getimagesize($_FILES["txtShopImg1"]["tmp_name"]);
            
            if ($check !== false) 
            {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } 
            else 
            {
                echo "File is not an image.";
                $uploadOk = 0;
            }
            
            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            
            // Check file size
            if ($_FILES["txtShopImg1"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            // Allow certain file formats
            if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
            )
             {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["txtShopImg1"]["tmp_name"], $target_file)) {
                    echo "The file " . htmlspecialchars(basename($_FILES["txtShopImg1"]["name"])) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        
          

             $query = "INSERT INTO tblshopregistration (ShopName, ShopPhone, ShopAddress, ShopPinCode, ShopLocation, ShopDescription, ShopCategory, ShopTime, ShopDuration, ShopImg1) VALUES ('$ShopName','$ShopPhoneNumber','$ShopAddress','$ShopPinCode','$ShopLocation','$ShopDescription','$ShopCategory','$ShopTiming', '$ShopDuration', '$target_file')";
            #echo 'Line 23';
            $query_run = mysqli_query($conn, $query);
            #echo 'Line 25';
            echo $query_run;
            if ($query_run) {
                #echo 'Line 28';

                $_SESSION['success'] = 'Shop Registered!';
                echo "<script>alert('Shop Registered Successfully! Want to add more Image to shop?');</script>";
                header('Location:shopRegistration1.php');
            } else {
                #echo 'Line 34';

                $_SESSION['status'] = 'Shop NOT Registered!';
                echo "<script>alert('Failed Data Inserted');</script>";
                header('Location:index.php');
            }
            #echo 'Line 38'; 
        
            
            


        // }
       /* else
        {
            echo "<script>alert('NO button has been clicked');</script>";
        } */
        // $createdDate = date('d-m-y h:i:s');
        // $resStatus = 1;

        
            #echo 'Line 21';
            
            
    } 
    
    else 
    {
        echo 'NOT ISSET';
    }

?>
<!-- 
########################################################################################################################################################################################ADD  MORE SHOP IMAGES##############################################################################-->

<?php

    if(isset($_POST['submit'])) 
    {

        //array for Valid Shop Image extension
        $extension = array('jpeg','jpg','png','gif','tiff','psd','eps','ai','indd','raw');

        foreach ($_FILES['txtshopImages']['tmp_name'] as $key => $value) {
            $fileName = $_FILES['txtshopImages']['name'][$key];
            $fileName_tmp = $_FILES['txtshopImages']['tmp_name'][$key];
            echo '<br>';
            //printing extension of files

            $shopImgExt = pathinfo($fileName, PATHINFO_EXTENSION);

        //  $finalImg='';

            if(in_array($shopImgExt,$extension))
            {
                if(!file_exists('../images/registerShopImages/'.$fileName))
                {
                    move_uploaded_file($fileName_tmp,'../images/registerShopImages/'.$fileName);
                    $finalImg ="../images/registerShopImages/" . $fileName;
                }
                else
                //if file exists then upload it with by appending current system time.
                {
                $fileName = str_replace('.','-',basename($fileName,$shopImgExt));
                $newFileName = $fileName.time().".".$shopImgExt;

                move_uploaded_file($fileName_tmp,'../images/registerShopImages/'.$newFileName);
                $finalImg = "../images/registerShopImages/" . $newFileName;              
                }  
                // insert query
                // $insertQry = "INSERT INTO `tblshopregistration`(`ShopImg1`, `ShopImg2`, `ShopImg3`, `ShopImg4`, `ShopImg5`) VALUES ($finalImg)";
                // mysqli_query($conn,$insertQry);

                //echo $finalImg;
                
                // $insertQry = "INSERT INTO tblshopregistration (ShopImg1) VALUES ('$finalImg')";
                
                $id  = $_SESSION['shopId'];
                #echo $id;            

                $insertQry = "INSERT INTO tblshopimage (SrId,ImgName,ImgUrl) VALUES ('$id','$fileName','$finalImg')";

                $data=mysqli_query($conn,$insertQry);
                // echo 'Hello';
                // echo $shopId;

                header('Location:index.php');
            }
            else
            {
                echo'<script> alert("Invalid extension of file") </script> ';
            }
        }
    }
    else
    {

    }

?>