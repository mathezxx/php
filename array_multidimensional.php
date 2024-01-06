<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY MULTIDIMENSIONAL</title>
</head>
<body>
    <?php

        $lista_coisas = [];

        $lista_coisas['frutas'] = [1 => 'Banana', 2 => 'Maçã', 3 => 'Morango', 4 => 'Uva'];
        $lista_coisas['pessoas'] = [1 => 'João', 2 => 'José', 3 => 'Maria'];

        echo '<pre>';
            print_r($lista_coisas);
        echo '</pre>';
        echo '<hr>';

        //Recuperando um item dentro de uma array multidimensional
        echo $lista_coisas['frutas'][3];

    ?>  
</body>
</html>