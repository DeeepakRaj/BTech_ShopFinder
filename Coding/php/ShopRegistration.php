<?php

// echo"Hello!! \n Welcome to php.";
if (isset($_POST['submit'])) {
    foreach ($_FILES['txtShopImages']['tmp_name'] as $key => $value) {
        echo $filename = $_FILES['txtShopImages']['name'][$key];
        $filename_tmp = $_FILES['txtShopImages']['tmp_name'][$key];
        echo '<br>';
    }
}
