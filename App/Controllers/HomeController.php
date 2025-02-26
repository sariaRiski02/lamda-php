<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Lamda\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [1, 2, 3, 4];
        return $this->view('index', compact('data'));
    }

    public function GetParam($test)
    {
        $data = "Data from param is: $test";
        return $this->view('getParam', compact('data'));
    }

    public function getDoubleParam($param1, $param2)
    {
        $data = "param 1: $param1 <br>
                param 2: $param2 ";
        return $this->view('getParam', compact('data'));
    }

    public function testPost()
    {
        $request = new Request();
        var_dump($request);
    }


    public function testRequest()
    {
        $request = new Request();
        var_dump($request->input('test'));
    }

    public function testRequestFile()
    {
        $request = new Request();
    }
}
