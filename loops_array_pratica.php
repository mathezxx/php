<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY LOOP</title>
</head>
<body>
    <?php

        $registro = [
            ['titulo' => 'Título notícia 1', 'conteudo' => 'Conteudo notícia 1'],
            ['titulo' => 'Título notícia 2', 'conteudo' => 'Conteudo notícia 2'],
            ['titulo' => 'Título notícia 3', 'conteudo' => 'Conteudo notícia 3'],
            ['titulo' => 'Título notícia 2', 'conteudo' => 'Conteudo notícia 2'],
            ['titulo' => 'Título notícia 2', 'conteudo' => 'Conteudo notícia 2'],
            ['titulo' => 'Título notícia 2', 'conteudo' => 'Conteudo notícia 2'],
            ['titulo' => 'Título notícia 2', 'conteudo' => 'Conteudo notícia 2'],
            ['titulo' => 'Título notícia 2', 'conteudo' => 'Conteudo notícia 2']
        ];

        echo '<pre>';
        print_r($registro);
        echo '</pre>';
        echo '<br>';

        $idx = 0;

        echo 'O array possui ' . count($registro) . ' registros';
        while($idx < count($registro)){

            echo '<h3>' . $registro[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registro[$idx]['conteudo'] . '</p>';
            echo '<hr>';

            $idx++;
        }

    ?>
</body>
</html>