<?php

namespace src\models;
use \PDO;
use src\orm\Connector;
use src\orm\Delete;
use src\orm\Insert;
use src\orm\Update;
use src\orm\Where;

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
    public function findOne(int $id): array
    {
        $connect = new Connector();
        $b = $connect->connects()->query('SELECT * FROM oc_banner WHERE banner_id=' . $id, PDO::FETCH_ASSOC);
        $b->execute();
        $result = $b->fetchAll();
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
    public function update(array $data, $condition): bool
    {
        try {
            $update = new Update();
            return $update->exec($data, $this->table_name, Where::andWhere([['banner_id', $condition, '=']]));
        } catch (\Exception $e) {
            var_dump('Error in update Users model');
            var_dump($e->getMessage());
        }
        return false;
    }

    public function delete($condition): bool
    {
        try {
            $delete = new Delete();
            return $delete->exec($this->table_name, Where::andWhere([['banner_id', $condition, '=']]));
        } catch (\Exception $e) {
            var_dump('Error in delete Users model');
            var_dump($e->getMessage());
        }
    }
}