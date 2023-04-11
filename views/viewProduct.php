<?php
include("./blades/header.php");
include("./partials/header.php");
include("./components/sectionHeader.php");
?>
<main>
  <?php include("./components/couponNotice.php") ?>
  <div class = "viewPurchase">
    <section id = "viewProductsDetails">
    </section>
    <section id = "viewPriceDetails">
      <form class = "viewPriceCard">
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
            <span class = "cartIcon"></span>
            Comprar por R&#36; 163,90
          </button>
        </div>
      </form>
    </section>
  </div>
</main>
<?php
include("./partials/footer.php");
include("./blades/footer.php");
?>