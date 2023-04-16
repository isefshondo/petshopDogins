<?php
    include("composer/vendor/autoload.php");

    $connectMongoDB = fn($db) => (new MongoDB\Client("mongodb://localhost:27017"))->selectDatabase($db);
    //$select_db = fn($conn, $name_db) => $conn->$name_db;
    //$disconnectMongoDB = fn($conn) => $conn->getManager()->close();

    $create = fn($db, $collection, $doc) => $db->$collection->insertOne($doc);
    $readOne = fn($db, $collection, $filter) => (array) $db->$collection->findOne($filter)->getArrayCopy();
    $read = fn($db, $collection, $filter) => (array) $db->$collection->find($filter);
    $updateOne = fn($db, $collection, $filter, $update) => $db->$collection->updateOne($filter, $update);
    $delete = fn($collection, $filter) => $db->$collection->deleteOne($filter)->getDeletedCount();
    $count_docs = fn($collection) => $db->$collection->countDocuments();
?>