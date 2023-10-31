<?php

namespace src\controllers;

use src\core\Viewer;
use src\models\Connect;

class Sql
{
    public function index()
    {
        $obj = new Connect();
        $data=$obj->findAll();;
        Viewer::view("Sql", $data);
    }
}