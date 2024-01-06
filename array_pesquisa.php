<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY METODO DE PESQUISA</title>
</head>
<body>
    <?php

        //in_array() -> retorna true or false para a existencia do que esta sendo procurado
        //array_search() -> retorna o indice do valor pesquisado caso ele exista

        $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];
/*
        echo '<pre>';
        print_r($lista_frutas);
        echo '</pre>';

        //in_array()
        $existe =  in_array('Maçã', $lista_frutas);
            //true -> texto = 1
            //false -> texto = (vazio)

        if($existe) {
            echo 'Sim, o valor existe no array';
        } else {
            echo 'Não, o valor não existe no array';
        }

        //array_search()
        echo '<hr>';
        echo array_search('Uva', $lista_frutas);
*/

        //metodo de pesquisa em array multidiensional
        $lista_coisas = [
            'frutas' => $lista_frutas,
            'pessoas' => ['João', 'Joana']
        ];

        echo '<pre>';
        print_r($lista_coisas);
        echo '</pre>';

        echo in_array('Abacate', $lista_coisas['frutas']);

    ?>
</body>
</html>