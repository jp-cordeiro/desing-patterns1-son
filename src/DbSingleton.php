<?php

namespace Db;

class DbSingleton
{
    protected static $instance;
    protected static $config;

    //Não pode ser instanciada
    protected function __construct(){}
    //Não pode ser clonada
    protected function __clone(){}
    //Não pode ser serializada
    protected function __wakeup(){}

    public static function configure(array $config){
        self::$config = $config;
    }

    public static function getInstance(){
        if(!isset(self::$instance)){
            $dsn = self::$config['dsn'] ?? '';
            $user = self::$config['user'] ?? '';
            $password = self::$config['password'] ?? '';
            $options = self::$config['options'] ?? [];

            $pdo = new \PDO($dsn, $user, $password, $options);
            self::$instance = new Db($pdo);
        }
        return self::$instance;
    }
}