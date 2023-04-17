<?php
    $dataNames = array(
        'productCategory' => 'productCategory', 
        'productName' => 'productName',
        'productDescription' => 'productDescription',
        'brandName' => 'brandName',
        'universalProductCode' => 'universalProductCode',
        'productImages' => 'productImages[]',
        'productColors' => 'productColors[]',

        
        'oldPrice' => 'oldPrice',
    );

    $categoriesOptions = array(
        'acessories' => ['accessories', 'Acessórios'],
        'food' => ['food', 'Alimentação'],
        'toys' => ['toys', 'Brinquedos'],
        'medicines' => ['medicines', 'Medicamentos'],
        'hygiene' => ['hygiene', 'Higiene e Limpeza'],
    );

    $sizes = array(
        'sizes' => ['P', 'M', 'G', 'Unico'],
    );

    $patterns = array(
        'universalProductCode' => '^\d{8,14}$', // de 8 a 14 numeros 
    );

    $dataLimits = array(
        'productName' => '200',
        'productDescription' => '2000',
        'brandName' => '200',
        'universalProductCode' => '14',
    );
?>