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

#Configurando o MongoDB para utilização com PHP

###### Requisitos

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

<p></p>
