<section id="part_3">
    <div class="form-floating">
        <div class="form-floating_header mb-2">
            <div class="form-floating_row mb-1">
                <h6><em>*</em> Obrigatório</h6>
                <h6 class="countFormsFloating"></h6>
            </div>
            <div>
                <h3 class="form-floating_title">Qual o preço?</h3>
            </div>
        </div>
        <div class="form-floating_input mb-4">
            <span class="currency-symbol">R$</span>
            <input type="text" id="productPrice" name="productPrice" data-limit="7" rows="2" value="<?php echo $data['productPrice'] ?? ""; ?>" required>
        </div>
        <div class="form-floating_info">
            <span class="yellowAlertIcon"></span>
            <p class="w-80">
            A Dogin’s entrega seu produto para você. A tarifa do frete é calculada automaticamente a partir da distância da entrega e do valor do produto. Abaixo, iremos mostrar um total aproximado do valor líquido recibido em cada venda sua.
            </p>    
        </div>
    </div>

    <div class="form-floating">
        <div class="form-floating_header mb-4">
            <div class="form-floating_row mb-2">
                <h3 class="form-floating_title">Resumo de ganhos</h3>
                <h6 class="countFormsFloating"></h6>
            </div>
        </div>
        <div class="form-floating_row">    
            <div class="w-50">    
                <div class="form-floating_row mb-1">
                    <h5>Preço unitário do produto</h5>
                    <h5>R$ 200,00</h5>
                </div>

                <hr class="line_horizontal mb-1">
                
                <div class="form-floating_row mb-1">
                    <h5>Taxa fixa do frete</h5>
                    <h5>R$ 20,00</h5>
                </div>
                
                <hr class="line_horizontal mb-1">
                
                <div class="form-floating_row">
                    <h5 class="bold">Você receberá</h5>
                    <h5 class="bold">R$ 200,00</h5>
                </div>
            </div>
        </div>
    </div>
</section>