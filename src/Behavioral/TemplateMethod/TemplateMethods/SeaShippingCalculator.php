<?php 
namespace DesignPattern\Behavioral\TemplateMethod\TemplateMethods;

use DesignPattern\Behavioral\TemplateMethod\ShippingCalculator;

class SeaShippingCalculator extends ShippingCalculator
{
    protected function calculateBaseCost($distance, $weight): float
    {
        return ($distance * 0.8) + ($weight * 2.0);
    }

    protected function calculateAdditionalFees(): float
    {
        return 20;
    }
}