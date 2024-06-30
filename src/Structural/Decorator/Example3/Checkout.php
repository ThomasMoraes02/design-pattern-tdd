<?php 
namespace DesignPattern\Structural\Decorator\Example3;

class Checkout implements UseCase
{
    public function execute(): void
    {
        echo "Execute Checkout.";
    }
}