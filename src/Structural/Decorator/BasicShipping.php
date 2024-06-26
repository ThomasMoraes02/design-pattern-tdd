<?php 
namespace DesignPattern\Structural\Decorator;

class BasicShipping implements ShippingCost
{
    public function __construct(private float $baseCost) {}

    public function calculateCost(): float
    {
        return $this->baseCost;
    }
}