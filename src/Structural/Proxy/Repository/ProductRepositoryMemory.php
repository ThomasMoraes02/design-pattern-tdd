<?php 
namespace DesignPattern\Structural\Proxy\Repository;

use DesignPattern\Structural\Proxy\Product;

class ProductRepositoryMemory implements ProductRepository
{
    public function __construct(private array $products = []) {}
    
    public function create(Product $product): void
    {
        $this->products[$product->id()] = $product;
    }

    public function find(int $id): ?Product
    {
        return $this->products[$id] ?? null;
    }
}