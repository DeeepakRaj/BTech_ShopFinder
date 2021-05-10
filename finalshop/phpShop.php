<?php
//session_start();
include("auth.php");
require_once 'connection.php';

// fetching shop Categories
$shopCatSQL = "SELECT * FROM tblcategorytable";
$shopCat = mysqli_query($conn, $shopCatSQL);

#echo 'Line 3';
if (isset($_POST['btnShopRegistration'])) {
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
    $fileName = $_FILES['txtShopImg1']['name'];
    $fileName_tmp = $_FILES['txtShopImg1']['tmp_name'];
    echo '<br>';
    echo '<br>';
    echo $fileName;
    echo '<br>';
    echo '<br>';

    echo '<br>';
    echo '<br>';
    echo $fileName_tmp;
    echo '<br>';
    echo '<br>';
    $shopImgExt = pathinfo($fileName, PATHINFO_EXTENSION);
    $extension = array('jpeg', 'jpg', 'png', 'gif', 'tiff', 'psd', 'eps', 'ai', 'indd', 'raw');

    if ($shopImgExt && $extension) {
        if (!file_exists('images/registerShopImages/shopMainImg/' . $fileName)) {
            move_uploaded_file($fileName_tmp, 'images/registerShopImages/shopMainImg/' . $fileName);
            $finalImg = "images/registerShopImages/shopMainImg/" . $fileName;


        } else
        //if file exists then upload it with by appending current system time.
        {
            $fileName = str_replace('.', '-', basename($fileName, $shopImgExt));
            $newFileName = $fileName . time() . "." . $shopImgExt;

            move_uploaded_file($fileName_tmp, 'images/registerShopImages/shopMainImg/' . $newFileName);
            $finalImg = "images/registerShopImages/shopMainImg/" . $newFileName;

                        echo '<br>';
            echo '<br>';
            echo $finalImg;
            echo '<br>';
            echo '<br>';
        }
    }


    /*  
            // adding image
            $target_dir = "images/registerShopImages/shopMainImg/";
            $target_file = $target_dir . basename($_FILES["txtShopImg1"]["name"]);
            // $newTargetFile = $target_file.time().".".$imageFileType;
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            echo '<br>';
            echo '<br>';
            echo $target_file;
            echo '<br>';
            echo '<br>';
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
                    $uploadOk = 1;
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
        */



        $uid=$_SESSION["uid"];
        $query = "INSERT INTO tblshopregistration (ShopName, ShopPhone, ShopAddress, ShopPincode, ShopLocation, ShopDescription, ShopCategory, ShopOctime, ShopTemp, ShopImg1, UId, CreatedUserID)  VALUES ('$ShopName','$ShopPhoneNumber','$ShopAddress','$ShopPinCode','$ShopLocation','$ShopDescription','$ShopCategory','$ShopTiming', '$ShopDuration', '$finalImg', '$uid', '$uid')";
        $query_run = mysqli_query($conn, $query);
    #echo 'Line 25';
    echo $query_run;
    $this_id = mysqli_insert_id($conn);
    $_SESSION["sid"]=$this_id;
    if ($query_run) {
        #echo 'Line 28';

        $_SESSION['success'] = 'Shop Registered!';
        echo "<script>alert('Shop Registered Successfully! Want to add more Image to shop?');
        window.location.href = 'Add_More_Shop_Images.php';
        </script>";
    } else {
        #echo 'Line 34';

        $_SESSION['status'] = 'Shop NOT Registered!';
        echo "<script>alert('Failed Data Inserted');
        window.location.href = 'shopRegistration1.php';
        </script>";
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


} else {
    echo 'Shop Registraion NOT ISSET';
}

?>

<?php
########################################################################################################################################################################################ADD  MORE SHOP IMAGES##############################################################################-->
