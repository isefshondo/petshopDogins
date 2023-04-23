<?php
    include("../../config/conn.php");
    
    function createProductList($title, $color, $products){

        echo "<div class='productList' style='background-color:$color'>".
                "<h2 class='title'>$title</h2>".
                "<div class='container'>";
        
        foreach($products as $key){
            $imagem = $key['productImages'][0];
            createProductCardMask($key['_id'], $imagem, $key['productName'], $key['brandName'], $key['productWeight'], $key['productPrice']);
        }
        
        echo "</div></div>";
    }

?>