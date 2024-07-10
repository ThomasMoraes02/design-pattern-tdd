<?php

use DesignPattern\Structural\Composite\ValidatorComposite;
use DesignPattern\Structural\Composite\Validators\IsStringValidator;
use DesignPattern\Structural\Composite\Validators\NotEmptyValidator;

test("Deve criar validações com composite", function() {
    $validator = new ValidatorComposite();
    $validator->addValidator(new NotEmptyValidator());
    $validator->addValidator(new IsStringValidator());

    $input = "Test";
    expect($validator->validate($input))->toBeTrue();
    expect($validator->getErrors())->toBeEmpty();
});

test("Deve retornr o erro ao validar string vazia com composite", function() {
    $validator = new ValidatorComposite();
    $validator->addValidator(new NotEmptyValidator());
    $validator->addValidator(new IsStringValidator());

    $input = "";
    expect($validator->validate($input))->toBeFalse();
    expect($validator->getErrors())->toBe(["O campo não pode ser vazio"]);
});

test("Deve retornr o erro ao validar inteiro com composite", function() {
    $validator = new ValidatorComposite();
    $validator->addValidator(new NotEmptyValidator());
    $validator->addValidator(new IsStringValidator());

    $input = 1;
    expect($validator->validate($input))->toBeFalse();
    expect($validator->getErrors())->toBe(["O campo deve ser uma string"]);
});