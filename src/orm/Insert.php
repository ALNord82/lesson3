<?php

namespace src\orm;

class Insert

{
    private Connector $connector;

    public function __construct()
    {
        $this->connector = new Connector();
    }
    public function exec(array $data, string $table_name)
    {
        $columns=$values=[];
        foreach ($data as $key=>$value)
        {
            $columns[]=$key;
            $values[]=$value;
        }
        $b = $this->build_sql(implode(',' , $columns), $this->prepare_values($values), $table_name);
        var_dump($b);
        return $this->connector->connects()->exec($b);
    }

    private function build_sql($columns,$values, $table_name): string
    {
        return 'INSERT INTO ' . $table_name .' (' . $columns . ') VALUES (' .$values .  ')';
    }

    private function prepare_values(array $values): string
{
    $tmp = [];
    foreach ($values as $value) {
        if (!is_int($value)) {
            $tmp[] = "'" . $value . "'";
        } else {
            $tmp[] = $value;
        }
    }
    return implode(',', $tmp);

}}