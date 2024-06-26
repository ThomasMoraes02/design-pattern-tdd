<?php 
namespace DesignPattern\Behavioral\Strategy;

use Exception;
use DesignPattern\Behavioral\Strategy\Pix;
use DesignPattern\Behavioral\Strategy\CreditCard;
use DesignPattern\Behavioral\Strategy\PaymentMethod;

abstract class PaymentFactory
{
    public static function create(string $payment): PaymentMethod
    {
        return match($payment) {
            'credit_card' => new CreditCard(),
            'pix' => new Pix(),
            default => throw new Exception('Invalid payment method')
        };
    }
}