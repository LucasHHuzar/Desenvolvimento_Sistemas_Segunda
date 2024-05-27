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
        $nome = $_POST["nome"] ?? null;
        $empresa = $_POST["empresa"] ?? null;

        if(is_null($cod)){
            echo "Nenhum produto para editar";
            return;
        }
        
        require_once "banco.php";
        
        if(is_null($nome) || is_null($empresa)){
        
            $q = "SELECT nome, empresa_cod FROM smartphone WHERE cod='$cod'";
            $busca = $banco->query($q);
    
            $obj_smart = $busca->fetch_object();
            $nome = $obj_smart->nome;
            $empresa = $obj_smart->empresa_cod;
    
        }else{
            updateOnDB("smartphone", "nome='$nome', empresa_cod='$empresa'", "cod='$cod'");

            header("Location: Aula14.php");
        }
        
    ?>

    <form action="" method="post">

        <label for="">cod: </label>
        <input type="text" name="cod" value="<?= $cod ?>" disabled>
        
        <label for="">Nome: </label>
        <input type="text" name="nome" placeholder="<?= $nome ?>">
        
        <label for="">Empresa: </label>
        <input type="text" name="empresa" value="<?= $empresa ?>">

        <input type="submit" value="Salvar">

    </form>
    
</body>
</html>