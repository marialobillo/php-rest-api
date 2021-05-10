<?php

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$host = $_ENV['HOST'];
echo $host;


class Database
{
    private $host;
    private $database;
    private $user;
    private $password;
    private $charset;

    public function __construct()
    {
        $this->host = $_ENV['HOST'];
        $this->database = $_ENV['DATABASE'];
        $this->user = $_ENV['USER'];
        $this->password = $_ENV['PASSWORD'];
        $this->charset = $_ENV['CHARSET'];
    }

    function connect()
    {
        try {
            
            $connection = "mysql:host=".$this->host.";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            //$pdo = new PDO($connection, $this->user, $this->password, $options);
            $pdo = new PDO($connection,$this->user,$this->password);
        
            return $pdo;
        } catch (PDOException $e) {
            print_r('Error connection: '. $e->getMessage());
        }
    }
}



?>