<?php 
namespace DesignPattern\Behavioral\Iterator;

class ProductIterator implements Iterator
{
    private $position = 0;

    public function __construct(private array $products) {}

    public function hasNext(): bool
    {
        return $this->position < count($this->products);
    }

    public function next(): mixed
    {
        return $this->products[$this->position++];
    }
}