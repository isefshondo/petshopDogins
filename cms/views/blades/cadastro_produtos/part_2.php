<?php
    if(isset($msg)){
        $inputs_id = ["imagem_produto", "cor_produto", "tamanhos", "peso_produto", "quantidade_produto", "marca_anuncio"];
        $data = exibir_dados($inputs_id);
    }
?>

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
            <div class="drop-area">
                <label for="file-input" class="drop-area_info">
                    <span class="photoIcon mb-2"></span>
                    <p>Adicione ou arraste suas</p>
                    <p>fotos aqui</p>
                    <input type="file" accept="image/*" id="file-input">
                </label>
            </div>
          </div>  
        </div>

        <div class="form-floating_row mb-4">
            <div class="form-floating_header">
                <h3 class="form-floating_subtitle mb-2">Variações de cor</h3>    
                <div class="color-picker">
                    <input type="color" name="cor_produto" id="cor_produto" value="#FF0000">
                    <p id="selected_color">Vermelho</p>
                    <label for="cor_produto">
                        <span></span>
                        Adicionar
                    </label>
                </div>
            </div>
        </div>
        
        <hr class="line_horizontal mb-4">

        <div class="form-floating_row mb-4">
            <div class="form-floating_header">
                <h3 class="form-floating_subtitle mb-2">Variações de tamanho</h3>    
                <div class="select-size w-25">
                    <label for="tamanho_P"><input type="checkbox" id="tamanho_P" name="tamanhos[]" value="P"> P</label>
                    <label for="tamanho_M"><input type="checkbox" id="tamanho_M" name="tamanhos[]" value="M"> M</label>
                    <label for="tamanho_G"><input type="checkbox" id="tamanho_G" name="tamanhos[]" value="G"> G</label>
                    <label for="tamanho_Unico"><input type="checkbox" id="tamanho_Unico" name="tamanhos[]" value="Unico"> Único</label>
                </div>
            </div>
        </div>

        <hr class="line_horizontal mb-4">

        <div class="form-floating_row mb-4">
            <div class="form-floating_header">
                <h3 class="form-floating_subtitle mb-2">Variações de peso</h3>    
                <div>
                    <input type="number" name="peso_produto" id="" placeholder="+ Adicionar peso">
                </div>
            </div>
        </div>

        <hr class="line_horizontal mb-4">

        <div class="form-floating_row mb-4">
            <div class="form-floating_header">
                <h3 class="form-floating_subtitle mb-2">Quantidade em estoque</h3>    
                <div>
                    <input type="number" name="quantidade_produto" id="quantidade_produto" value="1">
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
            <textarea id="marca_anuncio" oninput="limitarText('marca_anuncio', 200)" rows="2"></textarea>
        </div>
        <div class="form-floating_foot">
            <p>Evite incluir outras descrições de marca como nome do produto ou forma de pagamento. Se seu produto é genérico, indique a marca verdadeira.</p>
            <h6 id="marca_anuncio_qt_caracteres">0/200</h6>
        </div>
    </div>
</section>