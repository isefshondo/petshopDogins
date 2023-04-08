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
      <nav class = "navCategory">
        <ul>
          <li>Categorias</li>
          <li>Categorias</li>
          <li>Categorias</li>
          <li>Categorias</li>
        </ul>
      </nav>
    </header>
    <aside class = "discountAlert">
      <p>
        <span class = "highlightDiscount"><strong>Cupom</strong> 
          <span class = "sloganText">auudacioso</span> 10&#37; OFF +
        </span> 
          brinde do dogin's na primeira compra
      </p>
      <span class = "heartIcon"></span>
    </aside>
    <footer>
      <div class="doginsInfo">
        <figure>
          <img src="./assets/imgs/logo.svg" alt="Dogin's Logo">
          <figcaption>Para pets AUUdaciosos</figcaption>
        </figure>
        <div class = "socialMedia">
          <a href=""><span class = "socialInsta"></span></a>
          <a href=""><span class = "socialFacebook"></span></a>
        </div>
        <p>&#169; Dogin's, Inc. 2023. Petshop para pets AUUdaciosos!</p>
      </div>
      <nav class = "quickLinks">
        <h3>Quick Links</h3>
        <ul>
          <li>Sobre nós</li>
          <li>Contatos</li>
          <li>SAC</li>
        </ul>
      </nav>
      <nav class = "mostClicked">
        <h3>Mais acessados</h3>
        <ul>
          <li>Mais comprados</li>
          <li>Brinquedos</li>
          <li>Ração para filhotes</li>
        </ul>
      </nav>
      <div class = "footButtonWrapper">
        <button class = "btnLoginSignin">Entrar/Cadastrar</button>
        <button class = "btnSeller">Sou vendedor</button>
      </div>
    </footer>
    <script src="./assets/js/main.js"></script>
  </body>
</html>