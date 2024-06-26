<?php 
namespace DesignPattern\Behavioral\Memento;

class Memento
{
    public function __construct(private readonly mixed $state) {}

    public function getState(): mixed
    {
        return $this->state;
    }
}