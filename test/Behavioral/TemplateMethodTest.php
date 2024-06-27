<?php

use DesignPattern\Behavioral\TemplateMethod\TemplateMethods\AirShippingCalculator;
use DesignPattern\Behavioral\TemplateMethod\TemplateMethods\LandShippingCalculator;
use DesignPattern\Behavioral\TemplateMethod\TemplateMethods\SeaShippingCalculator;

test("Deve calcular um frete de transporte terrestre", function() {
    $landCalculator = new LandShippingCalculator();
    $cost = $landCalculator->calculate(100, 10);
    expect($cost)->toBe(62.0);
});

test("Deve calcular um frete de transporte aéreo", function() {
    $airCalculator = new AirShippingCalculator();
    $cost = $airCalculator->calculate(100, 10);
    expect($cost)->toBe(205.0);
});

test("Deve calcular um frete de transporte marítimo", function() {
    $seaCalculator = new SeaShippingCalculator();
    $cost = $seaCalculator->calculate(100, 10);
    expect($cost)->toBe(120.0);
});