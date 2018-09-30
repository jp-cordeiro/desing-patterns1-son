<?php

require_once 'vendor/autoload.php';

use \Db\Builder\SqlBuilder;
use \Db\DbSingleton;

$builder = new SqlBuilder();

$config = [
    'dsn' => 'mysql:host=localhost;dbname=db_name',
    'user' => 'user',
    'password' => 'pass'
];

DbSingleton::configure($config);

