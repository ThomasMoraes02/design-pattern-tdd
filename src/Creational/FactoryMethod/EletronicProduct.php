<?php 
namespace DesignPattern\Creational\FactoryMethod;

class EletronicProduct extends Product
{
    public function getType(): string
    {
        return 'Eletronic';
    }
}