<?php

namespace src\models;
use \PDO;
use src\orm\Connector;
use src\orm\Insert;

class Connect
{
    private string $table_name = 'oc_banner';
//    private string $table_name = 'Users';

    public function findAll(): array
    {
        $connect = new Connector();
        $b = $connect->connects()->query('SELECT * FROM oc_banner', PDO::FETCH_ASSOC);
        //$b = $connect->connects()->query('SELECT * FROM Users', PDO::FETCH_ASSOC);
        $b->execute();
        //var_dump($b->fetchAll());
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

//        $columns=$values=[];
//        foreach ($data as $key=>$value)
//        {
//            $columns[]=$key;
//            $values[]=$value;
//        }
//        if(!empty($columns)){
//            $b="INSERT INTO Users (" . implode(',' , $columns) . ") VALUES (" . $this->prepare_values($values) .  ")";
//            $obj=new Connector();
//            $obj->connects()->exec($b);
//            return true;
//
//        }
//        return false;
//    }
//    }