<?php

class Database
{
    // Params for database, mysql
    private $host = 'localhost';
    private $db_name = 'products_db';
    private $username = 'admin';
    private $userpass = 'Apple123*';
    private $conn;

    // Connection to database
    public function connectDatabase()
    {
        $this->conn = null;


        try {
            $this->conn = new PDO('mysql:host=' .$this->host. ';dbname='. $this->db_name, 
            $this->username, $this->userpass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        } catch (PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
        }

        return $this->conn;
    }
} 

// $db = new Database();
// $db->connectDatabase();

?>