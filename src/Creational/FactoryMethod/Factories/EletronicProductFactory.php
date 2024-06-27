<?php 
namespace DesignPattern\Creational\FactoryMethod\Factories;

use DesignPattern\Creational\FactoryMethod\EletronicProduct;
use DesignPattern\Creational\FactoryMethod\Product;

class EletronicProductFactory extends ProductFactory
{
    public function createProduct(int $id, string $name, float $price): Product
    {
        return new EletronicProduct($id,$name,$price);
    }
}