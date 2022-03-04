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

        //in_array() -> retornar true ou false para a existência do que está sendo pesquisado no array
        //array_search() -> retorna o indice do valor pesquisado, caso exista
    
        $lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva');


        /* echo '<pre>';
        var_dump($lista_frutas);
        echo '</pre>';

        //$existe = in_array('Batata', $lista_frutas);
        $existe = array_search('Maçã', $lista_frutas);

        echo $existe != null ? 'Sim, existe no array' : 'Não, não existe no array'; */

        $lista_coisas = ['frutas' => $lista_frutas, 'pessoas' => ['João', 'Maria']];

        echo '<pre>';
        var_dump($lista_coisas);
        echo '</pre>';

        echo in_array('Uva', $lista_coisas['frutas'])

    ?>

</body>
</html>