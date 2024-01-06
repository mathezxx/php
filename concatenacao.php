<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONCATENAÇÃO EM PHP</title>
</head>
<body>

    <?php

        $nome = 'Cleisa';
        $idade = 20;

        echo 'Olá ' . $nome . ' você gosta de jogar video game nas horas vagas e você tem ' . $idade . ' anos';

        echo '<br />';
        
        //apas dupla não precisa do ponto para concatenar 
        echo "Olá $nome, você gosta de jogar video game nas horas vagas e você tem $idade anos";

    ?>
    
</body>
</html>