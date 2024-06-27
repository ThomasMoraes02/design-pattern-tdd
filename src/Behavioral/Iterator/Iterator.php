<?php 
namespace DesignPattern\Behavioral\Iterator;

interface Iterator
{
    public function hasNext(): bool;

    public function next(): mixed;
}