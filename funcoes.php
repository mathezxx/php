<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNÇÕES EM PHP</title>
</head>
<body>
    
    <?php
        //void (função sem retorno)
        function exibirBoasVindas(){
            echo 'Bem-vindo ao curso de PHP! <br/>';
        }

        exibirBoasVindas();
        exibirBoasVindas();
        exibirBoasVindas();
        exibirBoasVindas();

        //return (função com retorno)
        function calcularAreaTerreno($largura, $comprimento){
            $area = $largura * $comprimento;
            return $area;
        }

        $resultado = calcularAreaTerreno(10, 10);
        echo $resultado;
        echo '<br/>';
        echo calcularAreaTerreno(5, 10);
        echo '<br/>';
        echo calcularAreaTerreno(5, 10);
        echo '<br/>';
        echo calcularAreaTerreno(5, 10);
        echo '<br/>';
        echo calcularAreaTerreno(5, 10);    


    ?>

</body>
</html>