<?php

session_start();

if (isset($_POST['next']))
{
    //creating session for perserving form data.

    foreach($_POST as $key => $value )
    {
        $_SESSION['info'][$key] = $value;
    }

    $keys = array_keys($_SESSION['info']);

    if(in_array('next', $keys))
    {
        unset($_SESSION['info']['next']);
    }

    header("Location:../Add_More_Shop_Images.html");
}

?>
