<?php 
namespace DesignPattern\Creational\FactoryMethod;

class ClothingProduct extends Product
{
    public function getType(): string
    {
        return 'Clothing';
    }
}