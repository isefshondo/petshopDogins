<?php
    include("../../controllers/scripts/session.php");

    session_start();

    if(isset($_SESSION['doc_tmp'])){
        unset($_SESSION['doc_tmp']);
    }

    session_write_close();
    
    header("location:../views/homePage.php");
?>