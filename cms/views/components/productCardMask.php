<?php

function createProductCard($imgName, $productName, $brandName, $oldPrice, $newPrice) {
  echo 
  "<li class='productCard'>".
    "<figure class='productImg'>".
    "<img src='data:image/jpeg;base64,".$imgName."' alt='Produtos AUUdaciosos' />".
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
    function createProductCardMask($id, $imgName, $productName, $brandName, $oldPrice, $newPrice){
?>
        <div class="productCardWrapper">
            <ul>
                <?php createProductCard($imgName, $productName, $brandName, $oldPrice, $newPrice);?>
            </ul>
            <div class="productCardMask d-none">
                <form action="updateProduct.php" method="post" class="d-flex">
                  <input type="hidden" name="id" value="<?php echo $id; ?>">
                  <button class="btn btn-primary">Editar</button>
                  <button type="button" class="btn btn-secondary btn-delete">Excluir</button>
                </form>
            </div>
        </div>
<?php
    }
?>
