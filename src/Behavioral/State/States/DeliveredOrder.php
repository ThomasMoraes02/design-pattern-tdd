<?php 
namespace DesignPattern\Behavioral\State\States;

use DesignPattern\Behavioral\State\OrderContext;
use DesignPattern\Behavioral\State\OrderState;

class DeliveredOrder implements OrderState
{
    public function proceedToNext(OrderContext $context): void {}

    public function getStatus(): string
    {
        return 'Delivered Order';
    }
}