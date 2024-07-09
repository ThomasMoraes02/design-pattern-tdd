<?php 
namespace DesignPattern\Structural\Adapter\Adapters\Example1;

class CurlHttpAdapter implements HttpGateway
{
    private ?string $baseUri;

    public function __construct(?string $baseUri = null)
    {
        $this->baseUri = $baseUri;
    }

    public function get(string $url): mixed
    {
        return $this->sendRequest('GET', $url);
    }

    public function post(string $url, array $data): mixed
    {
        return $this->sendRequest('POST', $url, $data);
    }

    public function put(string $url, array $data): mixed
    {
        return $this->sendRequest('PUT', $url, $data);
    }

    public function patch(string $url, array $data): mixed
    {
        return $this->sendRequest('PATCH', $url, $data);
    }

    public function delete(string $url): mixed
    {
        return $this->sendRequest('DELETE', $url);
    }

    private function sendRequest(string $method, string $url, array $body = []): mixed
    {
        $ch = curl_init();
        $fullUrl = $this->baseUri ? $this->baseUri . $url : $url;
        curl_setopt($ch, CURLOPT_URL, $fullUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);

        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
        curl_setopt($ch, CURLOPT_HTTPHEADER,[
            'Content-Type: application/json',
            'Accept: application/json'
        ]);
        $response = curl_exec($ch);

        if($response === false) throw new \Exception('cURL error: ' . curl_error($ch));

        $httpCode = curl_getinfo($ch,CURLINFO_HTTP_CODE);
        curl_close($ch);

        return [
            'status_code' => $httpCode,
            'body' => json_decode($response,true)
        ];
    }
}
