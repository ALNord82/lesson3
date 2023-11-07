<?php

namespace src\core;
use src\controllers\Error;
final class Router
{


    public function run()
    {
        $URL = $_SERVER['REQUEST_URI'];

        $classPatch = 'src\controllers\\' ;

        if($URL !== "/") {
            $url_parts=explode('/', substr($URL,1 ));
            $path = $classPatch . ucfirst($url_parts[0]);
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
        if(isset($url_parts[1]) && method_exists($obj, $url_parts[1])) {
            $method_name=$url_parts[1];
            $obj->$method_name();
        } else{
            $obj -> index();
        }

    }
}