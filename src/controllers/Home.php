<?php

namespace src\controllers;

use src\core\Viewer;
use src\models\Users;

class Home
{
    public function index()
    {
     $obj=new Users();
     $data['data']=$obj->findAll(); ;
     Viewer::view("Home", $data);
}
}