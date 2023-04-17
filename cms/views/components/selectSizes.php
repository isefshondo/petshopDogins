<?php
    function isSizeSelected($size, $sizes){
        return in_array($size, $sizes);
    }
    
    function createSelectSizes($sizes, $otherSizes = ''){
?>
    <div class='select-size'>
    <?php
        if(isset($sizes)){
            foreach($sizes['sizes'] as $size){
                echo "<label for='$size'><input type='checkbox' id='$size' name='sizes[]' value='$size'";
                
                if($otherSizes){
                    if(isSizeSelected($size, $otherSizes)){
                        echo "checked";
                    }
                }

                echo "> $size</label>";
            }
            if($otherSizes){
                foreach($otherSizes as $size){
                    if(!isSizeSelected($size, $sizes['sizes'])){
                        echo "<label for='$size'><input type='checkbox' id='$size' name='sizes[]' value='$size' checked> $size</label>";
                    }
                }
            }
        }
    ?>
        <div class='otherSizes'></div>
        <span class='btnAdd add-size'>Adicionar tamanhos</span>
        <div class='new-size d-none'>
            <input type='text'>
            <span class='btnAdd'>+ Adicionar</span>
        </div>
    </div>
<?php
    }
?>