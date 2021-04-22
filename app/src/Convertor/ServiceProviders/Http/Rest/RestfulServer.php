<?php
namespace Convertor\ServiceProviders\Http\Rest;

use \Jacwright\RestServer\RestServer;

class RestfulServer implements RestInterface
{
    function __construct(){
        $this->rest = new RestServer('dev');;
    }
    public function getRest() : mixed
    {
        return $this->rest;
    }

    public function handle(): void{
        // 
    }

    public function addClass(string $className): void
    {
        //
    }
}