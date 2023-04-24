<?php
function createProductCard($imgName, $productName, $brandName, $oldPrice, $newPrice, $boughtFrequently = false) {
  if ($boughtFrequently) {
    echo
    "<div style='display: grid;'>".
    "<input type='checkbox' class='selectTheProduct'/>";
  }
  echo 
  "<li class='productCard'>".
    "<figure class='productImg'>".
      "<img src='../../public/imgs/".$imgName."' alt='Produtos AUUdaciosos'>".
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
  if ($boughtFrequently) {
    echo "</div>";
  }
}
?>