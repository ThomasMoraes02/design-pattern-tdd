<?php 
namespace DesignPattern\Structural\Decorator;

use DesignPattern\Structural\Decorator\ShippingCost;

abstract class ShippingCostDecorator implements ShippingCost
{
    public function __construct(protected ShippingCost $decoratedShippingCost) {}

    public function calculateCost(): float
    {
        return $this->decoratedShippingCost->calculateCost();
    }
}