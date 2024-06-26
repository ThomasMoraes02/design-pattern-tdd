<?php

use DesignPattern\Structural\Decorator\BasicShipping;
use DesignPattern\Structural\Decorator\Decorators\GiftWrapDecorator;
use DesignPattern\Structural\Decorator\Decorators\InsuranceDecorator;

beforeEach(function() {
    $this->basicShipping = new BasicShipping(150.0);
});

test("Deve calcular o frete", function() {
    expect($this->basicShipping->calculateCost())->toBe(150.0);
});

test("Deve calcular o frete e adicionar seguro", function() {
    $insuranceShipping = new InsuranceDecorator($this->basicShipping, 50.0);
    expect($insuranceShipping->calculateCost())->toBe(200.0);
});

test("Deve calcular o frete, adicionar seguro e adicionar embalagem", function() {
    $insuranceShipping = new InsuranceDecorator($this->basicShipping, 50.0);
    $giftWrap = new GiftWrapDecorator($insuranceShipping, 15.5);
    expect($giftWrap->calculateCost())->toBe(215.5);
});