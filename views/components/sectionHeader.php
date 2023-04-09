<?php
  function createHeaderSection($sectionName, $paginationButton) {
    echo "<header class='showProducts'>".
      "<div class='sectionProductsTitle'>".
      "<h1>".$sectionName."</h1>".
      "<span class='heartIcon'></span>".
      "</div>";
    if($paginationButton) {
      echo "<div class='paginationButton'>".
        "<button class='leftButton'>".
        "<img src='./assets/imgs/arrow.svg' alt='Voltar'>".
        "</button>".
        "<button class='rightButton'>".
        "<img src='./assets/imgs/arrow.svg' alt='Foward'>".
        "</button>".
        "</div>";
    }
    echo "</header>";
  }
?>