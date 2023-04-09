<?php
    if(isset($msg)){
        $inputs_id = ["titulo_anuncio", "descricao_anuncio", "cod_produto"];
        $data = exibir_dados($inputs_id);
    }
?>

<section id="part_1">
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
            <textarea id="titulo_anuncio" name="titulo_anuncio" oninput="limitarText('titulo_anuncio', 200)" rows="2"><?php echo $data['titulo_anuncio'] ?? ""; ?></textarea>
        </div>
        <div class="form-floating_foot">
            <p>Evite incluir condições de venda como parcelamento sem juros ou frete grátis. Se seu produto é genérico, indique a marca verdadeira.</p>
            <h6 id="titulo_anuncio_qt_caracteres"><?php echo strlen($data['titulo_anuncio'] ?? "") ?>/200</h6>
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
            <textarea id="descricao_anuncio" name="descricao_anuncio" oninput="limitarText('descricao_anuncio', 2000)" rows="4"><?php echo $data['descricao_anuncio'] ?? ""; ?></textarea>
        </div>
        <div class="form-floating_foot">
            <p>Essa é a descrição que aparecerá quando alguém acessar o seu produto. O texto deverá descrever as características de seu produto.</p>
            <h6 id="descricao_anuncio_qt_caracteres"><?php echo strlen($data['descricao_anuncio'] ?? "") ?>/2000</h6>
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
                    <img src="../../views/assets/imgs/icons/product_barcode.svg" alt="codigo universal de produto">
                </div>
            </div>
        </div>
        <div class="form-floating_input">
            <div class="form-floating_row mb-1">
                <div class="w-50">
                    <h3 class="form-floating_subtitle mb-2">Código universal de produto</h3>
                    <input type="number" id="cod_produto" class="w-75" name="cod_produto" oninput="limitarText('cod_produto', 14)" rows="2" value="<?php echo $data['cod_produto'] ?? ""; ?>">
                </div>
                <div>
                    <input type="checkbox" name="sem_cod_produto"> Não o tenho agora
                </div>
            </div>    
            <div class="form-floating_foot">
                <p>Tem entre 8 e 14 números, sem letras.</p>
            </div>
        </div>
    </div>
</section>