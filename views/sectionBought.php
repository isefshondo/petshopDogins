<?php
include("./blades/header.php");
include("./partials/header.php");
include("./components/sectionHeader.php");
include("./components/productCard.php");
?>
<main>
  <section id = "groupOfProducts">
    <?php
    createHeaderSection("Frequentemente comprados juntos:", false);
    ?>
    <section class = "displayOfProducts">
      <div class = "frequentProducts">
        <?php
        createProductCard("firstToy.png", "Nome do produto", "Marca do produto", "192,90", "80,90");
        createProductCard("firstToy.png", "Nome do produto", "Marca do produto", "192,90", "80,90");
        ?>
      </div>
      <div class = "textPrice">
        <hgroup class = "buyFrequently">
          <h1>R&#36; 189,91</h1>
          <p>Comprar com recorrência por R&#36; 99,91</p>
        </hgroup>
        <hgroup class = "buyOnce">
          <h1>R&#36; 213,80</h1>
          <p>Comprar uma única vez</p>
        </hgroup>
      </div>
    </section>
    <button>Adicionar selecionado (s)</button>
  </section>
</main>
<?php
include("./partials/footer.php");
include("./blades/footer.php");
?>