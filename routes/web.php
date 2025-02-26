<?php
require_once __DIR__ . '/../vendor/autoload.php';



use Route\Method\Put;
use Routes\Method\Get;
use Routes\Method\Post;
use Route\Method\Delete;
use App\Controllers\HomeController;


Get::route('/', [HomeController::class, 'index']);
Get::route('/get-param/{test}', [HomeController::class, 'GetParam']);
Get::route('/get-double-param/{test}/{test}', [HomeController::class, 'getDoubleParam']);
Post::route('/post', [HomeController::class, 'testPost']);
Post::route('/post-param/{test}', [HomeController::class, 'testPostParam']);
Post::route('/post-double-param/{test}/{test}', [HomeController::class, 'postDoubleParam']);
