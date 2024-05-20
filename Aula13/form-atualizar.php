<form action="" method="post">

    <h1>Atualizando Usuario</h1>

    <label for="">Usuario: </label>
    <input type="text" name="usuarioAtualizar" id="">
    
    <label for="">Nome: </label>
    <input type="text" name="nomeAtualizar" id="">

    <label for="">Senha: </label>
    <input type="password" name="senhaAtualizar" id="">

    <button type="submit">Atualizar</button>

</form>

<pre>
<?php

    require_once "banco.php";

    $usu = $_POST['usuarioAtualizar'] ?? null;
    $nome = $_POST['nomeNovo'] ?? null;
    $sen = $_POST['senhaNova'] ?? null;

    if(is_null($usu) || is_null($nome) || is_null($sen)){

        require_once "form-novo.php";

    }else{

        require_once "form-novo.php";

        echo "~ [Usuario: $usu - Nome: $nome - Senha: $sen] ~";

        $busca = buscarUsuario($usu);

        if($busca->num_rows == 1){

            $obj = $busca->fetch_object();
            echo "<br>" . $obj->usuario;
            echo "<br>" . $obj->nome;
            echo "<br>" . $obj->senha;

            if(password_verify($sen, $obj->senha)){
                echo "<br> Sucesso!";
            }else{
                echo "<br> Sem Sucesso ;/";
            }

            criarUsuario($usu, $nome, $sen);

        }

    }

    //echo "<br>" . password_hash("senha47", PASSWORD_DEFAULT);
    //echo "<br>" . password_hash("122", PASSWORD_DEFAULT);
    //echo "<br>" . password_hash("AbC1", PASSWORD_DEFAULT);

?>
</pre>