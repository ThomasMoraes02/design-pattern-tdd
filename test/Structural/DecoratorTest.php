<?php

use DesignPattern\Structural\Decorator\BasicShipping;
use DesignPattern\Structural\Decorator\Example2\BaseNotifier;
use DesignPattern\Structural\Decorator\Decorators\GiftWrapDecorator;
use DesignPattern\Structural\Decorator\Decorators\InsuranceDecorator;
use DesignPattern\Structural\Decorator\Example2\Notifiers\SmsNotifier;
use DesignPattern\Structural\Decorator\Example2\Notifiers\EmailNotifier;
use DesignPattern\Structural\Decorator\Example2\Notifiers\WhatsAppNotifier;

beforeEach(function() {
    $this->basicShipping = new BasicShipping(150.0);
});

test("Deve calcular o frete", function() {
    expect($this->basicShipping->calculateCost())->toBe(150.0);
});

test("Deve calcular o frete e adicionar seguro", function() {
    $insuranceShipping = new InsuranceDecorator($this->basicShipping, 50.0);
    expect($insuranceShipping->calculateCost())->toBe(200.0);
});

test("Deve calcular o frete, adicionar seguro e adicionar embalagem", function() {
    $insuranceShipping = new InsuranceDecorator($this->basicShipping, 50.0);
    $giftWrap = new GiftWrapDecorator($insuranceShipping, 15.5);
    expect($giftWrap->calculateCost())->toBe(215.5);
});

describe("Example 2 - Notifier", function() {
    beforeEach(function() {
        $this->notifier = new BaseNotifier(); 
    });

    it("Deve notificar por email", function() {
        $emailNotifier = new EmailNotifier($this->notifier);

        ob_start();
        $emailNotifier->notify();
        $console = ob_get_clean();
        expect($console)->toBe("Email sent.");
    });

    it("Deve notificar por email e sms", function() {
        $emailNotifier = new EmailNotifier($this->notifier);
        $smsNotifier = new SmsNotifier($emailNotifier);

        ob_start();
        $smsNotifier->notify();
        $console = ob_get_clean();
        expect($console)->toBe("Email sent.SMS sent.");
    });

    it("Deve notificar por email, sms e whatsapp", function() {
        $emailNotifier = new EmailNotifier($this->notifier);
        $smsNotifier = new SmsNotifier($emailNotifier);
        $whatsApp = new WhatsAppNotifier($smsNotifier);

        ob_start();
        $whatsApp->notify();
        $console = ob_get_clean();
        expect($console)->toBe("Email sent.SMS sent.WhatsApp sent.");
    });
});