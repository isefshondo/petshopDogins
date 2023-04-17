<?php
    function createDropImages(){
        global $data;
?>
    <div class="drop-area" id="drop-area">
        <label for="productImages" class="drop-area_info">
            <span class="photoIcon mb-2"></span>
            <p>Adicione ou arraste suas</p>
            <p>fotos aqui</p>
            <input type="file" accept="image/*" name="productImages[]" id="productImages" multiple data-limit="5">
        </label>
        <div id="drop-area_imgs">
            <?php
                if(isset($data['productImages'])){
                    foreach($data['productImages'] as $src){
                        echo "<figure class='drop-area_fig'>".
                                "<img src='$src' class='drop-area_fig-img'>".
                                "<span class='closeIcon'><i class='fa-sharp fa-solid fa-circle-xmark'></i></span>".
                            "</figure>";
                    }
                }
            ?>
        </div>
    </div>
<?php 
    }
?>