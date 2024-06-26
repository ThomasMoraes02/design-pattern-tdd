<?php 
namespace DesignPattern\Structural\Decorator\Decorators;

use DesignPattern\Structural\Decorator\ShippingCost;
use DesignPattern\Structural\Decorator\ShippingCostDecorator;

class InsuranceDecorator extends ShippingCostDecorator
{
    public function __construct(protected ShippingCost $decoratedShippingCost, private float $insuranceCost) 
    {
        parent::__construct($decoratedShippingCost);
    }

    public function calculateCost(): float
    {
        return parent::calculateCost() + $this->insuranceCost;
    }
}