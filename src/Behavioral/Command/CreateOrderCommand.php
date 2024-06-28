<?php 
namespace DesignPattern\Behavioral\Command;

class CreateOrderCommand
{
    public function __construct(public readonly int $userId, public readonly float $amount) {}
}