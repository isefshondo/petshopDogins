<?php
include("./blades/header.php");
include("./partials/header.php");
include("./components/sectionHeader.php");
?>
<!-- <main>
      <?php include("./components/couponNotice.php") ?>
      <section id="imgs-carousel">
        <div id = "imgs-slider" class = "imgs-slider">
        <?php
        $imgsCarousel = array(
          array(
            "imgName" => "img-carousel-01.png",
            "alt" => "Seu dog AUUdacioso!"
          ),
        );
        foreach ($imgsCarousel as $img) {
          echo "<img src='./assets/imgs/" . $img["imgName"] . "' alt='" . $img["alt"] . "'>";
        }
        ?>
        </div>
      </section> -->
      <section id="firstShowProducts">
        <?php
        createHeaderSection("Produtos AUUdaciosos", true);
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
      <!--<section id="productsCategories">
        <?php
        createHeaderSection("Categoria de produtos", false);
        ?>
        <ul class = "categories">
          <li>
            <img src="./assets/imgs/accessories.svg" alt="Acessorios">
            <h1>Nome da categoria</h1>
          </li>
        </ul>
      </section>
      <section id="secondShowProducts">
        <?php
        createHeaderSection("Produtos AUUdaciosos", true);
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
      <section id="searchByPets">
        <?php
        createHeaderSection("Busque o melhor para o seu pet", false);
        ?>
        <div class="petsCategories">
          <figure class="dog-category">
            <h1>Cachorros</h1>
          </figure>
          <figure class="cat-category">
            <h1>Gatos</h1>
          </figure>
          <figure class="others-category">
            <h1>Outros pets</h1>
          </figure>
          <figure class="puppies-category">
            <h1>Filhotes</h1>
          </figure>
        </div>
      </section>
    </main> -->
<?php include("./partials/footer.php") ?>
<?php include("./blades/footer.php") ?>