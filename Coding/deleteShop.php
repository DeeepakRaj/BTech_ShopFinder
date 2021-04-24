<?php
    session_start();

    require_once 'connection.php';

    if(isset($_GET['shp_id']))
    {
        $shopDeleteId =$_GET['shp_id'];
        echo $_GET['shp_id'];
        
            // $id = $rows['SysId'];
                    
            // if($id == )
             {
                // $UId = '1';
            $query1 = "UPDATE `tblshopregistration` SET `RecStatus` = 0 WHERE SysId = $shopDeleteId;";
            //$query_run = mysqli_query($query,$conn);
        
                $result1 = mysqli_query($conn, $query1);
            }
            
            
            echo $id; 
           
        
        function_alert("Shop Deleted Successfully!");

        
              
    }
    else
    {
        echo 'NOT able to fetch $row';
    }
#header('Location:myShop3.php'); 
    function function_alert($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}
  
  


?>