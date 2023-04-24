<?php
    include("../../config/conn.php");
    include("../../app/views/components/sectionHeader.php");
    
    function createProductList($title, $bg, $products, $buttonId="none"){

        echo "<div class='productList $bg'>".
                "<div class='productListHead'>".
                    "<h2 class='title'>$title</h2>".
                    "<div class='paginationButton'>" .
                        "<button class='leftButton btnPrev".$buttonId."'>" .
                            "<img src='../../public/imgs/arrow.svg' alt='Voltar'>" .
                        "</button>" .
                        "<button class='rightButton btnNext".$buttonId."'>" .
                            "<img src='../../public/imgs/arrow.svg' alt='Foward'>" .
                        "</button>" .
                    "</div>".
                "</div>".
                "<div class='container productsWrapper'>";
        
        
        foreach($products as $key){
            $imagem = $key['productImages'][0];
            createProductCardMask($key['_id'], $imagem, $key['productName'], $key['brandName'], $key['productWeight'], $key['productPrice']);
        }
        
        echo "</div></div>";
    }

?>