<?php 
namespace DesignPattern\Structural\Composite;

use DesignPattern\Structural\Composite\Validator;

class ValidatorComposite
{
    /** @var Validator[] */
    private array $validators = [];

    private array $errors = [];

    public function addValidator(Validator $validator): void
    {
        $this->validators[] = $validator;
    }

    public function validate(mixed $input): bool
    {
        foreach($this->validators as $validator) {
            if(!$validator->validate($input)) {
                $this->errors[] = $validator->getErrorMessage();
            }
        }
        return empty($this->errors) ? true : false;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}