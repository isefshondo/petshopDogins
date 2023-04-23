<?php
    include("../../config/conn.php");

    $collection = $db->products;

    $result = $collection->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_POST["id"])]);

    if($result->getDeletedCount() === 1){
        echo "Documento excluído com sucesso";
    }else{
        echo "Não foi possível excluir o documento";
    }

    header("location:../views/homePage.php");
?>