<?php

function createProductCard($imgName, $productName, $brandName, $oldPrice, $newPrice) {
  echo 
  "<li class='productCard'>".
    "<figure class='productImg'>".
      "<img src='".$imgName."' alt='Produtos AUUdaciosos'>".
    "</figure>".
    "<hgroup class='productDesc'>".
      "<h2>".$productName."</h2>".
      "<h3>Marca: ".$brandName."</h3>".
    "</hgroup>".
    "<hgroup class='productPrice'>".
      "<h3>R&#36; ".$oldPrice."</h3>".
      "<h2>R&#36; ".$newPrice."</h2>".
    "</hgroup>".
  "</li>";
}

?>
<?php
    function createProductCardMask($imgName, $productName, $brandName, $oldPrice, $newPrice){
?>
        <div class="productCardWrapper">
            <ul>
                <?php createProductCard($imgName, $productName, $brandName, $oldPrice, $newPrice);?>
            </ul>
            <div class="productCardMask d-none">
                <button class="btn btn-primary">Editar</button>
                <button class="btn btn-secondary">Excluir</button>
            </div>
        </div>
<?php
    }
?>
