<?php 
namespace DesignPattern\Creational\Prototype;

class Product implements ProductPrototype
{
    public function __construct(private int $id, private string $name, private float $price) {}

    public function clone(): self
    {
        return clone $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}