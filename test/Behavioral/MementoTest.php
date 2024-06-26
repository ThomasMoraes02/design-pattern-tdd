<?php
namespace DesignPattern\Test\Behavioral;

use DesignPattern\Behavioral\Memento\Cart;
use DesignPattern\Behavioral\Memento\CartHistory;
use DesignPattern\Behavioral\Memento\Item;

beforeEach(function() {
    $this->cartHistory = new CartHistory();

    $this->cart = new Cart();
    $this->cart->addItem(new Item(1, "Notebook Dell G15", 5300));
    $this->cart->addItem(new Item(2, "SSD 1TB", 2000));
});

test("Deve criar um carrinho de compras", function() {
    expect(count($this->cart->getItems()))->toBe(2);
});

test("Deve criar um produto, adicionar no carrinho e restaurar o carrinho", function() {    
    $this->cartHistory->addMemento($this->cart->save());
    $this->cart->addItem(new Item(3, "Mouse", 100));
    $this->cartHistory->addMemento($this->cart->save());
    expect(count($this->cart->getItems()))->toBe(3);

    $this->cart->restore($this->cartHistory->getMemento(0));
    expect(count($this->cart->getItems()))->toBe(2);
});

test("Deve remover um produto do carrinho e restaurar o carrinho", function() {
    $this->cartHistory->addMemento($this->cart->save());
    $this->cart->removeItem(2);
    $this->cartHistory->addMemento($this->cart->save());
    expect(count($this->cart->getItems()))->toBe(1);

    $this->cart->restore($this->cartHistory->getMemento(0));
    expect(count($this->cart->getItems()))->toBe(2);
});
