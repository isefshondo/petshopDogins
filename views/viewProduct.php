<?php
include("./blades/header.php");
include("./partials/header.php");
include("./components/sectionHeader.php");
include("./components/productCard.php");
include("./components/viewProductImages.php");
?>
<main>
  <?php include("./components/couponNotice.php") ?>
  <section id = "viewOneProduct"
    style = "padding-block-start: 1.875em; padding-inline: 3.125em;"
  >
    <form 
      style = "display: grid; grid-template-columns: 3.5fr 1fr; column-gap: 1.875em; margin-bottom: 3em;"
    >
      <section id = "viewProductCard" class = "viewProductCard">
        <?php
        createProductImageViewer();
        ?>
      </section>
      <section id = "viewPriceCard" class = "viewPriceCard">
        <header class = "chooseBuyFrequently">
          <div>
            <hgroup>
              <h3 class = "originalPrice">R$ 163,90</h3>
              <h5 class = "getDiscountPrice">-5%</h5>
              <span class = "disclaimerIcon"></span>
            </hgroup>
            <h1>R$ 153,91</h1>
          </div>
          <button class = "btnBuyFrequently">
            <span class = "checkMarkIcon"></span>
            Comprar com recorrência por R&#36; 53,91
          </button>
          <p>
            Se compras com recorrência ganhas desconto considerável em tua compra. 
          </p>
        </header>
        <div class = "chooseBuy">
          <h1>R&#36; 163,90</h1>
          <button class = "btnBuyProduct">
            <span class = "blackCartIcon"></span>
            Comprar por R&#36; 163,90
          </button>
        </div>
      </section>
    </form>
    <div style = "display: grid; grid-template-columns: 3.5fr 1fr; column-gap: 1.875em; row-gap: 2em;">
      <section id = "doginsPolicies">
        <form class = "deliveryPolicies">
          <header>
            <h3>Entrega</h3>
            <button class = "simulateFreight">
              Simular frete
            </button>
          </header>
          <p class = "disclaimerPolicies">Política de <span class = "freightMarkup">frete grátis</span>. Confira as regras!</p>
          <p class = "disclaimerProductWrapper">
            <span class = "disclaimerIcon"></span>
            Saiba como funciona
          </p>
        </form>
        <ul class = "viewProductInfo">
          <a href="#"><li>
            <span class = "infoIcon"></span>
            Informações
          </li></a>
          <a href="#"><li>
            <span class = "specificIcon"></span>
            Especificações
          </li></a>
          <a href="#"><li>
            <span class = "ratingsIcon"></span>
            Avaliações
          </li></a>
          <a href="#"><li>
            <span class = "questionsIcon"></span>
            Perguntas
          </li></a>
        </ul>
      </section>
      <span></span>
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
      <span></span>
      <section id = "information" class = "toggleSection">
        <header>
          <span class = "infoIcon"></span>
          Informações
        </header>
        <h1>Fantasia de Unicórnio Cansei de Ser Gato</h1>
        <p>
          Um resumão.
        </p>
      </section>
    </div>
  </section>
</main>
<?php
include("./partials/footer.php");
include("./blades/footer.php");
?>