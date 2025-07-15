<?php
class Database {
    private $host = "localhost";
    private $user = "root";         // usuário do MySQL
    private $pass = "";             // senha (geralmente vazia no XAMPP)
    private $dbname = "mentalzen_forum"; // nome do seu banco
    protected $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);

        if ($this->conn->connect_error) {
            die("Erro na conexão: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
?>