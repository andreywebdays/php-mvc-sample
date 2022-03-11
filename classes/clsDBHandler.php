<?php

class clsDBHandler
{
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $db_name = "oop_php_mvc";

    protected function connect()
    {
        $dsn = 'mysql:host=' . $this->host . ';dvname=' . $this->db_name;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}