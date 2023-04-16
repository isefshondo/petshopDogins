<?php 
    include("blades/header.php");
    include('components/productCardMask.php');
    include('../../models/conn.php');
?>
<main>
    <section class="productsList">
        <?php 
            $conn = $connectMongoDB('dogin');
            $collection = 'products';
            $filter = array();
            $products = $conn->$collection->find();
            foreach($products as $key){
                createProductCardMask($key['imagens_produto'], $key['titulo_anuncio'], $key['marca_anuncio'], $key['peso_produto'], $key['preco_produto']);
            }
        ?>
    </section>
</main>
<a href="novo_produto.php?page=Novo Produto">Cadastrar</a>
<?php include("blades/footer.php"); ?>