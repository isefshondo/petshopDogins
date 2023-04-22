<?php
    function paginateResults($conn, $collection, $total, $currentPage, $resultsPerPage){
        
        $totalPages = ceil($total / $resultsPerPage);

        $initial = ($currentPage - 1) * $resultsPerPage;
        $products = $conn->$collection->find([], ['skip' => $initial, 'limit' => 4]);
        
        echo "<div class='productList border-radius_top'>".
                "<h2 class='title'>Outros Produtos</h2>".
                "<div class='container'>";

        foreach($products as $key){
            createProductCardMask($key['productImage'], $key['productName'], $key['brandName'], $key['productWeight'], $key['productPrice']);
        }

        echo "</div></div>";

        $i = 1;

        while($i<=2){
            $products = $conn->$collection->find([], ['skip' => $initial + 4 * $i, 'limit' => 4]);
            
            echo "<div class='productList otherProducts'>".
                "<div class='container'>";

            foreach($products as $key){
                createProductCardMask($key['productImage'], $key['productName'], $key['brandName'], $key['productWeight'], $key['productPrice']);
            }

            echo "</div></div>";

            $i++;
        }

    }
?>