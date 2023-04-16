<?php
    session_start();

    if(isset($_SESSION['doc_tmp'])){
        var_dump($_SESSION['doc_tmp']);
        var_dump($_SESSION['doc_tmp']['caminhos_imagens']);

    }else{
        echo "Nenhum documento temporário na sessão.";
    }

    session_write_close();
?>