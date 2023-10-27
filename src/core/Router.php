<?php

namespace src\core;

final class Router
{


    public function run()
    {
        $URL = $_SERVER['REQUEST_URI'];

        $classPatch = 'src\controllers\\' ;

        if($URL !== "/")
        {
            $path = $classPatch . ucfirst(substr($URL, 1));
        }
        else
        {
            $path = $classPatch . "home";
        }
        if (!class_exists($path))
        {
            $path = $classPatch . "error";
        }
        $obj = new $path();
        $obj -> index();
    }
}