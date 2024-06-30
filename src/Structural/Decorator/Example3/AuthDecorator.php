<?php 
namespace DesignPattern\Structural\Decorator\Example3;

class AuthDecorator implements UseCase
{
    public function __construct(private UseCase $useCase) {}

    public function execute(): void
    {
        echo "Execute AuthDecorator.";
        $this->useCase->execute();
    }
}