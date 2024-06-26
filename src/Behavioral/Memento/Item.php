<?php 
namespace DesignPattern\Behavioral\Memento;

class Item
{
    public function __construct(public readonly int $id, public readonly string $name, public readonly float $price) {}
}