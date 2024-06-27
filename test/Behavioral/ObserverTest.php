<?php

use DesignPattern\Behavioral\Observer\Observers\BillingService;
use DesignPattern\Behavioral\Observer\Observers\InventoryService;
use DesignPattern\Behavioral\Observer\Observers\ShippingService;
use DesignPattern\Behavioral\Observer\Order;

test("Deve adicionar observers a um pedido", function() {
    $order = new Order(1, 100);
    $shippingService = new ShippingService();
    $inventoryService = new InventoryService();
    $billingService = new BillingService();

    $order->addObserver($shippingService);
    $order->addObserver($inventoryService);
    $order->addObserver($billingService);

    $order->removeObserver($inventoryService);

    ob_start();
    $order->checkout();
    $console = ob_get_clean();

    expect($console)->toBe("Shipping Service notified for order 1\nBilling Service notified for order 1\n");
    expect($order->id())->toBe(1);
});