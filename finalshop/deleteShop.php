<?php
    session_start();

    require_once 'connection.php';
   
    if(isset($_GET['shp_id']))
    {
      $Id=$_GET['shp_id'];
     echo $Id;
      $sql = "UPDATE tblshopregistration SET RecStatus='0' WHERE SysId=$Id";

        if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Record updated successfully");
        window.location.href="myShops.php";
      
         	</script>';
           
        } else {

          echo '<script>alert("Error updating record: " );
          window.location.href="myShops.php";
          </script>';
         
      
        }
  }
  else
  {
    echo '<script>alert("Shop Id Not Found");
    window.location.href="myShops.php";
    </script>';
    
  }
?>