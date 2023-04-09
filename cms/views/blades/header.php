<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/config.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="../../views/assets/styles/styles.css">
    <title><?php echo $_GET['nome_pagina'] ?? "Pagina Inicial"; ?></title>
</head>
<body>
<header>
  <div class="headerContainer">
    <div class="headerContainer_title">
      <img src="../../views/assets/imgs/logo.svg" alt="Dogin's Logo">
      <div class="headerContainer_subtitle">
        <span class="redHeartIcon"></span>
        <h2>Para pets AUUdaciosos</h2>
      </div>
    </div>
    <div class="form-buttons w-25">  
      <div>
        <a href="../../views/">Voltar à loja</a>
      </div>
      <div class="buttonWrapper">
        <button class = "btnSeller">Sair/Logout</button>
      </div>
    </div>
  </div>
  <nav class = "navCategory" style="font-size: 12px;">
    <ul>
      <li>
        <a href="#">
            <span class = "likeIcon"></span>
            Mais comprados
        </a>
      </li>
      <li>
        <a href="#">
            <span class = "cartIcon"></span>
            Baixo Estoque 
        </a>
      </li>
      <li>
        <a href="#">
            <span class = "newProductIcon"></span>
            Cadastrar Produto
        </a>
      </li>
    </ul>
  </nav>
</header>