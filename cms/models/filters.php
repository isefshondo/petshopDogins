<?php
    include("../../config/conn.php");
    include("../views/components/productCardMask.php");
    include("../views/components/productList.php");

    if(isset($_POST["filters"])){
        $filters = $_POST["filters"];

        $collection = $db->products;

        if($collection->count(["brandName" => ['$in' => $filters]]) > 0){
            $products = $collection->find(["brandName" => ['$in' => $filters]]);
            createProductList('Marcas', "bg-primary", $products);
        }else{
            echo implode(", ", $filters);
        }
    }
    
?>
