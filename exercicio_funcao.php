<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICIO USANDO FUNÇÕES</title>
</head>
<body>
    <?php

        function calcularImpostoRenda($salario){
            if($salario < 1903.98){
                echo 'ISENTO';
            }else if($salario >= 1903.98 && $salario <= 2826.65){
                return $salario * 0.075;
            }
        }

        echo calcularImpostoRenda(1903.97);
    ?>
</body>
</html>