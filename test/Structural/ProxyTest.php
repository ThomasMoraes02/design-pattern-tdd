<?php

use DesignPattern\Structural\Proxy\Product;
use DesignPattern\Structural\Proxy\ProductProxy;
use DesignPattern\Structural\Proxy\Repository\ProductRepositoryMemory;

test("Deve retornar um array", function() {
    $productRepository = new ProductRepositoryMemory();
    $productRepository->create(new Product(1, "Product", 1500.5));

    $productProxy = new ProductProxy(1, $productRepository);

    expect($productProxy->getDetails(1))->toMatchArray([
        "id" => 1,
        "name" => "Product",
        "time" => 1,
    ]);

    expect($productProxy->getDetails(1))->toMatchArray([
        "id" => 1,
        "name" => "Product",
        "time" => 2,
    ]);

    expect($productProxy->getDetails(1))->toMatchArray([
        "id" => 1,
        "name" => "Product",
        "time" => 2,
    ]);
});