<?php


session_start();

if (isset($_POST['submit']))
{
    //creating session for perserving form data.

    foreach($_POST as $key => $value )
    {
        $_SESSION['info'][$key] = $value;
    }

    $key = array_keys($_SESSION['info']);

    if(in_array('submit', $keys))
    {
        unset($_SESSION['info']['submit']);
    }

}
