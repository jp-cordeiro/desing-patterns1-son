<?php

namespace Db\Builder;

class BuilderTest extends \PHPUnit\Framework\TestCase
{
    public function testeSelectQuery(){
        $builder = new SqlBuilder();
        $director=  new UsersDirector($builder);

        $query = $director->getSqlAll();

        $this->assertEquals('SELECT * FROM users', $query);
    }
}