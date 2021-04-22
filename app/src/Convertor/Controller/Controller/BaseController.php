<?php
namespace Convertor\Controller\Controller;

use Convertor\Traits\ErrorHandler;
use Convertor\Traits\App;

class BaseController
{
	use ErrorHandler, App;
    /**
     * @return string
     */
    public function getParam(string $param): string
    {
        $param = trim($param);
        return isset($_GET[$param]) && !empty($_GET[$param])
            ? htmlspecialchars($_GET[$param])
            : throw new \Exception("$param is missing");
    }

    public function postParam(string $param): string
    {
        $param = trim($param);
        return isset($_POST[$param]) && !empty($_POST[$param])
            ? htmlspecialchars($_POST[$param])
            : throw new \Exception("$param is missing");
    }
}