<?php 
namespace DesignPattern\Behavioral\ChainOfResponsability;

class AddressValidationHandler extends AbstractOrderHandler
{
    public function handle(array $order): ?string
    {
        if(empty($order['address'])) return "Endereço de entrega não fornecido";
        return parent::handle($order);
    }
}