<?php
include("./blades/header.php");
include("./partials/header.php");
include("./components/sectionHeader.php");
?>
<main>
  <?php include("./components/couponNotice.php") ?>
  <form class = "viewPurchase">
    <section id = "viewProductCard" class = "viewProductCard">
      <div class = "displayProductImage"></div>
      <div class = "displayProductSetting">
        <h1>Fantasia para Gatos de Unicórnio e Leão</h1>
      </div>
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
</main>
<?php
include("./partials/footer.php");
include("./blades/footer.php");
?>