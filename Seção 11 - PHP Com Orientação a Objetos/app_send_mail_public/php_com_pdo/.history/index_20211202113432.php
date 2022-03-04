<?php

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $user = 'root';
    $password = '';

    try {

        $conexao = new PDO($dsn, $user, $password);

        /* $query = 'CREATE TABLE IF NOT EXISTS tb_usuarios(
                id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                nome VARCHAR(50) NOT NULL,
                email VARCHAR(100) NOT NULL,
                senha VARCHAR(32) NOT NULL);
            ';

        $retorno = $conexao->exec($query);
        echo $retorno; */

        $query = 'SELECT * FROM tb_usuarios';

        $stmt = $conexao->query($query);

        $lista_usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach($lista_usuarios as $key => $lista) {
            echo '<h1>' . $lista['nome'] . '</h1>';
            echo '<hr>';
        }

    } catch(PDOException $e) {

        echo 'Erro: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage();

    }

?>