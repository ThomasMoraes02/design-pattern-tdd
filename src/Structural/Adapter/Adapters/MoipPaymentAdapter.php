<?php 
namespace DesignPattern\Structural\Adapter\Adapters;

use DesignPattern\Structural\Adapter\PaymentProcessor;
use DesignPattern\Structural\Adapter\PaymentProcessors\MoipPayment;

class MoipPaymentAdapter implements PaymentProcessor
{
    public function __construct(private readonly MoipPayment $processor) {}

    public function pay(int $amount): string
    {
        return $this->processor->executePayment($amount);
    }
}