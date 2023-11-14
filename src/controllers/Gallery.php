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
        $data = $obj->findAll2();
        Viewer::view("Gallery/index", $data);
    }

    public function create()
    {
        if (!empty($_POST)) {
            $obj = new Gal();
            $obj->insert(array_filter($_POST));
        }
        Viewer::view("Gallery/create");
    }

    public function update()
    {
        $data = [];
        if (!empty($_GET['id'])) {
            $obj = new Gal();
            $data = $obj->findOne($_GET['id']);
        }
        if (!empty($_POST)) {
            $obj = new Gal();
            $obj->update(array_filter($_POST), $_GET['id']);
        }
        Viewer::view("Gallery/update", $data);
    }

    public function delete()
    {
        if (!empty($_GET['id'])) {
            $obj = new Gal();
            $obj->delete($_GET['id']);
        }
        header('Location:/Gallery');
    }
}
