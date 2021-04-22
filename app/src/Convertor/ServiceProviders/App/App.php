<?php
namespace Convertor\ServiceProviders\App;

use function array_values;
use Convertor\ServiceProviders\App\Container\Container;
use function var_dump;

class App extends Container {

    private static $app;
    
    private function __construct(){}

    public static function Instance() : App
    {
//         return (!isset(self::$app))
//             ? self::$app = new App
//             : self::$app;
        return self::$app = new App;// TODO: change it to singleton
    }
    public function resolve($dependency) : mixed
    {
        return $this->get($dependency);
    }

    public function setContainers($container) : void
    {
        foreach ($container as $key => $value){
            $this->set($key, $value);
        }
    }


    
}