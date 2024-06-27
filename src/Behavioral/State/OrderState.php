<?php 
namespace DesignPattern\Behavioral\State;

use DesignPattern\Behavioral\State\OrderContext;

interface OrderState
{
    public function proceedToNext(OrderContext $context): void;

    public function getStatus(): string;
}