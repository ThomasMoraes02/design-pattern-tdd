<?php 
namespace DesignPattern\Behavioral\Strategy;

interface PaymentMethod
{
    public function create(mixed $payment): PaymentMethod;
}