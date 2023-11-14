<?php

namespace src\orm;

class Update

{
    private Connector $connector;

    public function __construct()
    {
        $this->connector = new Connector();
    }
    public function exec(array $data, string $table_name, string $condition)
    {
        $update =[];

        foreach ($data as $key => $value) {
            $value="'" . $value . "'";
            $update[] = $key . '=' . $value;
        }
        $b = $this->build_sql(implode(',' , $update), $table_name, $condition);
        //var_dump($b);
        return $this->connector->connects()->exec($b);
    }

    private function build_sql($data, $table_name, $condition): string
    {
          return 'UPDATE ' . $table_name .'  SET  '. $data . '  ' . $condition ;
    }

    }