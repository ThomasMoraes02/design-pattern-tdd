<?php 
namespace DesignPattern\Structural\Composite\Validators;

use DesignPattern\Structural\Composite\Validator;

class NotEmptyValidator implements Validator
{
    public function validate(mixed $input): bool
    {
        return !empty($input);
    }

    public function getErrorMessage(): string
    {
        return "O campo não pode ser vazio";
    }
}