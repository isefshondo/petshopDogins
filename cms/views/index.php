<?php 
    include('../../app/views/blades/header.php');
    include("../../app/views/components/sectionHeader.php");
    include("../../app/views/components/couponNotice.php");
?>
<header>
  <div class="headerContainer">
    <img src="../../public/imgs/logo.svg" alt="Dogin's Logo">
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
      <a href="#" class = "btnSeller">Sou vendedor</a>
      <a href="../../app/views/404.php" class = "btnLoginSignin">Entrar/Cadastrar</a>
    </div>
  </div>
  <nav class = "navCategory">
    <ul>
      <a href="#"><li>Acessórios</li></a>
      <a href="#"><li>Alimentação</li></a>
      <a href="#"><li>Brinquedos</li></a>
      <a href="#"><li>Medicamentos</li></a>
      <a href="#"><li>Higiene e Limpeza</li></a>
    </ul>
  </nav>
</header>
<section id="img-login">
    <img src="../../public/imgs/login.png">
</section>
<section id="forms-login">
    <h1>Faça parte do nosso time AUUdacioso!</h1>
    <form action="" id="forms">
        <div id="titulo-forms">
            <h3>Faça seu login</h3><span class="heartIcon"></span>
        </div>
        <div id="text-login">
            <p>Usuário</p>
            <input type="text" name="usuario">
            <p>Senha</p>
            <input type="password" name="senha"><br>
            <div class="btnLoginWrapper">
                <button class="btnLogin">Entrar</button><br>
            </div>
        </div>
        <div id="text-link">
            <a href="#"> Ainda não tem uma conta?</a>
            <a href="../../app/views/404.php">Cadastre-se</a>
        </div>
    </form>
</section>
<?php 
    include('../../app/views/partials/footer.php');
    include('../../app/views/blades/footer.php');
?>