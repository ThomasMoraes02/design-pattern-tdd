<?php 
namespace DesignPattern\Structural\Adapter\PaymentProcessors;

class MoipPayment
{
    public function executePayment(int $amount): string
    {
        return "Pagando R$ {$amount} com o Moip.";
    }
}