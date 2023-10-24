<?php
include "vendor\autoload.php";

$URL = $_SERVER['REQUEST_URI'];

$classPatch = 'src\controllers\\' ;

if($URL !== "/")
{
    $path = $classPatch . substr($URL, 1);
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
$obj->index();