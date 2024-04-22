<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 9</title>
</head>
<body>

    <h1>Aula 9</h1>
    
    <form action="" method="get">
    
        <input type="text" name="n1" placeholder="<?php echo $n1; ?>">
        <input type="text" name="n1" placeholder="<? $n1; ?>">
        <button type="submit">Enviar</button>
    
    </form>

    <?php

        $n1 = isset($_GET["n1"]) ? $_GET["n1"] : 0;

        echo "O seu número é: {$n1}";

    ?>

</body>
</html>
