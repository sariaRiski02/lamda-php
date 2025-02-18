<?php


namespace App\Lamda;

class Request
{
    protected array $data;

    public function __construct()
    {
        $this->data = $_REQUEST;
    }

    public function input(string $key, $default = null)
    {
        return $this->data[$key] ?? $default;
    }
}
