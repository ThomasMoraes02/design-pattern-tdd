<?php 

use DesignPattern\Behavioral\Strategy\Pix;
use DesignPattern\Behavioral\Strategy\CreditCard;
use DesignPattern\Behavioral\Strategy\PaymentFactory;

test("Deve criar um pagamento", function() {
    $paymentCreditCard = PaymentFactory::create('credit_card');
    $paymentPix = PaymentFactory::create('pix');

    expect($paymentCreditCard)->toBeInstanceOf(CreditCard::class);
    expect($paymentPix)->toBeInstanceOf(Pix::class);
});

test("Deve lançar uma exceção para um método inválido", function() {
    expect(fn() => PaymentFactory::create('invalid'))->toThrow(Exception::class);
});