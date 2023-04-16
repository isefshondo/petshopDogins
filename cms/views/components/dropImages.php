<div class="drop-area" id="drop-area">
    <label for="file-input" class="drop-area_info">
        <span class="photoIcon mb-2"></span>
        <p>Adicione ou arraste suas</p>
        <p>fotos aqui</p>
        <input type="file" accept="image/*" name="imagens_produto[]" id="file-input" multiple maxlenght="5" onchange="previewImages(event)">
    </label>
    <div id="drop-area_imgs">
        <?php
            if(isset($data['imagens_produto'])){
                foreach($data['imagens_produto'] as $src){
                    echo "<figure class='drop-area_fig'>".
                            "<img src='$src' class='drop-area_fig-img'>".
                         "</figure>";
                }
            }
        ?>
    </div>
</div>