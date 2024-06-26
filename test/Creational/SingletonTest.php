<?php

use DesignPattern\Creational\Singleton\Config;

beforeEach(function() {
    $this->config = Config::getInstance();
    $this->config->set("host", "localhost");
    $this->config->set("user", "root");
});

test("Deve testar o padrão singleton para um objeto de instância unica", function () {
    $config2 = Config::getInstance();

    expect($config2->get("host"))->toBe("localhost");
    expect($this->config->get("host"))->toBe("localhost");
});

test("Deve alterar uma configuração do Singleton", function () {
    $config2 = Config::getInstance();
    $config2->set("host", "127.0.0.1");

    expect($config2->get("host"))->toBe("127.0.0.1");
    expect($this->config->get("host"))->toBe("127.0.0.1");
});