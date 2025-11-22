<?php

namespace Database\Migrations;

use Database\Database;
use PDO;

class Migrations
{
    private PDO $con;
    private string $table_name = "user";
    public function __construct()
    {

        $db = new Database();
        $this->con = $db->DBConnect();
    }
    public function runMigration()
    {

        $sql_query = "CREATE TABLE IF NOT EXISTS $this->table_name (
                    id SERIAL PRIMARY KEY,
                    email VARCHAR(255) NOT NULL UNIQUE,
                    password VARCHAR(255) NOT NULL,
                    role VARCHAR(50) NOT NULL DEFAULT 'user'
                );";

        $this->con->exec($sql_query);
    }

    public function dropMigration(): void
    {

        $sql_query = "DROP TABLE IF EXISTS $this->table_name";
        $this->con->exec($sql_query);
    }
    
}
