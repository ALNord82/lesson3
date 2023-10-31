<?php

namespace src\models;
use \PDO;
class Connect
{
    public function findAll() : array
    {
        //$dsn = 'mysql:host=localhost;dbname=db';
        $dsn = 'mysql:host=db23.freehost.com.ua;port=3306;dbname=castorlan_alsen';
        $a = new PDO($dsn, 'castorlan_alsen', 'e8diy7jut');
        $b = $a ->query('SELECT * FROM oc_customer');
        $b->execute();
        //var_dump($b);
        $result = $b->fetchAll();
        //print_r($result);
        return[$result];
    }
}