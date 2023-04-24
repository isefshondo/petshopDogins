<?php
    include("composer/vendor/autoload.php");

    $db =  (new MongoDB\Client("mongodb://localhost:27017"))->selectDatabase('dogin');
    //$select_db = fn($conn, $name_db) => $conn->$name_db;
    //$disconnectMongoDB = fn($conn) => $conn->getManager()->close();
?>