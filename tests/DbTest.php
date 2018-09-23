<?php

namespace Db;

class DbTest extends \PHPUnit\Framework\TestCase
{
    public function testTestaClasse(){
        $db = new Db();

        $this->assertInstanceOf('Db\Db',$db);
    }
}