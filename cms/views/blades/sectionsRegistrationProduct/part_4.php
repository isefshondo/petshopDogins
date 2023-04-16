<?php
    parse_str(base64_decode($_GET['doc_tmp']), $data);
    
    include("part_1.php");
    include("part_2.php");
    include("part_3.php");
?>