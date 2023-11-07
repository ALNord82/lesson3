<?php

namespace src\controllers;

use src\core\Viewer;
use src\models\Connect;
use src\models\Gal;

class Gallery
{
    public function index()
    {
        $obj = new Gal();
        $data=$obj->findAll2();;
        Viewer::view("Gallery!", $data);
    }
    public function create()
    {
        var_dump($_POST);
        if (!empty($_POST)){
            $obj=new Gal();
            $obj->insert(array_filter($_POST));
        }
        Viewer::view("Gallery/create");
    }
}