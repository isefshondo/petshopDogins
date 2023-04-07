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
    <header>
      <div class="headerContainer">
        <img src="./assets/imgs/logo.svg" alt="Dogin's Logo">
        <form class = "searchForm">
          <input type="search" name="searchProduct" id="searchProduct" placeholder = "O que seu pet precisa?">
          <button type="submit" class = "searchButton">Search</button>
        </form>
        <a href="#">
          <span class = "likeIcon"></span>
          Mais comprados
        </a>
        <a href="#">
          <span class = "cartIcon"></span>
          Meu carrinho
        </a>
        <div class="buttonWrapper">
          <button class = "btnSeller">Sou vendedor</button>
          <button class = "btnLoginSignin">Entrar/Cadastrar</button>
        </div>
      </div>
    </header>
    <script src="./assets/js/main.js"></script>
  </body>
</html>