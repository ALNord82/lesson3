<?php
namespace src\models;

class Gal
{
    public function findAll2():array
    {
        return [
            0 =>[
                'year' => '2012',
                'site' => 'htru',
                'description' => 'Промо-сайт'
                ],
            1 => [
                'year' => 'test1',
                'site' => 'test1',
                'description' => 'test1@test.com',
                ],
            2 => [
                'year' => 'test2',
                'site' => 'test2',
                'description' => 'test@test.com2',
                ],
            ];
    }
}