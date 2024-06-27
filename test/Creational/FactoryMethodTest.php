<?php

use DesignPattern\Creational\FactoryMethod\Factories\ClothingProductFactory;
use DesignPattern\Creational\FactoryMethod\Factories\EletronicProductFactory;

test("Deve criar um produto eletrônico", function() {
    $eletronicFactory = new EletronicProductFactory();
    $laptop = $eletronicFactory->createProduct(1, "Notebook Dell G15", 5300);
    expect($laptop->getType())->toBe("Eletronic");
    expect($laptop->toArray())->toMatchArray([
        "id" => 1,
        "name" => "Notebook Dell G15",
        "price" => 5300.0
    ]);
});

test("Deve criar um produto de roupa", function() {
    $clothingFactory = new ClothingProductFactory();
    $tshirt = $clothingFactory->createProduct(2, "Camiseta branca", 100);
    expect($tshirt->getType())->toBe("Clothing");
    expect($tshirt->toArray())->toMatchArray([
        "id" => 2,
        "name" => "Camiseta branca",
        "price" => 100.0
    ]);
});