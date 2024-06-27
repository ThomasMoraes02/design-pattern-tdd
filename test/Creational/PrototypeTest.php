<?php

use DesignPattern\Creational\Prototype\Product;

test("Deve clonar um produto", function() {
    $product = new Product(1, "Notebook", 1500.5);
    $productClone = $product->clone();

    $productClone->setId(2);
    expect($product->getId())->toBe(1);
    expect($productClone->getId())->toBe(2);
    expect($product->getName())->toBe($productClone->getName());
});