<?php

use DesignPattern\Behavioral\State\OrderContext;
use DesignPattern\Behavioral\State\States\ProcessingOrder;

test("Deve atualizar os estados de um pedido", function() {
    $order = OrderContext::create();
    expect($order->getStatus())->toBe('New Order');

    $order->transitionTo();
    expect($order->getStatus())->toBe('Processing Order');

    $order->transitionTo();
    expect($order->getStatus())->toBe('Shipped Order');

    $order->transitionTo();
    expect($order->getStatus())->toBe('Delivered Order');
    
    $order->transitionTo();
    expect($order->getStatus())->toBe('Delivered Order');
});