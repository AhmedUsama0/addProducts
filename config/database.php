<?php

namespace App\Config;

class Database
{
    /**
     * Config 
     */
    private $servername = "localhost";
    private $db_name = 'scandiweb-junior-test';
    private $username = "root";
    private $password = "";
    private $conn;
    private $charset = "utf8mb4";

    /**
     * Method to connect to the database
     */
    protected function connect()
    {
        try {
            $this->conn = new \PDO(
                'mysql:host=' . $this->servername . ';dbname=' . $this->db_name . ";charset=" . $this->charset,
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        return $this->conn;
    }
}
