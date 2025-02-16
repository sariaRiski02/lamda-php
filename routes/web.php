<?php
require_once __DIR__ . '/../vendor/autoload.php';


use Routes\Method\Get;
use App\Controllers\HomeController;


Get::route('/', [HomeController::class, 'index']);
Get::route('/param/{test}', [HomeController::class, 'param']);
Get::route('/{test}', [HomeController::class, 'test']);;
Get::route('/{test}/{test}/{test}', [HomeController::class, 'doubleParam']);


Get::dispatch();
