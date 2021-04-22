<?php
namespace Convertor\ServiceProviders\Env;

use Dotenv\Dotenv;

class Env implements EnvInterface
{
    public function createEnv() : void
    {
        Dotenv::createImmutable(ROOT)->load();
    }

    public function has_key(string $envKey) : bool
    {
        return (isset($_ENV[$envKey]) && !empty($_ENV[$envKey]));
    }

    public function getEnv(string $envKey) : ?string
    {
        if (!$this->has_key($envKey))
            throw new \Exception("$envKey has not set!!!");

        return $_ENV[$envKey];
    }
}