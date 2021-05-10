<?php
$conn = mysqli_connect('localhost','root','','shopfinder');

    if (!$conn) {
    die("Database Connection failed: " . mysqli_connect_error());
    }
    echo "Database Connected successfully";


?>