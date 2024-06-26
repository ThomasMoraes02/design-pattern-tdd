<?php 
namespace DesignPattern\Behavioral\ChainOfResponsability;

class CartNotEmptyHandler extends AbstractOrderHandler
{
    public function handle(array $order): ?string
    {
        if(empty($order['items'])) return "O carrinho está vazio";
        return parent::handle($order);
    }
}