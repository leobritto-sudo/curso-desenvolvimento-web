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
        
        $num = 4.7;

        echo ceil($num) . '<br>'; //arredonda pra cima
        echo floor($num) . '<br>'; //arredonda pra baixo
        echo round($num) . '<br>'; //arredonda com base na fração
        echo rand() . '<br>'; //gera um valor de 0 até o randmax
        echo getrandmax() . '<br>'; //retorna o valor do randmax
        echo sqrt($num) . '<br>'; //retorna a raíz quadrada


    ?>

</body>
</html>