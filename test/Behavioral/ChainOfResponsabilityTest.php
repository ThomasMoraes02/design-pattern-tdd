<?php 

use DesignPattern\Behavioral\ChainOfResponsability\CartNotEmptyHandler;
use DesignPattern\Behavioral\ChainOfResponsability\AddressValidationHandler;
use DesignPattern\Behavioral\ChainOfResponsability\StockAvailabilityHandler;

test("Deve ser capaz de processar um pedido", function() {
    $order = [
        "items" => [
            [
                "name" => "Produto 1", "quantity" => 2, "stock" => 10,
            ],
            [
                "name" => "Produto 2", "quantity" => 3, "stock" => 5,
            ]
        ],
        "address" => "123 Rua Teste, Cidade Teste, Estado Teste, CEP 12"
    ];

    $cartNotEmptyHandler = new CartNotEmptyHandler();
    $addressValidationHandler = new AddressValidationHandler();
    $stockAvailabilityHandler = new StockAvailabilityHandler();

    $cartNotEmptyHandler->setNext($addressValidationHandler)->setNext($stockAvailabilityHandler);
    $result = $cartNotEmptyHandler->handle($order);
    expect($result)->toBeNull();
});

test("Deve retornar uma mensagem de erro quando o carrinho estiver vazio", function() {
    $order = [];

    $cartNotEmptyHandler = new CartNotEmptyHandler();
    $addressValidationHandler = new AddressValidationHandler();
    $stockAvailabilityHandler = new StockAvailabilityHandler();

    $cartNotEmptyHandler->setNext($addressValidationHandler)->setNext($stockAvailabilityHandler);
    $result = $cartNotEmptyHandler->handle($order);
    expect($result)->toBe("O carrinho está vazio");
});