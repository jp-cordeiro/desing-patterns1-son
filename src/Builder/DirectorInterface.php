<?php

namespace Db\Builder;

/**
 * Executa a tarefa de construção
 *
 * Interface DirectorInterface
 * @package SON\Db\Builder
 */
interface DirectorInterface
{
    function __construct(BuilderInterface $builder = null);
    function  getSqlAll() :string;
}