<?php 
namespace DesignPattern\Behavioral\ChainOfResponsability;

interface OrderHandler
{
    public function setNext(OrderHandler $handler): OrderHandler;

    public function handle(array $order): ?string;
}