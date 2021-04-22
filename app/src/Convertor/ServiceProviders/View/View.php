<?php
namespace Convertor\ServiceProviders\View;

class View
{
    private $data = [];

    private $render = false;

    public function __construct(){}

    public function getView(string $view){
        $file = ROOT . '/views/' . strtolower($view) . '.php';
        file_exists($file)
            ? $this->render = $file
            : throw new ViewException("view $view not found!");

        return $this;
    }

    public function assign(string $key, array $val) : void
    {
        $this->data[$key] = $val;
    }
    
    public function __destruct()
    {
        extract($this->data);
        include($this->render);
    }
}