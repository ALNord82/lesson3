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
        Viewer::view("Sql/index", $data);
    }
    public function create()
    {
        var_dump($_POST);
        if (!empty($_POST)){
            $obj=new Connect();
            $obj->insert(array_filter($_POST));
        }
        Viewer::view("Sql/create");
    }
    public function update()
    {
        Viewer::view("Sql/update");
    }
    public function delete()
    {
        echo "delete";
    }
}