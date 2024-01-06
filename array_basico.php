<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY PHP</title>
</head>
<body>
    <?php
    
        //sequenciais (numericos)
        /*
        $lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva');

        $lista_frutas[] = 'Abacaxi';

        //comando '<pre></pre>' utilizado para estilizar a saida da array no browser
        echo '<pre>';
            var_dump($lista_frutas);
        echo '</pre>';
        echo '<hr/>';
        echo '<pre>';
            print_r($lista_frutas);
        echo '</pre>';

        echo $lista_frutas[4];
        */
        
        //associativos
        $lista_frutas = array(
            'a' => 'Banana', 
            'b' => 'Maçã',
            'c' => 'Morango',
            'd' => 'Uva');
        
        //adicionando um novo elemento na array
        $lista_frutas['e'] = 'Abacaxi';

        echo '<pre>';
            var_dump($lista_frutas);
        echo '</pre>';
        
        echo $lista_frutas['e'];
        
    ?>
</body>
</html>