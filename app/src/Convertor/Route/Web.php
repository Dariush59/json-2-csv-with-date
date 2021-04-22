<?php
namespace Convertor\Route;

use Convertor\Controller\FormController;
use Convertor\Route\RouteBase\RouteBase;


class Web extends RouteBase
{
    function __construct()
    {
        parent::__construct();
    }

    public function getControllers() : void
    {
        self::$server->addClass(FormController::class);
    }
}