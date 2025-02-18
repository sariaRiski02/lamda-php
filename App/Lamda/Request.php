<?php


namespace App\Lamda;

class Request
{
    protected array $data;

    public function __construct()
    {
        $this->data = $_POST;
    }

    public function input($name)
    {
        return $this->data[$name];
    }

    public function file($fileName)
    {
        return $_FILES[$fileName];
    }
}
