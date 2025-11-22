<?php

namespace Database;

use Database\Migrations\Migrations;
use Exception;
use PDO;
use PDOException;


class Database
{
    private $pdo;

    public function __construct()
    {
        try {
            $host = "127.0.0.1";
            $port = 5432;
            $dbName = "asmtdbms";
            $user = "myuser";
            $password = "password";
            $dsn = "pgsql:host=$host;port=$port;dbname=$dbName";

            $this->pdo = new PDO($dsn, $user, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function DBConnect()
    {
        return $this->pdo;
    }
}
  