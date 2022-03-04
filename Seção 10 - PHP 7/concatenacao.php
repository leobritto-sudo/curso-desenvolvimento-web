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

        $nome = 'Sophia';
        $cor = 'preto';
        $idade = 16;
        $atividade_preferida = 'cantar';

        //operador .

        echo 'Olá ' . $nome . ', vi que sua cor preferida é ' . $cor . ', você também possui ' . $idade . ' anos, e gosta de ' . $atividade_preferida;

        //aspas duplas

        echo '<br>';

        echo "Olá $nome, vi que sua cor preferida é $cor, você também possui $idade anos, e gosta de $atividade_preferida";

    ?>

</body>
</html>