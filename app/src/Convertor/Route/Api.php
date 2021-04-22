<?php
namespace Convertor\Route;

use Convertor\Route\RouteBase\RouteBase;
use Convertor\Controller\ConvertorController;


class Api extends RouteBase
{
	function __construct()
	{
		parent::__construct();
		header( 'Content-Type: application/json' );
	}

	public function getControllers() : void
	{
		self::$server->addClass(ConvertorController::class);
	}
}