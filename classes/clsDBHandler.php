<?php

// this is our DB connection handler class
class clsDBHandler
{
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $db_name = "php_mvc_sample";

    protected function connect()
    {
        $dsn = 'mysql:host=' . $this->host . ';dvname=' . $this->db_name;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}