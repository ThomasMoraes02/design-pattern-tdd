<?php 
namespace DesignPattern\Structural\Adapter\Adapters\Example1;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\ResponseInterface;
use DesignPattern\Structural\Adapter\Adapters\Example1\HttpGateway;

class GuzzleHttpAdapter implements HttpGateway
{
    private Client $client;

    public function __construct(private ?string $baseUri = null)
    {
        $this->client = ($baseUri) ? new Client(['base_uri' => $baseUri]) : new Client();
    }

    public function get(string $url): mixed
    {
        return $this->sendAsync('GET',$url);
    }

    public function post(string $url, array $data): mixed
    {
        return $this->sendAsync('POST',$url, $data);
    }

    public function put(string $url, array $data): mixed
    {
        return $this->sendAsync('PUT',$url,$data);
    }

    public function patch(string $url, array $data): mixed
    {
        return $this->sendAsync('PATCH',$url,$data);
    }

    public function delete(string $url): mixed
    {
        return $this->sendAsync('DELETE',$url);
    }

    private function sendAsync(string $method, string $url, array $body = []): mixed
    {
        $promise = $this->client->sendAsync($this->request($method,$url,$body))->then(function (ResponseInterface $response) {
            return $response;
        });

        return $promise->wait();
    }

    private function request(string $method, string $url, array $body = []): Request
    {
        return new Request($method,$url,$this->headers(),json_encode($body));
    }

    private function headers(): array
    {
        return [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ];
    }
}