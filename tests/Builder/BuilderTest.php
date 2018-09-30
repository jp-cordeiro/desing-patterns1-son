<?php

namespace Db\Builder;

use Db\Banks;

class BuilderTest extends \PHPUnit\Framework\TestCase
{
//    public function testeSelectQuery(){
//        $builder = new SqlBuilder();
//        $director=  new UsersDirector($builder);
//
//        $query = $director->getSqlAll();
//
//        $this->assertEquals('SELECT * FROM users', $query);
//    }

    public function testModelAbstract(){
        $builder = new SqlBuilder();
        $banks = new Banks($builder);

        $sql = $banks->getSqlAll();

        $this->assertEquals('SELECT * FROM banks', $sql);
    }
}