<?php

namespace src\controllers;

use src\core\Viewer;
use src\models\Err;

class Error
{
    public function index()
    {
        $data=Err::$ico;
        Viewer::view("Error", $data);;
    }}
