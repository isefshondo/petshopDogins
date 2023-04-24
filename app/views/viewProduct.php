<?php
include("./blades/header.php");
include("./partials/header.php");
include("./components/sectionHeader.php");
include("../../public/utils/components/productCard.php");
include("./components/viewProductImages.php");
include("./components/productInformation.php");
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
        <div class="viewProductCard_head"><span class="houseIcon"></span><p>Gatos > Roupas e Acessórios > Fantasias > Roupinha de Abelha </p></div>
        <div class="viewProductCard_container">
          <?php
          createProductImageViewer();
          ?>
          <div>
            <div class="box-2 iconHeart"></div>
            <div class="box-2 iconShare"></div>
          </div>
          <div>
            <div>
              <div class="assess">
                <div class="box"><span class="iconStar"></span>4,5 129</div>
                <div class="box"><span class="iconMsg"></span>4,5</div>
              </div>
              <div>
                <h2 class="viewProduct_title">Fantasia para Gatos de Unicórnio e Leão</h2>
                <div>
                  <h3 class="viewProduct_subtitle">Tamanhos</h3>
                  <div class="assess">  
                    <label for="P" class="box-2"><input type="checkbox" name="sizes[]" id="P" class="d-none">P</label>
                    <label for="M" class="box-2"><input type="checkbox" name="sizes[]" id="M" class="d-none">M</label>
                    <label for="G" class="box-2"><input type="checkbox" name="sizes[]" id="G" class="d-none">G</label>
                  </div>
                </div>
                <div>
                  <h3 class="viewProduct_subtitle">Variações</h3>
                  <div class="assess">  
                    <label for="Unicornio" class="box"><input type="checkbox" name="sizes[]" id="Unicornio" class="d-none">Unicórnio</label>
                    <label for="Leao" class="box"><input type="checkbox" name="sizes[]" id="Leao" class="d-none">Leão</label>
                  </div>
                </div>
                <div>
                  <h3 class="viewProduct_subtitle">Quantidade</h3>
                  <div>  
                    <input type="number" name="qt" id="qt" value="1">
                  </div>
                </div>
              <div>
            </div>
          </div>
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
    <div class="sectionOfInformations">
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
          <a href="#sectionInformations"><li>
            <span class = "infoIcon"></span>
            Informações
          </li></a>
          <a href="#sectionSpecifics"><li>
            <span class = "specificIcon"></span>
            Especificações
          </li></a>
          <a href="#sectionRatings"><li>
            <span class = "ratingsIcon"></span>
            Avaliações
          </li></a>
          <a href="#sectionQuestions"><li>
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
            createProductCard("firstToy.png", "Nome do produto", "Marca do produto", "192,90", "80,90", true);
            createProductCard("firstToy.png", "Nome do produto", "Marca do produto", "192,90", "80,90", true);
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
      <section id = "viewSimilarProducts">
        <?php
        createHeaderSection("Outros clientes também viram:", true);
        ?>
        <ul class = "viewSimilarProducts">
        <?php
        createProductCard("firstToy.png", "Nome do produto", "Marca do produto", "192,90", "80,90");
        createProductCard("firstToy.png", "Nome do produto", "Marca do produto", "192,90", "80,90");
        ?>
        </ul>
      </section>
      <span></span>
      <?php
      // Os dois primeiros parâmetros são fixos.
      createProdInfo("sectionInformations", "Informações", "Um novo produto adicionado", "Uma nova descrição para um novo produto adicionacinado");
      createProdInfo("sectionRatings", "Avaliações", "Seja o primeiro a avaliar!", "");
      createProdInfo("sectionQuestions", "Perguntas", "Não há perguntas para este produto... Seja o primeiro a perguntar!", "");
      createProdInfo("sectionSpecifics", "Especificações", "Um novo produto adicionado", "Uma nova descrição para um novo produto adicionacinado");
      ?>
    </div>
  </section>
</main>
<?php
include("./partials/footer.php");
include("./blades/footer.php");
?>