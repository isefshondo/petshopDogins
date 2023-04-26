<?php
session_start();
include('../../config/conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_SESSION['doc_tmp'])) {
        $doc_tmp = $_SESSION['doc_tmp'];
    } else {
        $doc_tmp = array();
    }

    // Adiciona apenas os novos campos no array $doc_tmp
    foreach ($_POST as $key => $value) {
        if (!empty($value) && !isset($doc_tmp[$key])) {
            $doc_tmp[$key] = $value;
        }
    }

    // Verifica se o input de productImages foi enviado
    if(!empty($_FILES['productImages']['name'][0])){
        // Loop através de cada imagem e a codifica em base64
        for ($i = 0; $i < count($_FILES['productImages']['name']); $i++) {
            $tmpFilePath = $_FILES['productImages']['tmp_name'][$i];

            // Verifica se o arquivo é realmente uma imagem
            if (getimagesize($tmpFilePath) !== false) {
                // Lê o conteúdo do arquivo e codifica em base64
                $content = file_get_contents($tmpFilePath);
                $base64 = base64_encode($content);

                // Adiciona a imagem codificada em base64 no array $doc_tmp
                $doc_tmp['productImages'][] = $base64;
            }
        }
    }else{
        if($_GET['part'] == 4){
            // Carrega imagem padrão
            $defaultImagePath = '../../public/imgs/sem_imagem.jpg';
            $content = file_get_contents($defaultImagePath);
            $base64 = base64_encode($content);
            $doc_tmp['productImages'][] = $base64;
        }
    }

    $_SESSION['doc_tmp'] = $doc_tmp;

    if ($_GET['part'] == 5) {
        $collection = $db->products;

        // Converte as imagens em base64 para BSON Binary e adiciona no documento
        foreach ($doc_tmp['productImages'] as &$base64) {
            $bin = new MongoDB\BSON\Binary($base64, MongoDB\BSON\Binary::TYPE_GENERIC);
            $base64 = $bin;
        }

        unset($_SESSION['doc_tmp']);
        
        $insert = $collection->insertOne($doc_tmp);
        
           
        header("location:../views/homePage.php");
        

    } else {
        header("location:../views/registerProduct.php?part=" . $_GET['part']);
        exit;
    }
}
?>