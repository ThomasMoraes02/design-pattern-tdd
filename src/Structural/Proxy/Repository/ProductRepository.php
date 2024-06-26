<?php 
namespace DesignPattern\Structural\Proxy\Repository;

use DesignPattern\Structural\Proxy\Product;

interface ProductRepository
{
    public function create(Product $product): void;

    public function find(int $id): ?Product;
}