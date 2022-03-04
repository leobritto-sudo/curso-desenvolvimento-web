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

        function calcularImpostoDeRenda($salario){
            $imposto;

            if($salario <= 1903.98 && $salario > 0){
                $imposto = 'Seu imposto de renda é: Isento';
            }
            elseif($salario > 1903.98 && $salario <= 2826.65){
                $imposto = 'Seu imposto de renda é: R$' . ($salario * 0.075);
            }
            elseif($salario > 2826.65 && $salario <= 3751.05){
                $imposto = 'Seu imposto de renda é: R$' . ($salario * 0.15);
            }
            elseif($salario > 3751.05 && $salario <= 4664.68){
                $imposto = 'Seu imposto de renda é: R$' . ($salario * 0.225);
            }
            elseif($salario > 4664.68){
                $imposto = 'Seu imposto de renda é: R$' . ($salario * 0.275);
            }
            else{
                $imposto = 'Salário inválido';
            }

            return $imposto;

        }

        $imposto_de_renda = calcularImpostoDeRenda(20000);
        echo $imposto_de_renda;

    ?>

</body>
</html>