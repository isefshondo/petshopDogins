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

        // Verifica se o input de imagens_produto foi enviado
        if(!empty($_FILES['imagens_produto']['name'][0])){
            // Loop através de cada imagem e a salva em um diretório temporário
            for($i=0; $i<count($_FILES['imagens_produto']['name']); $i++){
                $tmpFilePath = $_FILES['imagens_produto']['tmp_name'][$i];

                // Verifica se o arquivo é realmente uma imagem
                if (getimagesize($tmpFilePath) !== false) {
                    // Gera um nome de arquivo único para evitar conflitos
                    $newFilePath = "../../public/imgs/products" . uniqid('', true) . '.' . pathinfo($_FILES['imagens_produto']['name'][$i], PATHINFO_EXTENSION);

                    // Move o arquivo temporário para o diretório de destino
                    if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                        // Adiciona o caminho da imagem no array $doc_tmp
                        $doc_tmp['imagens_produto'][] = $newFilePath;
                    }
                }
            }
        }

        $query_string = base64_encode(http_build_query($doc_tmp));
        
        if($_GET['part']==5){ 
            $conn = $connectMongoDB('dogin');
            //$db = $select_db($conn, 'dogin');
            if($conn){
                echo "ok<br>";
                //var_dump($conn);
                //echo "<br><br>";
                //var_dump($db);
                
                //echo "<br><br>";
                //$create($conn, 'produtos', $doc_tmp);
                $collection = 'produtos';
                $insert = $conn->$collection->insertOne($doc_tmp);

                echo "insert <br><br>:";
                var_dump($insert);

              /*  var_dump($doc_tmp);
                
                echo "<br><br>";
                var_dump($conn->getManager());
                
                echo "<br><br>";
                $disconnectMongoDB($conn);

                $read = $readOne($conn, 'produtos', ['categoria_produto' => 'food']);
                var_dump($read);
                echo "<br><br>" . $read['categoria_produto'];

                $updateOne($conn, 'produtos', ['categoria_produto' => 'food'], ['categoria_produto' => 'acessories']);

                $read = $readOne($conn, 'produtos', ['categoria_produto' => 'acessories']);

                echo "<br><br>" . $read['categoria_produto'];
            */
                
            }else{
                var_dump($conn);
            }
        }else{
            header("location:../views/registerProduct.php?part=".$_GET['part']."&doc_tmp=".$query_string);
        }
        
    }
?>