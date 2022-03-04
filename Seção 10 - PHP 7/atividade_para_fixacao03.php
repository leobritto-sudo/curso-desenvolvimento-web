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

        $num_sorteio = array();

        while(count($num_sorteio) < 6){
            array_push($num_sorteio, rand(1, 60));
            array_unique($num_sorteio);
            array_values($num_sorteio);
        }
        
        sort($num_sorteio);

        echo '<h3>Números sorteados da Mega-Sena</h3>';

        foreach($num_sorteio as $idx => $num){
            echo '<p>' . ($idx + 1) . 'º número - ' . $num . '</p>';
        }
        
    ?>

</body>
</html>