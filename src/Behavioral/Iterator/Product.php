<?php 
namespace DesignPattern\Behavioral\Iterator;

class Product
{
    public function __construct(private readonly int $id, private readonly string $name, private readonly float $price) {}

    public function toArray(): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "price" => $this->price
        ];
    }
}