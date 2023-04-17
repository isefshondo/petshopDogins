<?php
    function createCategorieOption($categorieOption, $productCategoryChecked){
        if($categorieOption[1] == $productCategoryChecked){
            $radio = "checked";
        }else{
            $radio = "";
        }
        echo "<label for='$categorieOption[0]' class='categoriesOption $radio'>".
                "<ul class='categories'>".
                    "<li class='optionRadioWrapper'>".
                        "<img class='categorieOptionIcon' src='../../public/imgs/$categorieOption[0].svg' alt='$categorieOption[1]'>".
                        "<h2>$categorieOption[1]</h2>".
                    "</li>".
                "</ul>".
                "<input type='radio' id='$categorieOption[0]' name='productCategory' class='d-none' value='$categorieOption[1]' $radio>".
             "</label>";
    }
?>