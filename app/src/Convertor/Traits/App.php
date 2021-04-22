<?php
namespace Convertor\Traits;

/**
 * App
 */
trait App
{
    public function app(){
		global $app;
		return $app;
	}

    public function resolve(string $className) : mixed
	{
		return $this->app()->resolve($className);
	}

    public function getEnv(string $envName) : ?string
    {
        return $this->resolve('env')->getEnv($envName);
    }

    public function view(string $fileName) : mixed
    {
        return $this->app()->resolve('view')->getView($fileName);
    }
}
