<?php

namespace Db\Builder;

/**
 * Realiza processo de construção, informa quais os passo a serem seguidos
 *
 * Interface BuilderInterface
 * @package SON\Db\Builder
 */
interface BuilderInterface
{
    public function setTable(string $table);
    public function getAllString() :string;

}