<?php
    function createCategorieOption($categorieName){
        echo "<label for='$categorieName' class='categoriesOption'>".
                "<ul>".
                    "<li>".
                        "<img class='categorieOptionIcon' src='../../public/imgs/$categorieName.svg' alt='$categorieName'>".
                    "</li>".
                "</ul>".
                "<input type='radio' id='$categorieName' name='categoria_produto' class='d-none' value='$categorieName'>".
             "</label>";
    }
?>