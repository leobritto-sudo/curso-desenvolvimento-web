<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

    <?php

        $idade = 14;
        $peso = 55;

        $atende_ou_nao = $idade >= 16 && $idade <= 69 && $peso >= 50 ? 'Atende aos requisitos' : 'Não atende aos requisitos';

    ?>

    <h1>Doação de sangue</h1>

    <p>Informações sobre seu status para doação de sangue: <strong><?= $atende_ou_nao ?></strong></p>

</body>
</html>