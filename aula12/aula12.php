<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 - Banco</title>
</head>
<body>
    <pre>
    <?php

        require_once "banco.php";

        $usu = $_POST['usuario'] ?? null;
        $sen = $_POST['senha'] ?? null;

        if(is_null($usu) || is_null($sen)){

            require_once "form-login.php";

        }else{

            require_once "form-login.php";

            echo "~ [Usuario: $usu - Senha: $sen] ~";

            $busca = buscarUsuario($usu);

            if($busca->num_rows == 0){

                echo "<bre>Usuário não existe!";

            }else{

                echo "<br> boa";
                $obj = $busca->fetch_object();
                echo "<br>" . $obj->usuario;
                echo "<br>" . $obj->nome;
                echo "<br>" . $obj->senha;

                if(password_verify($sen, $obj->senha)){
                    echo "<br> Sucesso!";
                }else{
                    echo "<br> Sem Sucesso ;/";
                }

            }

        }

        //echo "<br>" . password_hash("senha47", PASSWORD_DEFAULT);
        //echo "<br>" . password_hash("122", PASSWORD_DEFAULT);
        //echo "<br>" . password_hash("AbC1", PASSWORD_DEFAULT);

    ?>
    </pre>

</body>
</html>