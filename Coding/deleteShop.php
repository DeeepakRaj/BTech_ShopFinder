<?php

    require_once 'connection.php';

    if(isset($_POST['btnYesDeleteShop']))
    {
         $query = "SELECT * FROM tblshopregistration";
        $result = mysqli_query($conn, $query);
        while($rows = mysqli_fetch_array($result))
        {
            $id = $rows['SysId'];
                    
            // if($id == )
             {
                // $UId = '1';
            $query1 = "UPDATE `tblshopregistration` SET `RecStatus` = 1 WHERE SysId = $id;";
            //$query_run = mysqli_query($query,$conn);
        
                $result1 = mysqli_query($conn, $query1);
            }
            
        
            echo $id; 
        }
        

        
           
    }
    else
    {
        echo 'NOT able to fetch $row';
    }


?>