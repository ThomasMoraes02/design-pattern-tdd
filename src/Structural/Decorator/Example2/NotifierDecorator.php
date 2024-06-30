<?php 
namespace DesignPattern\Structural\Decorator\Example2;

class NotifierDecorator implements Notifier
{
    public function __construct(protected Notifier $notifier) {}

    public function notify(): void
    {
        $this->notifier->notify();
    }
}