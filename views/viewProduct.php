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
          <hgroup>
            <h3 class = "originalPrice">R$ 163,90</h3>
            <h5 class = "getDiscountPrice">-5%</h5>
            <span class = "disclaimerIcon"></span>
          </hgroup>
          <h1>R$ 153,91</h1>
          <button class = "btnBuyFrequently">
            <span class = "checkMarkIcon"></span>
            Comprar com recorrência por R&#36; 53,91
          </button>
          <p>
            Se compras com recorrência ganhas desconto considerável em tua compra. 
          </p>
        </header>
      </form>
    </section>
  </div>
</main>
<?php
include("./partials/footer.php");
include("./blades/footer.php");
?>