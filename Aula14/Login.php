<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h1>LOGIN</h1>

    <pre>
    <?php

    session_start();

    $usu = $_SESSION["usuario"] ?? null;

    if(is_null($usu)){
        //estou logado
        header("Location: Aula14.php");
    }else{

        require_once "banco.php";

        $usu = $_POST['usuarioNovo'] ?? null;
        $nome = $_POST['nomeNovo'] ?? null;
        $sen = $_POST['senhaNova'] ?? null;

        if(is_null($usu) || is_null($nome) || is_null($sen)){

            require_once "form-novo.php";

        }else{

            require_once "form-novo.php";

            echo "~ [Usuario: $usu - Nome: $nome - Senha: $sen] ~";

            $busca = buscarUsuario($usu);

            if($busca->num_rows == 0){

                criarUsuario($usu, $nome, $sen);

            }

        }

        //echo "<br>" . password_hash("senha47", PASSWORD_DEFAULT);
        //echo "<br>" . password_hash("122", PASSWORD_DEFAULT);
        //echo "<br>" . password_hash("AbC1", PASSWORD_DEFAULT);

    }

    ?>
    </pre>

    <a href="form-atualizar.php"><button type="button">Esqueceu a senha: </button></a>

</body>
</html>