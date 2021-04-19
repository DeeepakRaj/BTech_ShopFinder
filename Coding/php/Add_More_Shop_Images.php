
<?php
session_start();
/*
include 'database/connection.php';

// echo"Hello!! \n Welcome to php.";
if (isset($_POST['submit'])) {

    //array for Valid Shop Image extension
    $extension = array('jpeg','jpg','png','gif','tiff','psd','eps','ai','indd','raw');

    foreach ($_FILES['txtshopImages']['tmp_name'] as $key => $value) {
         $fileName = $_FILES['txtshopImages']['name'][$key];
        $fileName_tmp = $_FILES['txtshopImages']['tmp_name'][$key];
        echo '<br>';
        //printing extension of files

         $shopImgExt = pathinfo($fileName, PATHINFO_EXTENSION);

         $finalImg='';

        if(in_array($shopImgExt,$extension))
        {
            if(!file_exists('../images/registerShopImages/'.$fileName))
            {
                move_uploaded_file($fileName_tmp,'../images/registerShopImages/'.$fileName);
                $finalImg = $fileName;
            }
            else
            //if file exists then upload it with by appending current system time.
            {
               $fileName = str_replace('.','-',basename($fileName,$shopImgExt));
               $newFileName = $fileName.time().".".$shopImgExt;

               move_uploaded_file($fileName_tmp,'../images/registerShopImages/'.$newFileName);
               $finalImg = $newFileName;              
            }  
            // insert query
            // $insertQry = "INSERT INTO `tblshopregistration`(`ShopImg1`, `ShopImg2`, `ShopImg3`, `ShopImg4`, `ShopImg5`) VALUES ($finalImg)";
            // mysqli_query($conn,$insertQry);

            $insertQry = "INSERT INTO tblshopregistration (ShopImg1) VALUES ($finalImg)";

            mysqli_query($conn,$insertQry);

           // header('Location:../index.html');
        }
        else
        {
            echo'<script> alert("Invalid extension of file") </script> ';
        }
    }
}

?>
*/
 


include 'database/connection.php';

// echo"Hello!! \n Welcome to php.";
if(isset($_POST['submit'])) {

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
            echo $id;            

            $insertQry = "INSERT INTO tblshopimage (SrId,ImgName,ImgUrl) VALUES ('$id','$fileName','$finalImg')";

            $data=mysqli_query($conn,$insertQry);
            echo 'Hello';
            // echo $shopId;

           # header('Location:../index.php');
        }
        else
        {
            echo'<script> alert("Invalid extension of file") </script> ';
        }
    }
}

?>





