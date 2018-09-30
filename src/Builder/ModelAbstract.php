<?php


namespace Db\Builder;


abstract  class ModelAbstract implements DirectorInterface
{
    protected $builder;
    protected $table;

    public function __construct(BuilderInterface $builder = null)
    {
        $this->builder = $builder;
        $this->setTableName();
    }

    function getSqlAll(): string
    {
        $this->builder->setTable($this->table);
        return $this->builder->getAllString();
    }

    protected function setTableName(){
        if(!isset($this->table)){
            $table = explode("\\",get_called_class());
            $table = array_pop($table);

            $this->table = strtolower($table);
        }
    }
}