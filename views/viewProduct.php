<?php
include("./blades/header.php");
include("./partials/header.php");
include("./components/sectionHeader.php");
?>
<main>
  <?php include("./components/couponNotice.php") ?>
  <div class = "detailsHolder">
    <section id="purchaseOptions"></section>
    <section id="purchaseFinishDetails">
      <form>
        <header id="mainPrice">
          <hgroup>
            <h2>R&#36; <!-- PHP tag about original price goes here. --></h2>
            <h3></h3>
            <span></span>
          </hgroup>
          <h1>R&#36; <!-- PHP tag about discounted price goes here. --></h1>
        </header>
        <label for="purchaseFrequently" class="purchaseFrequentlyInfo">
          <input type="checkbox" name="purchaseFrequently" id="purchaseFrequently" checked>
          Comprar com recorrência por R&#36; <!-- PHP tag about frequent purchase price goes here -->
        </label>
      </form>
    </section>
  </div>
</main>
<?php
include("./partials/footer.php");
include("./blades/footer.php");
?>