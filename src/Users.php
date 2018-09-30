<?php

namespace Db;

use Db\Builder\BuilderInterface;
use Db\Builder\ModelAbstract;

class Users extends ModelAbstract
{
    protected $table = '`tb_users`';
    protected $db;

    public function __construct(BuilderInterface $builder = null)
    {
        $this->db = DbSingleton::getInstance();
        $this->db->setDirector($this);

        parent::__construct($builder);
    }

    function getAllUsers(){
        return $this->db
            ->getAll()
            ->execute()
            ->fetchAll();
    }
}