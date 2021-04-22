<?php
namespace Convertor\ServiceProviders\Http\Client;

class Client implements ClientInterface
{ 
    public $client;
    
    function __construct(){
        $this->client = curl_init();
    }

    public function post( string $url, array $data, array $headers = null) : array
    {
        curl_setopt($this->client, CURLOPT_URL, $url);
        curl_setopt($this->client, CURLOPT_POST, 1);
        curl_setopt($this->client, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($this->client, CURLOPT_POSTFIELDS, json_encode($data));           
        curl_setopt($this->client, CURLOPT_HTTPHEADER, $headers);

        return [
            'data' => json_decode(curl_exec($this->client), true),
            'statusCode' => curl_getinfo($this->client, CURLINFO_HTTP_CODE)
        ];
    }


    public function get(string $url, array $data = null, array $headers = ['Accept' => 'application/json'])
    {
        curl_setopt($this->client, CURLOPT_URL, $url);
        curl_setopt($this->client, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($this->client, CURLOPT_HEADER, 0);
        curl_setopt($this->client, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($this->client, CURLOPT_POSTFIELDS, $data);
        curl_setopt($this->client, CURLOPT_RETURNTRANSFER, true);

        return (array) json_decode(curl_exec( $this->client), true);
    }
}