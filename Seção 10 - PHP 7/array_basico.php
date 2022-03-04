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
    
        //sequenciais
        //$lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva');
        /* $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];
        $lista_frutas[] = 'Abacaxi';

        /* echo '<pre>';
        var_dump($lista_frutas);
        echo '</pre>';

        echo '<hr>';
        echo '<pre>';
        print_r($lista_frutas);
        echo '</pre>';

        echo $lista_frutas[4] */

        //associativos

        $lista_frutas = array('a' => 'Banana', 'b' => 'Maçã', 'x' => 'Morango', '2' => 'Uva');

        $lista_frutas['w'] = 'Abacaxi';

        echo '<pre>';
        var_dump($lista_frutas);
        echo '</pre>';

    ?>

</body>
</html>