<?php
namespace src\models;
use \PDO;
use src\orm\Connector;
use src\orm\Insert;

class Gal
{
    private string $table_name = 'oc_currency';
    public function findAll2():array
    {
        $connect = new Connector();
        $b = $connect->connects()->query('SELECT * FROM oc_currency', PDO::FETCH_ASSOC);
        //$b = $connect->connects()->query('SELECT * FROM Users', PDO::FETCH_ASSOC);
        $b->execute();
       // var_dump($b->fetchAll());
        $result = $b->fetchAll();
        //print_r($result);
        return [$result];
    }
    public function insert(array $data): bool
    {
        try {
            $insert = new Insert();
            return $insert->exec($data, $this->table_name);
        } catch (\Exception $e) {
            var_dump('Error in insert into Users model');
            var_dump($e->getMessage());
        }
        return false;
    }
}