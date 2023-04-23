<?php
    function paginateResults($collection, $total, $currentPage, $resultsPerPage){
        
        $totalPages = ceil($total / $resultsPerPage);

        $initial = ($currentPage - 1) * $resultsPerPage;
        $products = $collection->find([], ['sort' => ['_id' => -1], 'skip' => $initial, 'limit' => 4]);
        
        echo "<div class='productList otherProducts border-radius_top'>".
                "<h2 class='title'>Outros Produtos</h2>".
                "<div class='container'>";

        foreach($products as $key){
            $imagem = $key['productImages'][0];
            createProductCardMask($key['_id'], $imagem, $key['productName'], $key['brandName'], $key['productWeight'], $key['productPrice']);
        }

        echo "</div></div>";

        $i = 1;

        while($i<=2){
            if($collection->count([], ['skip' => $initial + 4 * $i, 'limit' => 4]) > 0){
                $products = $collection->find([], ['skip' => $initial + 4 * $i, 'limit' => 4]);
            
                echo "<div class='productList otherProducts'>".
                    "<div class='container'>";

                foreach($products as $key){
                    $imagem = $key['productImages'][0];
                    createProductCardMask($key['_id'], $imagem, $key['productName'], $key['brandName'], $key['productWeight'], $key['productPrice']);
                }

                echo "</div></div>";
            }
            $i++;
        }

    }
?>