<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Point here the rest of the meta tags -->
    <title>Petshop Dogin's</title>
    <link rel="stylesheet" href="./assets/styles/styles.css">
  </head>
  <body>
    <?php include("./partials/header.php")?>
    <main>
      <aside class = "discountAlert">
        <p>
          <span class = "highlightDiscount"><strong>Cupom</strong> 
            <span class = "sloganText">auudacioso1</span> 10&#37; OFF +
          </span> 
          brinde do dogin's na primeira compra
        </p>
        <span class = "heartIcon"></span>
      </aside>
      <section id="categoryProducts">
        <header>
          <div class="categoryTitle">
            <h1>Categorias de produtos</h1>
            <span class = "heartIcon"></span>
          </div>
        </header>
        <main>
          <div class="categoriesWrapper">
            <!-- TODO: Colocar os cards de categorias aqui -->
          </div>
        </main>
      </section>
    </main>
    <?php include("./partials/footer.php")?>
    <script src="./assets/js/main.js"></script>
  </body>
</html>