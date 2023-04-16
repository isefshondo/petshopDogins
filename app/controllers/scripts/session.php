<?php 
    function dados_tmp(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            session_start();
        
            // Verifica se 'doc_tmp' já existe na sessão, se não existir, cria um novo array vazio
            $doc_tmp = isset($_SESSION['doc_tmp']) ? $_SESSION['doc_tmp'] : array();

            $doc_tmp['caminhos_imagens'] = isset($_SESSION['caminhos_imagens']) ? $_SESSION['caminhos_imagens'] : null;


            // Percorre o conjunto de dados enviados pelo metodo post
            foreach($_POST as $key => $value){
                if(!empty($value)){
                    $doc_tmp[$key] = $value;
                }
            }

            salvar_imagem();

//            var_dump($_FILES['imagens_produto']);
//            var_dump($doc_tmp);
//            $doc_tmp['caminhos_imagens'] = $_SESSION['caminhos_imagens'];
            $_SESSION['doc_tmp'] = $doc_tmp;

            session_write_close();
        }
    }

    function exibir_dados($inputs){
        session_start();

        $data = [];

        if(isset($_SESSION['doc_tmp'])){
            foreach($inputs as $key){
                $data[$key] = $_SESSION['doc_tmp'][$key] ?? "";        
            }
        }

        session_write_close();

        return $data;
    }
    
    function limpar_session_object($object){
        session_start();

        unset($_SESSION[$object]);

        session_write_close();
    }
    
    /*
        function verifica_etapa(){
        session_start(); 

        $etapa = $_SESSION['doc_tmp']['etapa'] ?? 0;
        $class = ["d-none", "d-none", "d-none"];
        $class[$etapa] = "";

        session_write_close();

        return $class;
    }*/

    function salvar_imagem(){
        if(isset($_FILES['imagens_produto'])) {
            $imagens_produto = $_FILES['imagens_produto'];
            $caminhos = [];
        
            // Itera sobre o array de imagens
            foreach($imagens_produto['name'] as $index => $nome_arquivo) {
                $caminho_temporario = $imagens_produto['tmp_name'][$index];
                $tamanho_arquivo = $imagens_produto['size'][$index];
        
                // Define o nome do arquivo com base no timestamp e no nome original do arquivo
                $novo_nome_arquivo = time() . '-' . $nome_arquivo;
        
                // Define o caminho para onde o arquivo será movido
                $caminho_destino = '../../views/assets/imgs/uploads/' . $novo_nome_arquivo;
        
                // Move o arquivo para o caminho de destino
                if(move_uploaded_file($caminho_temporario, $caminho_destino)) {
                    // Salva o caminho do arquivo em um array para uso posterior
                    $caminhos[] = $caminho_destino;
                } else {
                    // Handle error
                }
            }
        
            // Salva o array de caminhos na sessão ou no banco de dados, como você desejar
            $_SESSION['caminhos_imagens'] = $caminhos;
        }      
    }
  
    function deleteFile($file){
        if(file_exists($file)) {
            unlink($file);
        }else{
            echo "não existe";
            echo $file;
        }
    }

?>