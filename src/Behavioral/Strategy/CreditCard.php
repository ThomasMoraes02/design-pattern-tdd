<?php 
namespace DesignPattern\Behavioral\Strategy;

class CreditCard implements PaymentMethod
{
    public function create(mixed $payment): PaymentMethod
    {
        return $this;
    }
}