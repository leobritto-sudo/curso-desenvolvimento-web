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

        //string
        $nome = 'Leonardo Alves';

        //int
        $idade = 18;

        //float
        $peso = 62.5;

        //boolean
        $fumante_sn = true; //(true = 1) (false = vazio)

        //mudando tipo e valor da variável
        $idade = '19'

    ?>

    <h1>Ficha de cadastro</h1>
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn ?></p>

</body>
</html>