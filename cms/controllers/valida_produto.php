<?php
    include('../../controllers/scripts/session.php');

    dados_tmp();

    header("location:../views/novo_produto.php?part=".$_GET['part']);
?>