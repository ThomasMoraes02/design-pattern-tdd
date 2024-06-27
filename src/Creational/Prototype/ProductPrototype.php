<?php 
namespace DesignPattern\Creational\Prototype;

interface ProductPrototype
{
    public function clone(): self;
}