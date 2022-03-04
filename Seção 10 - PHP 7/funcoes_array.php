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
    
        /* $array = array();
        $retorno = is_array($array);

        if($retorno){
            echo 'Sim, é um array';
        }
        else{
            echo 'Não, não é um array';
        } */

        /* $array = [1 => 'a', 7 => 'b', 18 => 'c'];

        echo '<pre>';
            print_r($array);
        echo '</pre>';

        $chaves_array = array_keys($array);

        echo '<pre>';
            print_r($chaves_array);
        echo '</pre>'; */

        /* $array = array(20, 5, 9, 4, 12, 6);

        echo '<pre>';
            print_r($array);
        echo '</pre>';

        sort($array);

        echo '<pre>';
            print_r($array);
        echo '</pre>'; */

        /* $array = array(20, 5, 9, 4, 12, 6);

        echo '<pre>';
            print_r($array);
        echo '</pre>';

        asort($array);

        echo '<pre>';
            print_r($array);
        echo '</pre>';  */

        /* $array = array(20, 5, 9, 4, 12, 6);

        echo '<pre>';
            print_r($array);
            echo count($array);
        echo '</pre>'; */

        /* $array1 = ['batata', 'pão'];
        $array2 = ['sorvete', 'churrasco'];
        $array3 = ['vinagre', 'chimarrão'];

        $new_array = array_merge($array1, $array2, $array3);

        echo '<pre>';
            print_r($new_array);
        echo '</pre>';  */

        /* $string = '14/09/2021';

        $array = explode('/', $string);

        echo '<pre>';
            print_r($array);
        echo '</pre>';   */

        $array = ['cê', 'é', 'loko?'];
        $string = implode('-', $array);
        echo $string;

    ?>

</body>
</html>