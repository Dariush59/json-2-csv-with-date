<?php




return [
    'providers' => [
        // Routing
        'RestfulServer' => Convertor\ServiceProviders\Http\Rest\RestfulServer::class,
        //HTTP
        'http' => Convertor\ServiceProviders\Http\Client\Client::class,
        // Validation
        'validate' => Convertor\Service\Validate::class,
        // Env
        'env' => Convertor\ServiceProviders\Env\Env::class,
        //View
        'view' => Convertor\ServiceProviders\View\View::class,
        // Json To CSV
        'json2csv' => Convertor\JsonToCSV::class,
    ]

];