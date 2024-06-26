<?php 
namespace DesignPattern\Structural\Adapter;

interface PaymentProcessor
{
    public function pay(int $amount): string;
}