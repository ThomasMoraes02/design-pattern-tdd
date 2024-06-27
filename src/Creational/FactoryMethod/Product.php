<?php 
namespace DesignPattern\Creational\FactoryMethod;

abstract class Product
{
    public function __construct(private readonly int $id,private readonly string $name, private readonly float $price) {}

    abstract public function getType(): string;

    public function toArray(): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "price" => $this->price
        ];
    }
}