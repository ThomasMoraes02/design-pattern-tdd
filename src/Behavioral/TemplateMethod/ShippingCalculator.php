<?php 
namespace DesignPattern\Behavioral\TemplateMethod;

abstract class ShippingCalculator
{
    public function calculate(float $distance, float $weight): float
    {
        $baseCost = $this->calculateBaseCost($distance, $weight);
        $additionalFees = $this->calculateAdditionalFees();
        $totalCost = $baseCost + $additionalFees;
        return $totalCost;
    }

    abstract protected function calculateBaseCost($distance, $weight);

    abstract protected function calculateAdditionalFees();
}