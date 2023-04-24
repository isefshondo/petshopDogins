<?php
    include("../../config/conn.php");

    $collection = $db->products;

    $updateFields = [];
    $doc_tmp = [];

    $data = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($_POST['id'])]);

    foreach($_POST as $key => $value){
        if($key != 'id' && $key != 'productImages'){
            $updateFields[$key] = $value;
        }
    }
    
    if(isset($_FILES['productImages'])) {
        // Loop através de cada imagem e a codifica em base64
        $doc_tmp = [];
        for ($i = 0; $i < count($_FILES['productImages']['name']); $i++) {
            $tmpFilePath = $_FILES['productImages']['tmp_name'][$i];
    
            // Verifica se o arquivo é realmente uma imagem
            if (getimagesize($tmpFilePath) !== false) {
                // Lê o conteúdo do arquivo e codifica em base64
                $content = file_get_contents($tmpFilePath);
                $base64 = base64_encode($content);
    
                // Adiciona a imagem codificada em base64 no array $doc_tmp
                $doc_tmp[] = $base64;
            }
        }
    
        // Converte as imagens em base64 para BSON Binary e adiciona no array de atualização
        $binaries = [];
        foreach ($doc_tmp as &$base64) {
            $bin = new MongoDB\BSON\Binary($base64, MongoDB\BSON\Binary::TYPE_GENERIC);
            $binaries[] = $bin;
        }
    
        // Adiciona o array de imagens no array de atualização
        $updateFields['productImages'] = $binaries;
    }
    
    $result = $collection->updateOne(
        ['_id' => new MongoDB\BSON\ObjectID($_POST["id"])], 
        ['$set' => $updateFields]
    );

    if($result->getModifiedCount() > 0){
        echo 'Atualização realizada com sucesso!';
    }else{
        echo 'Não foi possível atualizar o documento.';
    }

    //header("location:../views/homePage.php")
?>