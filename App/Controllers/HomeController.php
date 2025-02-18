<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Lamda\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [1, 2, 3, 4, 5];

        return $this->view('index', compact('data'));
    }

    public function test($test)
    {
        return $test;
    }

    public function param($test)
    {
        return $test;
    }

    public function doubleParam($a, $b, $c)
    {
        return "$a $b $c";
    }

    public function testIndexPost()
    {
        return $this->view('post');
    }
    public function testRequest()
    {
        $request = new Request();
        echo $request->input('test');
    }
}
