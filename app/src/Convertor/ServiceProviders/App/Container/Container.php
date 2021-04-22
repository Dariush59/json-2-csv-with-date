<?php
namespace Convertor\ServiceProviders\App\Container;

use function array_keys;
use Psr\Container\ContainerInterface;
use Convertor\ServiceProviders\App\Container\Exceptions\DependencyNotRegisteredException;
use function var_dump;

class Container implements ContainerInterface
{
    protected $instances = [];

    public function get($dependency) : mixed
    {        
        if (!$this->has($dependency))
            throw new DependencyNotRegisteredException($dependency);
        
        return $this->concreteInstance($this->instances[$dependency]);
    }
    
    public function has($dependency) : bool
    {
        return isset($this->instances[$dependency]);
    }

    public function set($abstract, $concrete = null) : void
    {
        if ($concrete === null) 
            $concrete = $abstract;

        $this->instances[$abstract] = $concrete;
    }

    private function concreteInstance(string $entry) : mixed
    {
        return new $entry;
    }
}