<?php

namespace Db\QueryBuilder;

interface Strategy{

    public function table(string $table): Strategy;
    public function select($collumn = '*'): Strategy;
    public function getQuery(): string;
}
