<?php 
namespace DesignPattern\Structural\Adapter\Adapters\Example1;

interface HttpGateway
{
    public function get(string $url): mixed;

    public function post(string $url, array $data): mixed;

    public function put(string $url, array $data): mixed;

    public function patch(string $url, array $data): mixed;

    public function delete(string $url): mixed;
}