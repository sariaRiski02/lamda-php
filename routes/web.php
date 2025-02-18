<?php
require_once __DIR__ . '/../vendor/autoload.php';


use Routes\Method\Get;
use Routes\Method\Post;
use App\Controllers\HomeController;


Get::route('/', [HomeController::class, 'index']);
Get::route('/param/{test}', [HomeController::class, 'param']);
// test param 1
// Get::route('/{test}', [HomeController::class, 'test']);;
Get::route('/{test}/{test}/{test}', [HomeController::class, 'doubleParam']);
Get::route('/test', [HomeController::class, 'testIndexPost']);
Post::route('/test', [HomeController::class, 'testRequest']);
Post::route('/file', [HomeController::class, 'testRequestFile']);



Post::dispatch();
Get::dispatch();
