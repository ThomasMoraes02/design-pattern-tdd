<?php 
namespace DesignPattern\Behavioral\Observer\Observers;

use DesignPattern\Behavioral\Observer\Observer;

class InventoryService implements Observer
{
    public function update(mixed $data): void
    {
        echo "Inventory Service notified for order {$data['id']}\n";
    }
}