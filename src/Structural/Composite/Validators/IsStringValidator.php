<?php 
namespace DesignPattern\Structural\Composite\Validators;

use DesignPattern\Structural\Composite\Validator;

class IsStringValidator implements Validator
{
    public function validate(mixed $input): bool
    {
        return is_string($input);
    }

    public function getErrorMessage(): string
    {
        return "O campo deve ser uma string";
    }
}