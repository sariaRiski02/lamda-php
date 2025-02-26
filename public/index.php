<?php

use Route\Method\Put;
use Routes\Method\Get;
use Routes\Method\Post;
use Route\Method\Delete;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../routes/web.php';


Post::dispatch();
Get::dispatch();
Delete::dispatch();
Put::dispatch();
