<?php
namespace Convertor\ServiceProviders\Http\Client;

interface ClientInterface
{
    public function post(string $url, array $data, array $headers = null);
    public function get(string $url, array $data = null, array $headers = ['Accept'=> 'application/json']);
}