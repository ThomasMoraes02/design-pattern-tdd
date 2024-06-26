<?php 
namespace DesignPattern\Structural\Adapter\Adapters;

use DesignPattern\Structural\Adapter\PaymentProcessor;
use DesignPattern\Structural\Adapter\PaymentProcessors\PagarmePayment;

class PagarmePaymentAdapter implements PaymentProcessor
{
    public function __construct(private readonly PagarmePayment $processor) {}

    public function pay(int $amount): string
    {
        return $this->processor->execute($amount);
    }
}