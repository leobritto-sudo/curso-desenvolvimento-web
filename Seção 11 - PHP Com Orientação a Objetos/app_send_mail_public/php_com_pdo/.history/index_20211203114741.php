<?php

    //if(!empty($_POST['usuario']) && !empty($_POST['senha'])) {

        $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
        $user = 'root';
        $password = '';

        try {

            $conexao = new PDO($dsn, $user, $password);

            $query = "";

        } catch(PDOException $e) {
            echo 'Erro: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage();
        }
    //}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <form action="index.php" method="POST">
        <input type="text" placeholder="Usuário" name="usuario"><br>

        <input type="password" placeholder="Senha" name="senha"><br>

        <button type="submit">Entrar</button><br>
    </form>
    
</body>
</html>