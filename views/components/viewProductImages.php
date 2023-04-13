<?php
    function createProductImageViewer(){
        echo "<div class='viewProductImages'>".
                "<div class='otherProductImages'>".
                    "<figure class='otherProductImages_item active'>".
                        "<img class='otherProductImage' src='assets/imgs/products/unicornio.jpg' alt='Fantasia de Únicornio'>".
                    "</figure>".
                    "<figure class='otherProductImages_item'>".
                        "<img class='otherProductImage' src='assets/imgs/products/leao.jpg' alt='Fantasia de Leão'>".
                    "</figure>".
                    "<figure class='otherProductImages_item void'></figure>".
                    "<figure class='otherProductImages_item void'></figure>".
                    "<figure class='otherProductImages_item void'></figure>".
                "</div>".
                "<figure id='viwerProductImage'><img src='assets/imgs/products/unicornio.jpg' alt='#' id='productImage'></figure>".
             "</div>";
    }
?>