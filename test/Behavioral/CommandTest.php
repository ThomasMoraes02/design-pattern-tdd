<?php

use DesignPattern\Behavioral\Command\CreateOrderCommand;
use DesignPattern\Behavioral\Command\CreateOrderHandler;

test("Deve criar um pedido", function() {
    $orderCommand = new CreateOrderCommand(1, 1500);
    $orderHandler = new CreateOrderHandler();
    $order = $orderHandler->handle($orderCommand);

    expect($order->id)->toBeInt();
    expect($order->amount)->toBe(1500.0);
    expect($order->userId)->toBe(1);
});