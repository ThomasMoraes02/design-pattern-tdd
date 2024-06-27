<?php 
namespace DesignPattern\Behavioral\Observer\Observers;

use DesignPattern\Behavioral\Observer\Observer;

class ShippingService implements Observer
{
    public function update(mixed $data): void
    {
        echo "Shipping Service notified for order {$data['id']}\n";
    }
}