<?php

use DesignPattern\Behavioral\Iterator\Product;
use DesignPattern\Behavioral\Iterator\ProductCollection;

test("Deve iterar sobre uma coleção de produtos", function() {
    $productCollection = new ProductCollection();
    $productCollection->addProduct(new Product(1, "Notebook", 1500.5));
    $productCollection->addProduct(new Product(2, "Tablet", 750.0));
    $productCollection->addProduct(new Product(3, "Smartphone", 900));

    $iterator = $productCollection->createIterator();

    while ($iterator->hasNext()) {
        $product = $iterator->next();
        expect($product)->toHaveKeys(['id', 'name', 'price']);
    }
});