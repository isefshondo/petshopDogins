<section id="part_1">
    
    <div class="categoriesOptions mb-4">
        <div class="form-floating_header">
            <h3 class="form-floating_title mb-4">Primeiro, preencha em qual categoria se encaixa</h3>            
        </div>
        <?php 
            $categoriesOptions = ['accessories', 'food', 'toys', 'medicines', 'hygiene'];
            foreach($categoriesOptions as $option){
                createCategorieOption($option);
            }
        ?>
    </div>

    <div class="form-floating">
        <div class="form-floating_header mb-4">
            <div class="form-floating_row mb-2">
                <h6><em>*</em> Obrigatório</h6>
                <h6>1/3</h6>
            </div>
            <div>
                <h3 class="form-floating_title mb-1">Preencha o título do anúncio</h3>
                <p>Inclua somente produto, marca, modelo e características principais. Lembre-se de que, quando receber uma venda, você não poderá editá-lo.</p>    
            </div>
        </div>
        <div class="form-floating_input">
            <textarea id="<?php echo $dataNames['productName']; ?>" name="<?php echo $dataNames['productName']; ?>" data-limit="<?php echo $dataLimits['productName']; ?>" required><?php echo $data['productName'] ?? "";?></textarea>
        </div>
        <div class="form-floating_foot">
            <p>Evite incluir condições de venda como parcelamento sem juros ou frete grátis. Se seu produto é genérico, indique a marca verdadeira.</p>
            <h6 id="<?php echo $dataNames['productName'] . '_inputLenght'; ?>"><?php echo strlen($data['productName'] ?? "") . "/" . $dataLimits['productName']; ?></h6>
        </div>
    </div>

    <div class="form-floating">
        <div class="form-floating_header mb-4">
            <div class="form-floating_row mb-2">
                <h6><em>*</em> Obrigatório</h6>
                <h6>2/3</h6>
            </div>
            <div>
                <h3 class="form-floating_title mb-1">Adicione uma descrição</h3>
                <p>Você pode incluir informações sobre o produto, como fabricação, material, o que está incluso.</p>
            </div>
        </div>
        <div class="form-floating_input">
            <textarea id="<?php echo $dataNames['productDescription']; ?>" name="<?php echo $dataNames['productDescription']; ?>" data-limit="<?php echo $dataLimits['productDescription']; ?> " required rows="4"><?php echo $data['productDescription'] ?? ""; ?></textarea>
        </div>
        <div class="form-floating_foot">
            <p>Essa é a descrição que aparecerá quando alguém acessar o seu produto. O texto deverá descrever as características de seu produto.</p>
            <h6 id="<?php echo $dataNames['productDescription'] . '_inputLenght'; ?>"><?php echo strlen($data['productDescription'] ?? "") . "/" . $dataLimits['productDescription'] ?></h6>
        </div>
    </div>
    
    <div class="form-floating">
        <div class="form-floating_header mb-4">
            <div class="form-floating_row mb-1">
                <h6><em>*</em> Obrigatório</h6>
                <h6>3/3</h6>
            </div>
            <div class="form-floating_row mb-1">
                <div>
                    <h3 class="form-floating_title mb-2">Qual é o código universal do seu produto?</h3>
                    <p>É o número que identifica um produto em nível global. Está localizado na embalagem ou na etiqueta, próximo do código de barras.</p>    
                </div>
                <div>
                    <img src="../../public/imgs/icons/product_barcode.svg" alt="codigo universal de produto">
                </div>
            </div>
        </div>
        <div class="form-floating_input">
            <div class="form-floating_row mb-1">
                <div class="w-100">
                    <h3 class="form-floating_subtitle mb-2">Código universal de produto</h3>
                    <div class="universalProductCode_input">
                        <input type="number" id="<?php echo $dataNames['universalProductCode']; ?>" class="w-50" name="<?php echo $dataNames['universalProductCode']; ?>" data-limit="<?php echo $dataLimits['universalProductCode']; ?>" pattern="<?php echo $patterns['universalProductCode']; ?>" rows="2" value="<?php echo $data['universalProductCode'] ?? ""; ?>" required>
                        <div class="universalProductCode_checkbox">
                            <input type="checkbox" name="sem_cod_produto"> Não o tenho agora
                        </div>
                    </div>
                </div>
            </div>    
            <div class="form-floating_foot">
                <p>Tem entre 8 e 14 números, sem letras.</p>
            </div>
        </div>
    </div>
</section>