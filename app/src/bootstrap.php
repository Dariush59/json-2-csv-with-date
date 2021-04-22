<?php

try {
    require_once ROOT . '/vendor/autoload.php';

    require_once CONFIGPATH . '/declare.php';

    $app = Convertor\ServiceProviders\App\App::Instance();
    $app->setContainers((require_once CONFIGPATH . '/app.php')['providers']);

    require_once CONFIGPATH . '/environment.php';

    require_once CONFIGPATH . '/errorReport.php';

    require_once __DIR__ . '/routes.php';
    
}
catch (Throwable $e) {
    echo json_encode($e->getMessage());
}