<?php 
namespace DesignPattern\Structural\Proxy;

use DesignPattern\Structural\Proxy\Repository\ProductRepository;

class ProductProxy implements ProductInterfaceProxy
{
    public function __construct(
        private readonly int $productId, 
        private readonly ProductRepository $productRepository,
        private array $cache = []
    ) {}

    public function getDetails(): array
    {
        if(!isset($this->cache[$this->productId])) {
            $product = $this->productRepository->find($this->productId);
            $this->cache[$this->productId] = $product->getDetails();
            return array_merge($this->cache[$this->productId], ["time" => 1]);
        }
        return array_merge($this->cache[$this->productId], ["time" => 2]);
    }
}