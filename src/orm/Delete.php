<?php

namespace src\orm;

class Delete
{
    private Connector $connector;

    public function __construct()
    {
        $this->connector = new Connector();
    }
    public function exec(string $table_name, string $condition)
    {
        $b = $this->build_sql($table_name, $condition);
        //var_dump($b);
        return $this->connector->connects()->exec($b);
    }
    private function build_sql($table_name, $condition): string
    {
        return 'DELETE FROM ' . $table_name . ' ' . $condition;
    }

}