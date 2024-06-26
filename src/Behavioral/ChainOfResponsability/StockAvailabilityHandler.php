<?php 
namespace DesignPattern\Behavioral\ChainOfResponsability;

class StockAvailabilityHandler extends AbstractOrderHandler
{
    public function handle(array $order): ?string
    {
        foreach ($order['items'] as $item) {
            if($item['quantity'] > $item['stock']) {
                return "O item {$item['name']} não tem estoque suficiente.";
            }
        }

        return parent::handle($order);
    }
}