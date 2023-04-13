<?php
include("./blades/header.php");
include("./partials/header.php");
include("./components/sectionHeader.php");
?>
<main>
  <?php include("./components/couponNotice.php") ?>
  <section id="pageAlert">
    <article class="notFoundAlert">
      <h1>Desculpe, ainda estamos trabalhando nesta página!</h1>
      <p>Aproveite para voltar à página inicial e comprar mais produtos AUUdaciosos!</p>
      <div>
        <button>Voltar</button>
      </div>
    </article>
    <figure>
      <img src="./assets/imgs/doginsNotFound.png" alt="Doguinho trabalhando em sua página.">
    </figure>
  </section>
  <section id="recommendedProducts">
    <?php
    createHeaderSection("Produtos recomendados", true, "FirstProducts");
    ?>
    <ul class="productsWrapper">
      <?php
        createProductCard("firstToy.png", "Nome do produto", "Marca do produto", "192,90", "80,90");
      ?>
    </ul>
  </section>
</main>
<?php
include("./partials/footer.php");
include("./blades/footer.php");
?>