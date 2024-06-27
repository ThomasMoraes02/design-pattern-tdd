<?php 
namespace DesignPattern\Behavioral\State;

use DesignPattern\Behavioral\State\States\NewOrder;

class OrderContext
{
    private OrderState $state;

    public static function create(): OrderContext
    {
        $order = new self();
        $order->state = new NewOrder();
        return $order;
    }

    public function setState(OrderState $state): void
    {
        $this->state = $state;
    }

    public function transitionTo(): void
    {
        $this->state->proceedToNext($this);
    }

    public function getStatus(): string
    {
        return $this->state->getStatus();
    }
}