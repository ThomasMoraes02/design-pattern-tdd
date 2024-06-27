<?php 
namespace DesignPattern\Behavioral\Observer;

use DesignPattern\Behavioral\Observer\Observer;

class Order
{
    /** @var Observer[] */
    private array $observers = [];

    private readonly int $id;

    public function __construct(private float $total = 0) {}

    public function addObserver(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observer): void
    {
        $this->observers = array_filter($this->observers, fn($obs) => $obs !== $observer);
    }

    public function notifyObservers(mixed $data)
    {
        foreach($this->observers as $observer) {
            $observer->update($data);
        }
    }

    public function id(): int
    {
        return $this->id;
    }

    public function checkout(): void
    {
        $this->id = 1;
        $this->notifyObservers(['id' => $this->id]);
    }
}