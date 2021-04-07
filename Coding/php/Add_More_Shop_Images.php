<?php


session_start();
if (isset($_POST['next']))
{
    echo $_SESSION['info']['txtShopName'];
    foreach($_POST as $key => $value )
    {
        $_SESSION['info'][$key] = $value;
    }

    $key = array_keys($_SESSION['info']);

    if(in_array('next', $keys))
    {
        unset($_SESSION['info']['next']);
    }
    echo "<pre>";
    print_r ($_SESSION['info']);
    echo "</pre>";
    // header("Location:../index.html");

}


?>


