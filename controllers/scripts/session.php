<?php 
    function dados_tmp(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            session_start();
        
            // Verifica se 'doc_tmp' já existe na sessão, se não existir, cria um novo array vazio
            $doc_tmp = isset($_SESSION['doc_tmp']) ? $_SESSION['doc_tmp'] : array();

            // Percorre o conjunto de dados enviados pelo metodo post
            foreach($_POST as $key => $value){
                if(!empty($value)){
                    $doc_tmp[$key] = $value;
                }
            }

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

?>