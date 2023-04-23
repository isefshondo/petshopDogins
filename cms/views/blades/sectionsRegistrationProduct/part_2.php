<section id="part_2">
    <div class="form-floating">
        <div class="form-floating_header">
            <div class="form-floating_row mb-2">
                <h3 class="form-floating_title mb-4">Preencha as informações do seu produto</h3>
                <h6>1/2</h6>
            </div>
            <div class="mb-4">
                <div class="form-floating_info mb-4">
                    <span class="yellowAlertIcon"></span>
                    <p class="w-80">
                    Para melhor visualização, garanta que a primeira foto tenha o fundo totalmente branco. Para isso, pode utilizar um aplicativo editor de fotos. Não inclua dados de contato, links nem referências a sites externos.
                    </p>    
                </div>
            </div>
            <hr class="line_horizontal mb-4">
        </div>

        <div class="form-floating_row mb-4">
          <div class="form-floating_header mb-2">        
            <div>
                <h3 class="form-floating_subtitle mb-2">Suas fotos</h3>
            </div>
            
            <?php createDropImages(); ?>

          </div>  
        </div>

        <div class="form-floating_row mb-4">
            <div class="form-floating_header" id="selectProductColors">
                <h3 class="form-floating_subtitle mb-2">Variações de cor</h3>    
                <div class="productColor_input">
                    <?php createColorPicker(); ?>
                    <span class="btnAdd color_picker">+ Adicionar</span>    
                </div>
                <div id="otherColors" data-limit="5">
                    <?php
                        if(isset($data['productColors']) && count($data['productColors']) > 1){
                            foreach(array_slice($data['productColors'], 1) as $color){
                                createColorPicker($color, true);
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
        
        <hr class="line_horizontal mb-4">

        <div class="form-floating_row mb-4">
            <div class="form-floating_header">
                <h3 class="form-floating_subtitle mb-2">Variações de tamanho</h3>    
                <?php 
                    if(isset($data['sizes'])){
                        createSelectSizes($sizes, $data['sizes']);
                    }else{
                        createSelectSizes($sizes);
                    }
                ?>
            </div>
        </div>

        <hr class="line_horizontal mb-4">

        <div class="form-floating_row mb-4">
            <div class="form-floating_header">
                <h3 class="form-floating_subtitle mb-2">Variações de peso</h3>    
                <div>
                    <input type="number" name="productWeight" id="productWeight" placeholder="+ Adicionar peso" value="<?php echo $data['productWeight'] ?? ""; ?>">
                </div>
            </div>
        </div>

        <hr class="line_horizontal mb-4">

        <div class="form-floating_row mb-4">
            <div class="form-floating_header">
                <h3 class="form-floating_subtitle mb-2">Quantidade em estoque</h3>    
                <div>
                    <input type="number" name="productStock" id="productStock" value="<?php echo $data['productStock'] ?? 1; ?>">
                </div>
                <div>
                    <input type="number" name="minStock" id="minStock" value="<?php echo $data['minStock'] ?? 1; ?>">
                </div>
            </div>
        </div>

    </div>
    <div class="form-floating">
        <div class="form-floating_header mb-4">
            <div class="form-floating_row mb-1">
                <h6><em>*</em> Obrigatório</h6>
                <h6>2/2</h6>
            </div>
            <div>
                <h3 class="form-floating_title mb-1">Preencha a marca do produto</h3>
                <p>Inclua a marca de fábrica do produto que está comercializando, declare a marca real.</p>
            </div>
        </div>
        <div class="form-floating_input">
            <textarea id="brandName" name="brandName" data-limit="200" rows="2" required><?php echo $data['brandName'] ?? ""; ?></textarea>
        </div>
        <div class="form-floating_foot">
            <p>Evite incluir outras descrições de marca como nome do produto ou forma de pagamento. Se seu produto é genérico, indique a marca verdadeira.</p>
            <h6 id="brandName_inputLenght"><?php echo strlen($data['brandName'] ?? "") ?>/200</h6>
        </div>
    </div>
</section>