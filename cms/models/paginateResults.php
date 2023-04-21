<?php
    include("../../config/conn.php");
    function paginateResults($conn, $collection, $total, $currentPage, $resultsPerPage){
        
        $totalPages = ceil($total / $resultsPerPage);

        $initial = ($currentPage - 1) * $resultsPerPage;
        $products = $conn->$collection->find([], ['skip' => $initial, 'limit' => $resultsPerPage]);
        
        foreach($products as $key){
            createProductCardMask($key['imagens_produto'], $key['titulo_anuncio'], $key['marca_anuncio'], $key['peso_produto'], $key['preco_produto']);
        }
    }
?>