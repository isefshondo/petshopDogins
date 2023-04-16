<?php
    include("../../controllers/scripts/session.php");

    session_start();

    $data = $_SESSION['doc_tmp'] ?? "";

    session_write_close();

    if(isset($data['caminhos_imagens'])){
        foreach($data['caminhos_imagens'] as $file){
            deleteFile($file);
            echo $file;
            var_dump($file);
        }
    }

    limpar_session_object('doc_tmp');

    header("location:../views/pagina_inicial.php");
?>