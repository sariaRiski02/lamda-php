<?php

namespace App\Controllers;

class Controller
{
    public function view($template, $data = [])
    {
        $file = dirname(__DIR__, 2) . "/views/$template.lamda.php";
        $view = '';
        if (file_exists($file)) {
            // Ekstrak data menjadi variabel
            extract($data);
            // Mulai output buffering
            ob_start();

            // Sertakan file tampilan
            include($file);
            $view = ob_get_clean();

            header('Content-type: text/html');
            return $view;
        } else {
            return "file not found";
        }
    }
}
