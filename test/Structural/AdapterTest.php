<?php

use DesignPattern\Structural\Adapter\Adapters\MoipPaymentAdapter;
use DesignPattern\Structural\Adapter\Adapters\PagarmePaymentAdapter;
use DesignPattern\Structural\Adapter\PaymentProcessors\MoipPayment;
use DesignPattern\Structural\Adapter\PaymentProcessors\PagarmePayment;

test("Deve criar um pagamento utilizando a Pagarme", function() {
    $pagarmeAdapter = new PagarmePaymentAdapter(new PagarmePayment());
    $result = $pagarmeAdapter->pay(200);
    expect($result)->toBe("Pagando R$ 200 com o Pagarme.");
});

test("Deve criar um pagamento utilizando a Moip", function() {
    $pagarmeAdapter = new MoipPaymentAdapter(new MoipPayment());
    $result = $pagarmeAdapter->pay(300);
    expect($result)->toBe("Pagando R$ 300 com o Moip.");
});