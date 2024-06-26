<?php 
namespace DesignPattern\Behavioral\Memento;

class Cart
{
    public function __construct(private array $items = []) {}

    public function addItem(Item $item): void
    {
        $this->items[$item->id] = $item;
    }

    public function removeItem(int $id): void
    {
        if(isset($this->items[$id])) unset($this->items[$id]);
    }

    /**
     * @return Item[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    public function save(): Memento
    {
        return new Memento($this->items);
    }

    public function restore(Memento $memento): void
    {
        $this->items = $memento->getState();
    }
}