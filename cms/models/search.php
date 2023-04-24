<?php
    include("../../config/conn.php");
    include("../views/components/productCardMask.php");
    include("../views/components/productList.php");

    if(isset($_POST['busca']) && $_POST['busca'] != ""){  
        $busca = $_POST['busca'];

        $collection = $db->products;

        if($collection->count(['productName' => ['$regex' => new MongoDB\BSON\Regex($busca, 'i')]]) > 0){
            $products = $collection->find(['productName' => ['$regex' => new MongoDB\BSON\Regex($busca, 'i')]]);
            createProductList($busca, "bg-primary", $products);
        }else{
            echo $busca;
        }
    }

?>