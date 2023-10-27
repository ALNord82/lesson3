<?php

namespace src\controllers;

use src\core\Viewer;
use src\models\Gal;

class Gallery
{
public function index()
{
    $obj=new Gal();
    $data['data']=$obj->findAll2(); ;
    Viewer::view("Gallery", $data);
}}