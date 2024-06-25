<?php

class Database
{
    private $host = 'localhost';
    private $db_name = 'dblocadora';
    private $username = 'root';
    private $password = '';
    private $conn;

    public function connect()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("set names utf8");
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
        }

        return $this->conn;
    }
}

$database = new Database();
$db = $database->connect();

if ($db) {
    echo "Conexão bem-sucedida!";
} else {
    echo "Falha na conexão!";
}