<?php 
namespace DesignPattern\Structural\Decorator\Example3;

class LogDecorator implements UseCase
{
    public function __construct(private UseCase $useCase) {}

    public function execute(): void
    {
        echo "Execute LogDecorator.";
        $this->useCase->execute();
    }
}