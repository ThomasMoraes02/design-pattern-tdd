<?php 
namespace DesignPattern\Behavioral\Command;

class Order
{
    public function __construct(public readonly int $id, public readonly int $userId, public readonly float $amount) {}
}