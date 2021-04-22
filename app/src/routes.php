<?php 
use Convertor\Route\Route;
use Convertor\Route\Api;
use Convertor\Route\Web;

$route = new route();

if ($route->isApi()) 
	(new Api)->getControllers();

if ($route->isWeb())
    (new Web)->getControllers();
//	die('please use this api-> post /api/registers');