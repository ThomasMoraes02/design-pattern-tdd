<?php 
namespace DesignPattern\Behavioral\Memento;

use DesignPattern\Behavioral\Memento\Memento;

class CartHistory
{
    /** @var Memento[] */
    private array $mementos = [];

    public function addMemento(Memento $memento): void
    {
        $this->mementos[] = $memento;
    }

    public function getMemento(mixed $index): ?Memento
    {
        if(isset($this->mementos[$index])) return $this->mementos[$index];
        return null;
    }
}