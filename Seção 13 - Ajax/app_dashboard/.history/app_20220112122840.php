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

            $conexao->exec('set charset utf8');

            return $conexao;

        } catch(PDOException $e) {
            echo '<p>' . $e->getMessage() . '</p>';
        }
    }
}

class Bd {
    private $conexao;
    private $dashboard;

    public function __construct(Conexao $conexao, Dashboard $dashboard) {
        $this->conexao = $conexao->conectar();
        $this->dashboard = $dashboard;
    }

    public function getNumeroVendas() {
        $query = 'SELECT COUNT(*) AS numero_vendas 
                    FROM tb_vendas WHERE data_venda BETWEEN :data_inicio AND :data_fim ';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':data_inicio', '2018-08-01');
        $stmt->bindValue(':data_fim', '2018-08-31');
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}

$conexao = new Conexao();

$dashboard = new Dashboard();

$bd = new Bd($conexao, $dashboard);
print_r($bd->getNumeroVendas());

?>