<div class="modal-wrapper d-none" id="modal-product">
    <div id="modal-del-product"> 
        <span class = "Iconfechar"></span>
        <h3 class="modal-del-title">ATENÇÃO!</h3> 
        <div class="modal-del-text">Tem certeza que deseja cancelar?</div>
            <div class="button-del-product"> 
                <button type="button" id="btnModalCancel" class="btn-terciary">Não</button> 
                <a class="btn-danger" href="../controllers/cancelProductRegistration.php">Sim</a> 
            </div>                 
        </div>
    </div>
</div>

<div class="modal-wrapper d-none" id="modal-product-delete">
    <div id="modal-del-product"> 
        <span class = "Iconfechar"></span>
        <h3 class="modal-del-title">ATENÇÃO!</h3> 
        <div class="modal-del-text">Tem certeza que deseja deletar este produto?</div>
            <form action="../models/delete.php" method="post" class="d-flex">
                <input type="hidden" name="id">
                <div class="button-del-product"> 
                    <a type="button" id="btnModalCancel" class="btn-terciary">Cancelar</a> 
                    <button class="btn-danger">Deletar</button> 
                </div>                 
            </form>             
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