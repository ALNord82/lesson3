<?php
namespace src\models;

class Users
{
    public function findAll():array
    {
        return [
                0 => [
                    'first_name' => 'test',
                    'second_name' => 'test',
                    'login' => 'test',
                    'email' => 'test@test.com',
                ],
                1 => [
                    'first_name' => 'test1',
                    'second_name' => 'test1',
                    'login' => 'test1',
                    'email' => 'test1@test.com',
                ],
                2 => [
                    'first_name' => 'test2',
                    'second_name' => 'test2',
                    'login' => 'test2',
                    'email' => 'test@test.com2',
                ],


        ];
    }
}