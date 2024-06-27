<?php 
namespace DesignPattern\Behavioral\Observer;

interface Observer
{
    public function update(mixed $data): void;
}