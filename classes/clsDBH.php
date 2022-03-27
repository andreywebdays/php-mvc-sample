<?php

// this is our DB connection handler class
class clsDBH
{
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $db_name = "prj009";

    protected function connect()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}