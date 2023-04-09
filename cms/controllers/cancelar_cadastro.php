<?php
    include("../controllers/scripts/session.php");

    limpar_session_object('doc_tmp');

    header("location:../views/pagina_inicial.php");
?>