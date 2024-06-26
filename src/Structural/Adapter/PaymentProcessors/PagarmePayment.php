<?php 
namespace DesignPattern\Structural\Adapter\PaymentProcessors;

class PagarmePayment
{
    public function execute(int $amount): string
    {
        return "Pagando R$ {$amount} com o Pagarme.";
    }
}