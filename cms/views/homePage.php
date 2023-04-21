<?php 
    include("../../config/conn.php");
    include("./blades/header.php");
    include("./components/productCardMask.php");
    include("../models/paginateResults.php");
    include("../../public/utils/components/pagination.php");
?>
<main>
    <section class="productsList">
        <?php   
            /*$conn = $connectMongoDB('dogin');
            $collection = 'products';
            $filter = array();
            $products = $conn->$collection->find();
            $total = $conn->$collection->count();
            foreach($products as $key){
                createProductCardMask($key['imagens_produto'], $key['titulo_anuncio'], $key['marca_anuncio'], $key['peso_produto'], $key['preco_produto']);
            }*/
            $conn = $connectMongoDB('dogin');
            $collection = 'products';
            $total = $conn->$collection->count();
            
            paginateResults($conn, $collection, $total, $_GET['page'] ?? 1, 15);
        ?>
    </section>
    <section>
        <?php
            createPagination($total, 15, $_GET['page'] ?? 1, "homePage.php");
        ?>
    </section>
</main>
<a href="novo_produto.php?page=Novo Produto">Cadastrar</a>
<?php include("./blades/footer.php"); ?>