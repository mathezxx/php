<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOREACH</title>
</head>
<body>
    <?php

        $itens = ['sofá', 'cadeira', 'mesa', 'fogão', 'geladeira'];

        echo '<pre>';
        print_r($itens);
        echo '</pre>';

        foreach ($itens as $item) {
            echo "$item";

            if($item == 'mesa'){
                echo ' ( *Compre uma mesa e ganhe 50% de desconto!)';
            }

            echo '<br> ';
        }


    ?>
</body>
</html>