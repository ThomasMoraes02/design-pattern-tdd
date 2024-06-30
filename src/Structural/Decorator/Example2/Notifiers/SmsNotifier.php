<?php 
namespace DesignPattern\Structural\Decorator\Example2\Notifiers;

use DesignPattern\Structural\Decorator\Example2\Notifier;
use DesignPattern\Structural\Decorator\Example2\NotifierDecorator;

class SmsNotifier extends NotifierDecorator
{
    public function __construct(protected Notifier $notifier)
    {
        parent::__construct($notifier);
    }

    public function notify(): void
    {
        parent::notify();
        echo "SMS sent.";
    }
}