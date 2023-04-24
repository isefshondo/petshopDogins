<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        // Redirecionar o usuário para a página de login
        header('location:./index.php');
        exit();
    }
    session_write_close();
    

    include("../../config/conn.php");
    include("../../public/utils/components/popup.php");
    include("./blades/header.php");
    include("./components/productCardMask.php");
    include("./components/productList.php");
    include("./components/paginateResults.php");
    include("../../public/utils/components/pagination.php");

    
    $collection = $db->products;
    $total = $collection->count();
?>
<section class="homePageHead">
    <div class="head">
        <h1>Cadastre ou edite os seus produtos</h1>
        <input type="search" name="busca" id="busca" placeholder="Pesquisar por um produto já cadastrado">
    </div>
</section>
<main class="catalog">
    <section class="sidebar">
        <div class="cardButton">
            <h3>Cadastre um novo produto aqui!</h3>
            <a class="btn btn-primary" href="registerProduct.php">Cadastrar</a>
        </div>
        <hr class="line_horizontal">
        <div class="sidebar_items">
            <h3>Subcategorias</h3>
            <a href="homePage.php?sub=Acessórios">Acessórios</a>
            <a href="homePage.php?sub=Alimentação">Alimentação</a>
            <a href="homePage.php?sub=Brinquedos">Brinquedos</a>
            <a href="homePage.php?sub=Higiêne">Higiêne e Limpeza</a>
            <a href="homePage.php?sub=Medicamentos">Medicamentos</a>
        </div>
        <hr class="line_horizontal">
        <div class="sidebar_items">
            <h3>Marcas</h3>
            <?php

                $pipeline = [['$group' => ['_id' => '$brandName', 'count' => ['$sum' => 1]]]];

                $cursor = $collection->aggregate($pipeline);
            
                if(isset($cursor)){
                    $brands = [];
                    foreach ($cursor as $key) {
                        $brands[$key['_id']] = $key['count'];

                        echo "<label for='".$key['_id']."' ><input type='checkbox' id='".$key['_id']."' name='filters[]' value='".$key['_id']."'>&nbsp;".$key['_id']."(".$key['count'].")</label><br>";
                    }
                }
?>
        </div>
    </section>
    <section class="products">
        <div class="title">
            <h2>Edite produtos já cadastrados</h2> 
            <span class="info"></span>
        </div>
        <div id="modal-info" class="d-none">
            <div id="title-info">
                <span class = "Iconinfo"></span>
                Como editar meus produtos?
            </div>
            <div id="text-info">
                Para editar seu produto, basta passar o mouse sobre o produto que deseja alterar e 
                selecionar a opção “editar”, após isso você terá cacesso a uma interface semelhante 
                a qual realizou o cadastro onde poderá alterar os dados da forma como preferir
            </div>
        </div>
        <section class="productsList">
            <?php

                if(isset($_GET['sub'])){
                    if($collection->count(["productCategory" => $_GET['sub']]) > 0){
                        $sub = $collection->find(["productCategory" => $_GET['sub']]);
                        createProductList($_GET['sub'], "bg-primary", $sub);
                    }else{
                        echo "Nenhum produto nesta categoria";
                    }
                }

                
                echo "<div id='resultados'></div>";
                echo "<div id='filters'></div>";
                
                $page = $_GET['page'] ?? 0;
                if($page < 2){
                    if($collection->count(["amountSales" => ['$exists' => true]]) > 0){
                        $bestSellers = $collection->find(["amountSales" => ['$exists' => true]], ["sort" => ["amountSales" => -1], 'limit' => 4]);
                        createProductList("Mais comprados", "bg-secondary", $bestSellers);
                    }
            
                    if($collection->count(['$where' => 'this.productStock <= this.minStock']) > 0){       
                        $lowSotck = $collection->find(['$where' => 'this.productStock <= this.minStock'], ['limit' => 4]);
                        createProductList("Baixo Estoque", "bg-terciary", $lowSotck);
                    }
                }
                
                if($collection->count() > 0){
                    paginateResults($collection, $total, $_GET['page'] ?? 1, 12);
                }else{
                    echo "<p>Nenhum produto cadastrado</p>";
                }
                
            ?>
        </section>
    </section>
</main>

<section class="mb-4">
    <?php
        createPagination($total, 12, $_GET['page'] ?? 1, "homePage.php");
    ?>
</section>
<?php include("./blades/footer.php"); ?>