<?php 
namespace DesignPattern\Structural\Decorator\Decorators;

use DesignPattern\Structural\Decorator\ShippingCost;
use DesignPattern\Structural\Decorator\ShippingCostDecorator;

class GiftWrapDecorator extends ShippingCostDecorator
{
    public function __construct(protected ShippingCost $decoratedShippingCost, private float $giftWrapCost) 
    {
        parent::__construct($decoratedShippingCost);
    }

    public function calculateCost(): float
    {
        return parent::calculateCost() + $this->giftWrapCost;
    }
}