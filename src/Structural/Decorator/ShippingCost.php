<?php 
namespace DesignPattern\Structural\Decorator;

interface ShippingCost
{
    public function calculateCost(): float;
}