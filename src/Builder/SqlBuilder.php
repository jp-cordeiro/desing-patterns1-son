<?php

namespace Db\Builder;

use Db\QueryBuilder\Sql;

class SqlBuilder implements BuilderInterface
{
    protected $query;

    function __construct()
    {
        $this->query = new Sql;
    }

    public function setTable(string $table)
    {
        $this->query->table($table);
    }

    public function getAllString(): string
    {
        return $this->query
            ->select()
            ->getQuery();
    }
}