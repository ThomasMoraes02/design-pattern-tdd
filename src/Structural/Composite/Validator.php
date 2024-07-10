<?php
namespace DesignPattern\Structural\Composite;

interface Validator
{
    public function validate(mixed $input): bool;

    public function getErrorMessage(): string;
}