<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Popup</title>
</head>
<body>
    

<div id="modal-del-product"> 

        <span class = "Iconfechar"></span>
            <h3 class="modal-del-title">ATENÇÃO!</h3> 

    <div class="modal-del-text"> Tem certeza que deseja deletar este produto? </div>
        <div class="button-del-product"> 
            <button type="button" class="btn-primary" data-bs-dismiss="modal">Cancelar</button> 
            <button type="button" class="btn-danger" data-bs-dismiss="modal">Deletar</button> 
        </div>                 
    </div>
</div>

<br>

<div id="modal-cancelar">

<span class = "Iconfechar"></span>
            <h3 class="modal-del-title">ATENÇÃO!</h3> 

    <div class="modal-del-text"> Tem certeza que deseja cancelar? </div>
        <div class="button-del-product"> 
            <button type="button" class="btn-primary" data-bs-dismiss="modal">Não</button> 
            <button type="button" class="btn-danger" data-bs-dismiss="modal">Sim</button> 
        </div>                 
    </div>
</div>


<div id="modal-editar-excluir">
    <button type="button" class="btn-editar" data-bs-dismiss="modal">Editar</button> 
    <button type="button" class="btn-deletar" data-bs-dismiss="modal">Excluir</button> 
</div>

<div id="modal-info">
    
    <div id="title-info">
        <span class = "Iconinfo"></span>
        Como editar meus produtos?
    </div>
    <div id="text-info">
    Para editar seu produto, basta passar o mouse sobre o produto que deseja alterar e 
    selecionar a opção “editar”, após isso você terá cacesso a uma interface semelhante 
    a qual realizou o cadastro onde poderá alterar os dados da forma como preferir
</div>
</div>
</body>
</html>