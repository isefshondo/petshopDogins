<div class="modal-wrapper d-none" id="modal-product">
    <div id="modal-del-product"> 
        <span class = "Iconfechar"></span>
        <h3 class="modal-del-title">ATENÇÃO!</h3> 
        <div class="modal-del-text">Tem certeza que deseja cancelar?</div>
            <div class="button-del-product"> 
                <button type="button" id="btnModalCancel" class="btn-terciary">Não</button> 
                <a class="btn-danger" href="../controllers/cancelProductRegistration.php?$doc=<?php echo $query_string; ?>">Sim</a> 
            </div>                 
        </div>
    </div>
</div>

<div class="modal-wrapper d-none" id="alert">
    <div id="modal-del-product"> 
        <span class = "Iconfechar"></span>
        <h3 class="modal-del-title">ATENÇÃO!</h3> 
        <div class="modal-del-text"></div>
            <div class="button-del-product">  
                <button class="btn-danger">Ok</button> 
            </div>                 
        </div>
    </div>
</div>