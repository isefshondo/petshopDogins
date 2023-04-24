<?php
include("./blades/header.php");
include("./partials/header.php");
include("./components/sectionHeader.php");
include("../../public/utils/components/productCard.php");
?>
<main>
  <?php include("./components/couponNotice.php") ?>
  <section id="imgs-carousel">
    <div id="imgs-slider" class="imgs-slider">
      <?php
      $imgsCarousel = array(
        array(
          "imgName" => "firstCarousel.png",
          "alt" => "Tudo o que seu pet AUUdacioso precisa!"
        ),
        array(
          "imgName" => "secondCarousel.png",
          "alt" => "Tudo para o seu pet AUUdacioso!"
        ),
      );
      foreach ($imgsCarousel as $img) {
        echo "<img src='../../public/imgs/" . $img["imgName"] . "' alt='" . $img["alt"] . "'>";
      }
      ?>
    </div>
  </section>
  <section id="firstShowProducts">
    <?php
    createHeaderSection("Produtos AUUdaciosos", true);
    ?>
    <ul class="productsWrapper">
      <?php
      createProductCard("firstToy.png", "Nome do produto", "Marca do produto", "192,90", "80,90");
      ?>
    </ul>
  </section>
  <section id="productsCategories">
    <?php
    createHeaderSection("Categoria de produtos", false);
    ?>
    <ul class="categories">
      <li class="optionLinkWrapper">
        <img src="../../public/imgs/accessories.svg" alt="Acessorios">
        <h1>Acessórios</h1>
      </li>
      <li class="optionLinkWrapper">
        <img src="../../public/imgs/accessories.svg" alt="Acessorios">
        <h1>Alimentação</h1>
      </li>
      <li class="optionLinkWrapper">
        <img src="../../public/imgs/accessories.svg" alt="Acessorios">
        <h1>Brinquedos</h1>
      </li>
      <li class="optionLinkWrapper">
        <img src="../../public/imgs/accessories.svg" alt="Acessorios">
        <h1>Medicamentos</h1>
      </li>
      <li class="optionLinkWrapper">
        <img src="../../public/imgs/accessories.svg" alt="Acessorios">
        <h1>Higiene e Limpeza</h1>
      </li>
    </ul>
  </section>
  <section id="secondShowProducts">
    <?php
    createHeaderSection("Produtos AUUdaciosos", true);
    ?>
    <ul class="productsWrapper">
      <?php
      createProductCard("firstToy.png", "Nome do produto", "Marca do produto", "192,90", "80,90");
      ?>
    </ul>
  </section>
  <section id="searchByPets">
    <?php
    createHeaderSection("Busque o melhor para o seu pet", false);
    ?>
    <div class="petsCategories">
      <section class="firstGroupCategories">
        <figure class="dog-category">
          <h1>Cachorros</h1>
        </figure>
        <figure class="cat-category">
          <h1>Gatos</h1>
        </figure>
      </section>
      <section class="secondGroupCategories">
        <figure class="others-category">
          <h1>Outros pets</h1>
        </figure>
        <figure class="puppies-category">
          <h1>Filhotes</h1>
        </figure>
      </section>
    </div>
  </section>
  <section id="partnerBrands">
    <?php
    createHeaderSection("Marcas AUUdaciosas", true, "PartnerBrands");
    ?>
    <ul class="brandsHolder">
      <li>
        <img src="../../public/imgs/brands/whiskas.png" alt="Nossa parceria com o Whiskas!">
      </li>
      <li>
        <img src="../../public/imgs/brands/pedigree.png" alt="Nossa parceria com a Pedigree!">
      </li>
      <li>
        <img src="../../public/imgs/brands/purina.png" alt="Nossa parceria com a Purina!">
      </li>
      <li>
        <img src="../../public/imgs/brands/royal-canin.png" alt="Nossa parceria com a Royal Canin!">
      </li>
      <li>
        <img src="../../public/imgs/brands/gran-plus.png" alt="Nossa parceria com a Gran Plus!">
      </li>
      <li>
        <img src="../../public/imgs/brands/nexgard.png" alt="Nossa parceria com o Nexgard!">
      </li>
    </ul>
  </section>
</main>
<?php
include("./partials/footer.php");
include("./blades/footer.php"); 
?>