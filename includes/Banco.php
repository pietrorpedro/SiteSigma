<?php

class Banco
{
    private $servername = 'localhost';
    private $database = 'sitesigma';
    private $username = 'root';
    private $password = '';
    public $conn = null;

    public function __construct()
    {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
    }

    public function __destruct()
    {
        mysqli_close($this->conn);
        $this->conn = null;
    }

    public function getAll(){
        $con = $this->conn;
        $sql = "SELECT * FROM produtos WHERE Ativo = 1";
        $exec = mysqli_query($con, $sql);
        
        $contar = mysqli_num_rows($exec);
        while($dados = mysqli_fetch_assoc($exec)){
            echo "<pre>";
            echo $dados['Nome'];
            echo "</pre>";
        }
        print "Foi encontrado <strong>$contar</strong> produtos";
    }
}
$Banco = new Banco();