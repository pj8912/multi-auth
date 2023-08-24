<?php

namespace jp\MultiAuth\Database;

require_once '../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '../../.env');
$dotenv->load();

class MysqlDb
{
    private $conn;
    public function connect()
    {
        try 
        {
            $this->conn = new \PDO('mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_NAME'], $_ENV['DB_USERNAME'], $_ENV['DB_PWD']);
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } 
        catch (\PDOException $e) 
        {
            echo "DB_ERR: " . $e->getMessage();
        }
        return $this->conn;
    }
}
