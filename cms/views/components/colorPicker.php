<?php

    function createColorPicker($color = '#FF0000', $remove = false){
        if($remove == false){
            $class = "d-none";
        }else{
            $class = "";
        }

        echo "<div class='color-picker'>".
                "<input type='color' name='productColors[]' value='$color'>".
                "<p class='selected_color'>$color</p>".
                "<span class='btnAdd remove $class'>- Remove</span>".
            "</div>";
    }
?>