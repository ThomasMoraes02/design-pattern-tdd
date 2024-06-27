<?php 
namespace DesignPattern\Behavioral\Observer\Observers;

use DesignPattern\Behavioral\Observer\Observer;

class BillingService implements Observer
{
    public function update(mixed $data): void
    {
        echo "Billing Service notified for order {$data['id']}\n";
    }
}