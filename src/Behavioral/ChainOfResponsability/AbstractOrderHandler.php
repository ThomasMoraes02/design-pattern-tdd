<?php 
namespace DesignPattern\Behavioral\ChainOfResponsability;

abstract class AbstractOrderHandler implements OrderHandler
{
    private ?OrderHandler $nextHandler = null;

    public function setNext(OrderHandler $handler): OrderHandler
    {
        $this->nextHandler = $handler;
        return $handler;
    }

    public function handle(array $order): ?string
    {
        if($this->nextHandler) return $this->nextHandler->handle($order);
        return null;
    }
}