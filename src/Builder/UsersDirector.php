<?php

namespace Db\Builder;

class UsersDirector implements DirectorInterface
{
    protected $builder;

    public function __construct(BuilderInterface $builder = null)
    {
        $this->builder = $builder;
    }

    function getSqlAll(): string
    {
        $this->builder->setTable('tb_user');
        return $this->builder->getAllString();
    }
}