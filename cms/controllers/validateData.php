<?php
    //include('../../app/controllers/scripts/session.php');
    include('../../config/conn.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
     
        if(isset($_GET['doc'])){
            parse_str(base64_decode($_GET['doc']), $doc_tmp);
        }else{
            $doc_tmp = array();
        }

        foreach($_POST as $key => $value){
            if(!empty($value)){
                $doc_tmp[$key] = $value;
            }
        }

        // Verifica se o input de productImages foi enviado
        if(!empty($_FILES['productImages']['name'][0])){
            // Loop através de cada imagem e a salva em um diretório temporário
            for($i=0; $i<count($_FILES['productImages']['name']); $i++){
                $tmpFilePath = $_FILES['productImages']['tmp_name'][$i];

                // Verifica se o arquivo é realmente uma imagem
                if (getimagesize($tmpFilePath) !== false) {
                    // Gera um nome de arquivo único para evitar conflitos
                    $newFilePath = "../../public/imgs/products" . uniqid('', true) . '.' . pathinfo($_FILES['productImages']['name'][$i], PATHINFO_EXTENSION);

                    // Move o arquivo temporário para o diretório de destino
                    if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                        // Adiciona o caminho da imagem no array $doc_tmp
                        $doc_tmp['productImages'][] = $newFilePath;
                    }
                }
            }
        }

        $query_string = base64_encode(http_build_query($doc_tmp));
        
        if($_GET['part']==5){ 
            $conn = $connectMongoDB('dogin');

            if($conn){
                $collection = 'produtos';
                $insert = $conn->$collection->insertOne($doc_tmp);
                header("location:../views/homePage.php");
                
            }else{
                var_dump($conn);
            }
        }else{
            header("location:../views/registerProduct.php?part=".$_GET['part']."&doc_tmp=".$query_string);
        }
        
    }
?>