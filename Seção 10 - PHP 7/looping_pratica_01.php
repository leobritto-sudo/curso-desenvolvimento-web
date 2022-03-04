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
    
        $registros = array(
            array('titulo' => 'Titulo noticia 1', 'conteudo' => 'Conteúdo 1'), 
            array('titulo' => 'Titulo noticia 2', 'conteudo' => 'Conteúdo 2'),
            array('titulo' => 'Titulo noticia 3', 'conteudo' => 'Conteúdo 3'),
            array('titulo' => 'Titulo noticia 4', 'conteudo' => 'Conteúdo 4'));

        echo '<pre>';
        print_r($registros);
        echo '</pre>';
        echo '<br><br><br>';

        /* while($idx < count($registros)){

            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
            echo '<hr>';

            $idx++;
        } */

        /* do {

            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
            echo '<hr>';

            $idx++;

        } while($idx < count($registros)); */

        for($idx = 0; $idx < count($registros); $idx++){

            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
            echo '<hr>';

        }

    ?>

</body>
</html>