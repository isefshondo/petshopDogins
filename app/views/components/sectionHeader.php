<?php
function createHeaderSection($sectionName, $paginationButton, $buttonId = "none")
{
  echo "<header class='showProducts'>" .
    "<div class='sectionProductsTitle'>" .
    "<h1>" . $sectionName . "</h1>" .
    "<span class='heartIcon'></span>" .
    "</div>";
  if ($paginationButton) {
    echo "<div class='paginationButton'>" .
      "<button class='leftButton btnPrev".$buttonId."'>" .
      "<img src='../../public/imgs/arrow.svg' alt='Voltar'>" .
      "</button>" .
      "<button class='rightButton btnNext".$buttonId."'>" .
      "<img src='../../public/imgs/arrow.svg' alt='Foward'>" .
      "</button>" .
      "</div>";
  }
  echo "</header>";
}
?>