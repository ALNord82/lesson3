<?php

namespace src\controllers;

use src\core\Viewer;
use src\models\Connect;
use src\models\Gal;

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
        $data = [];
        if (!empty($_GET['id'])) {
            $obj = new Connect();
            $data = $obj->findOne($_GET['id']);
        }
        if (!empty($_POST)) {
            $obj = new Connect();
            $obj->update(array_filter($_POST), $_GET['id']);
        }
        Viewer::view("Sql/update", $data);
    }
    public function delete()
    {
        {
            if (!empty($_GET['id'])) {
                $obj = new Connect();
                $obj->delete($_GET['id']);
            }
            header('Location:/Sql');
        }
    }
}