<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>

    <?php
    
        $cod = $_GET["p"] ?? null;

            if(is_null($cod)){
                echo "Nenhum produto para editar";
                return;
            }

    ?>

    <form action="" method="post">
        <label for="">cod: </label>
        <input type="text" name="cod">
        
        <label for="">Nome: </label>
        <input type="text" name="nome">
        
        <label for="">Empresa: </label>
        <input type="text" name="empresa">

    </form>
    
</body>
</html>