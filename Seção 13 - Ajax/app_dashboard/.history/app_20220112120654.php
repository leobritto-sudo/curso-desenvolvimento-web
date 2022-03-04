<?php

class Dashboard {

    public $data_inicio;
    public $data_fim;
    public $numeroVendas;
    public $totalVendas;

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function __set($atributo, $value) {
        $this->$atributo = $value;
        return $this;
    }

}

class Conexao {

    private $host = 'localhost';
    private $dbname = 'dashboard';
    private $user = 'root';
    private $pass = '';

    public function conectar() {
        try {

            $conexao = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname", 
                "$this->user",
                "$this->pass"
            );

        } catch(PDOException $e) {
            echo '<p>' . $e->getMessage() . '</p>';
        }
    }
}

?>