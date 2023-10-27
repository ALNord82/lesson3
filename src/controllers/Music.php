<?php

namespace src\controllers;

use src\core\Viewer;

class Music
{
    public function index()
    {
        Viewer::view("Music");
    }
}