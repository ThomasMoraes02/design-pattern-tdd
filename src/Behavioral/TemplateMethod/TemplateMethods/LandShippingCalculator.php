<?php 
namespace DesignPattern\Behavioral\TemplateMethod\TemplateMethods;

use DesignPattern\Behavioral\TemplateMethod\ShippingCalculator;

class LandShippingCalculator extends ShippingCalculator
{
    protected function calculateBaseCost($distance, $weight): float
    {
        return ($distance * 0.5) + ($weight * 1.2);
    }

    protected function calculateAdditionalFees(): float
    {
        return 0;
    }
}