<?php 
namespace DesignPattern\Behavioral\State\States;

use DesignPattern\Behavioral\State\OrderContext;
use DesignPattern\Behavioral\State\OrderState;

class ProcessingOrder implements OrderState
{
    public function proceedToNext(OrderContext $context): void
    {
        $context->setState(new ShippedOrder());
    }

    public function getStatus(): string
    {
        return 'Processing Order';
    }
}