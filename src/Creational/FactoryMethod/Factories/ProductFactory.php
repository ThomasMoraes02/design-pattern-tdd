<?php 
namespace DesignPattern\Creational\FactoryMethod\Factories;

use DesignPattern\Creational\FactoryMethod\Product;

abstract class ProductFactory
{
    abstract public function createProduct(int $id, string $name, float $price): Product;
}