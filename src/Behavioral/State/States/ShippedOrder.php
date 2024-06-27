<?php 
namespace DesignPattern\Behavioral\State\States;

use DesignPattern\Behavioral\State\OrderContext;
use DesignPattern\Behavioral\State\OrderState;

class ShippedOrder implements OrderState
{
    public function proceedToNext(OrderContext $context): void
    {
        $context->setState(new DeliveredOrder());
    }

    public function getStatus(): string
    {
        return 'Shipped Order';
    }
}