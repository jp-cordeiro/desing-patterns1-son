<?php

namespace Db\QueryBuilder;

class Sql implements Strategy {

    public function table(string $table): Strategy
    {
        $this->table = $table;
        return $this;
    }

    public function select($collumns = '*'): Strategy
    {
        if(is_array($collumns)){
            $collumns = implode(',', $collumns);
        }
       $this->select = sprintf('SELECT %s FROM %s',$collumns, $this->table);
       return $this;
    }

    public function getQuery(): string
    {
        return $this->select;
    }
}