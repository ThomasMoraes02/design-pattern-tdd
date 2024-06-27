<?php 
namespace DesignPattern\Behavioral\State\States;

use DesignPattern\Behavioral\State\OrderState;
use DesignPattern\Behavioral\State\OrderContext;
use DesignPattern\Behavioral\State\States\ProcessingOrder;

class NewOrder implements OrderState
{
    public function proceedToNext(OrderContext $context): void
    {
        $context->setState(new ProcessingOrder());
    }

    public function getStatus(): string
    {
        return 'New Order';
    }
}