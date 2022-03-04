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
    
        /* //recuperar data atual
        echo date('d/m/Y H:i');

        echo '<br>';

        echo date_default_timezone_get();

        echo '<br>';

        //date_default_timezone_set('America/Sao_Paulo');

        echo date('d/m/Y H:i'); */

        $data_inicial = '2021-02-11';
        $data_final = '2021-09-13';

        //timestamp
        //01/01/1970 - (php => segundos)

        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final);
        echo $data_inicial . ' - ' . $time_inicial;
        echo '<br>';
        echo $data_final . ' - ' . $time_final;

        $diferença_times = $time_final - $time_inicial;
        echo '<br>';
        echo 'A diferença entre as datas em segundos é ' . $diferença_times;

        $segundos_existentes_em_um_dia = 24 * 60 * 60;

        echo '<br>';

        echo 'Existem ' . $segundos_existentes_em_um_dia . ' em um dia';

        $diferença_de_dias_entre_datas = $diferença_times / $segundos_existentes_em_um_dia;

        echo '<br>';

        echo "Existem $diferença_de_dias_entre_datas dias entre $data_inicial e $data_final";

    ?>

</body>
</html>