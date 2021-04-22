<?php
namespace Convertor\Route\RouteBase;

use Convertor\Traits\App;

class RouteBase 
{
	use App;
	
	protected static $server;

	function __construct()
	{
		self::$server =  $this->resolve('RestfulServer')->getRest();
	}

	function __destruct()
	{
		self::$server->handle();
	}
}

