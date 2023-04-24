# Petshop Dogin's
<aside><strong>Este projeto tem como intuito colocar em prática a metodologia Scrum, uma abordagem ágil de gerenciamento de projetos que se baseia em sprints, 
reuniões diárias e retrospectivas para entregar um produto de alta qualidade de forma eficiente e eficaz</strong></aside>

###### Descrição
<p> O projeto consiste em um ecommerce onde um administrador poderá realizar o gerenciamento dos produtos cadastrados, incluindo a adição, edição e exclusão de produtos, 
bem como a definição de seus preços, descrições e imagens.</p>

## Como rodar este projeto?

<p>Clone este repositório em computador utilizando o comando:</p>

```
git clone https://github.com/isefsh/petshopDogins.git
```

# Configurando o MongoDB para utilização com PHP

###### Requisitos

<li>XAMPP</li>
<li>PHP (versão 7.2 ou superior)</li>
<li>MongoDB</li>
<li>Composer</li>

## Verificando a versão do PHP

<p>Crie um arquivo.php com o codigo abaixo na pasta htdocs do xampp e execute no navegador. Será exibido no navegador a versão do PHP e se a extensão do MongoDB está instalado</p>

```
<?php 
    $php_version = phpversion();
    echo "A versão do PHP instalada é: " . $php_version . "<br><br>";

    if (extension_loaded('mongodb')) {
        echo "O MongoDB está instalado no PHP";
    } else {
        echo "O MongoDB não está instalado no PHP";
    } 
?>
```

## Instalação da extensão do MongoDB

<p>Caso o MongoDB não esteja instalado em seu servidor, você pode baixar a extensão PHP do MongoDB da página oficial do PECL (PHP Extension Community Library)</p>

1. Acesse https://pecl.php.net/package/mongodb/ e baixe a versão correspondente à sua versão do PHP e do sistema operacional.

2. Extraia o arquivo php_mongodb.dll para o diretório que contém as extensões do PHP no XAMPP (ou no seu servidor web). Por exemplo, se você estiver usando o XAMPP no Windows, o caminho padrão para o diretório de extensões é: C:\xampp\php\ext

3. Adicione a extensão do MongoDB ao seu arquivo php.ini. Abra o arquivo php.ini em um editor de texto e adicione a seguinte linha no final do arquivo:

```
extension=php_mongodb.dll
```

4. Salve o arquivo php.ini e reinicie o servidor web (Apache, Nginx, etc.) para que as alterações tenham efeito.
