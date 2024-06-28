<?php 
namespace DesignPattern\Behavioral\Command;

class CreateOrderHandler
{
    public function handle(CreateOrderCommand $command): Order
    {
        $orderId = random_int(1000, 9999);
        $order = new Order($orderId, $command->userId, $command->amount);
        return $order;
    }
}