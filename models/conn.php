<?php
    include("../../vendor/vendor/autoload.php");

    $client = new MongoDB\Client('mongodb://localhost:27017');
    $db = $client->dogin;

    $create = fn($collection, $doc) => $db->$collection->insertOne($filter, $doc);
    $readOne = fn($collection, $filter) => (array) $db->$collection->findOne($filter)->getArrayCopy();
    $updateOne = fn($collection, $filter, $update) => $db->$collection->updateOne($filter, $update)->getModifiedCount();
    $delete = fn($collection, $filter) => $db->$collection->deleteOne($filter)->getDeletedCount();
    $count_docs = fn($collection) => $db->$collection->countDocuments();
?>