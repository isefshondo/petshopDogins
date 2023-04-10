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
      <li class="productCard">
        <figure class="productImg">
          <img src="./assets/imgs/firstToy.png" alt="Produtos AUUdaciosos">
        </figure>
        <hgroup class="productDesc">
          <h2>Nome do produto</h2>
          <h3>Marca: Marca do produto</h3>
        </hgroup>
        <hgroup class="productPrice">
          <h3>R&#36; Preço produto</h3>
          <h2>R&#36; Preço produto</h2>
        </hgroup>
      </li>
    </ul>
  </section>
</main>
<?php
include("./partials/footer.php");
include("./blades/footer.php");
?>