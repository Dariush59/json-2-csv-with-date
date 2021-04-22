<?php
namespace Convertor\ServiceProviders\Http\Rest;


interface RestInterface{
    public function getRest(): mixed;
    public function handle(): void;
    public function addClass(string $className): void;
}