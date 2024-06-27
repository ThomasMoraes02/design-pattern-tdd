<?php 
namespace DesignPattern\Behavioral\TemplateMethod\TemplateMethods;

use DesignPattern\Behavioral\TemplateMethod\ShippingCalculator;

class AirShippingCalculator extends ShippingCalculator
{
    protected function calculateBaseCost($distance, $weight): float
    {
        return ($distance * 1.2) + ($weight * 3.5);
    }

    protected function calculateAdditionalFees(): float
    {
        return 50;
    }
}