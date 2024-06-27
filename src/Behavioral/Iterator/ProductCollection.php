<?php 
namespace DesignPattern\Behavioral\Iterator;

use DesignPattern\Behavioral\Iterator\Product;

class ProductCollection implements Collection
{
    private array $products = [];

    public function addProduct(Product $product): void
    {
        $this->products[] = $product->toArray();
    }

    public function createIterator(): Iterator
    {
        return new ProductIterator($this->products);
    }
}