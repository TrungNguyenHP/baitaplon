<?php 
    $server = "dongho1.mysql.database.azure.com";
    $user = "dongho";
    $password = "Hieu0411";
    $database = "dong_ho";

    $conn = new mysqli($server, $user, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
