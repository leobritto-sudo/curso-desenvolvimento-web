<?php 

    class Conexao {
        private $host = 'localhost';
        private $dbname = 'php_com_pdo';
        private $user = 'root';
        private $pass = '';

        public function connect() {
            try {

            } catch(PDOException $e) {
                echo '<p>Mensagem :' . $e->getMessage() . '</p>';
            }
        }
    }

?>