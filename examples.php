<?php

require_once 'vendor/autoload.php';

use \Db\Builder\SqlBuilder;
use \Db\Builder\UsersDirector;
use \Db\DbSingleton;

$builder = new SqlBuilder();
$users = new UsersDirector($builder);

$config = [
    'dsn' => 'mysql:host=localhost;dbname=db_ecommerce',
    'user' => 'root',
    'password' => 'root'
];

DbSingleton::configure($config);

$db = DbSingleton::getInstance();
$db->setDirector($users);