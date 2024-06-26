<?php 
namespace DesignPattern\Structural\Proxy;

class Product implements ProductInterfaceProxy
{
    public function __construct(private readonly int $id, private readonly string $name, private readonly float $price) {}

    public function id(): int
    {
        return $this->id;
    }

    public function getDetails(): array 
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
        ];
    }
}