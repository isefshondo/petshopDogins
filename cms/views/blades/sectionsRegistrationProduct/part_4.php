<?php
     session_start();
     $data = $_SESSION['doc_tmp'];
     session_write_close();
     
    include("part_1.php");
    include("part_2.php");
    include("part_3.php");
?>