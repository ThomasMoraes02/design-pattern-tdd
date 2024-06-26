<?php 
namespace DesignPattern\Behavioral\Strategy;

class Pix implements PaymentMethod
{
    public function create(mixed $payment): PaymentMethod
    {
        return $this;
    }
}