<?php 
namespace DesignPattern\Creational\FactoryMethod\Factories;

use DesignPattern\Creational\FactoryMethod\ClothingProduct;
use DesignPattern\Creational\FactoryMethod\Product;

class ClothingProductFactory extends ProductFactory
{
    public function createProduct(int $id, string $name, float $price): Product
    {
        return new ClothingProduct($id,$name,$price);
    }
}