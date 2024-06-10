<pre>

<?php

    $banco = new mysqli("localhost:3307", "root", "", "db_aula_segunda");

    function buscarUsuario($usuario){
        global $banco;

        $q = "SELECT usuario, nome, senha FROM usuario WHERE usuario='$usuario'";

            $busca = $banco->query($q);
            //echo var_dump($busca);

        return $busca;

    }
    
    
    /*
    $busca = $banco->query("SELECT * FROM usuario");
    echo var_dump($busca);
    
    echo "<br>-----------------------------<br>";
    
    while($obj = $busca->fetch_object()){
        echo var_dump($obj);
    }
    
    echo "<br>-----------------------------<br>";

    $busca = $banco->query("SELECT usuario, nome, senha FROM usuarios WHERE usuario='zezinho'");
    echo var_dump($busca);
    
    $obj = $busca->fetch_object();
    echo "<br>" . $obj->usuario;
    echo "<br>" . $obj->nome;
    echo "<br>" . $obj->senha;
    */
    /*
    $senhaNova = password_hash("122", PASSWORD_DEFAULT);
    $q = "UPDATE usuario SET senha='senhaaa' WHERE usuario='" . $senhaNova. "'";
    $resp = $banco->query($q);
    echo "Query: $q";
    echo var_dump($resp);

    $q = "DELETE FROM usuario WHERE usuario='zezinho'";
    $resp = $banco->query($q);
    echo "Query: $q";
    echo var_dump($resp);
    */
    
    function createOnDB($into, $values){
        global $banco;
        
        $q = "INSERT INTO $into VALUES $values";
        
        $resp = $banco->query($q);
        echo "Query: $q";
        echo var_dump($resp);
        
    }

    function updateOnDB($database, $set, $where){
        global $banco;
        
        $q = "UPDATE $database SET $set WHERE $where";

        $resp = $banco->query($q);
        echo "Query: $q";
        echo var_dump($resp);
    }
    
    function deleteFromDB($database, $where, $debug){
        global $banco;

        $q = "DELETE FROM $database WHERE $where";

        $resp = $banco->query($q);

        if($debug){
            echo "Query: $q";
            echo var_dump($resp);
        }
    }

    function criarUsuario($usuario, $nome, $senha){
        global $banco;
        
        $senha = password_hash($senha, PASSWORD_DEFAULT);

        //createOnDB("usuario(cod, usuario, nome, senha)" VALUES "(NULL, '$usuario', '$nome', '$senha')");
        
        $q = "INSERT INTO usuarios(cod, usuario, nome, senha) VALUES (NULL, '$usuario', '$nome', '$senha')";

        $resp = $banco->query($q);
        echo "Query: $q";
        echo var_dump($resp);

    }

    // criarUsuario("jose", "joselu", "1234");
    // criarUsuario("cr7", "Cristiano Ronaldo Aveiro", "monstro");

    function atualizarUsuario($usuario, $nome, $senha="", $debug=false){

        global $banco;

        $senha = password_hash("122", PASSWORD_DEFAULT);

        if($nome != "" && $senha != ""){
            $senha = password_hash($senha, PASSWORD_DEFAULT);
            $set = "nome='$nome', senha='$senha'";
        }else if($nome != ""){
            $set = "nome = '$nome'";
        }else if ($senha != ""){
            $senha = password_hash($senha, PASSWORD_DEFAULT);
            $set = "senha = '$senha'";
        }

        //$q = "UPDATE usuario SET senha='$senha' WHERE usuario='$usuario'";
        $q = "UPDATE usuario SET senha='$senha' WHERE usuario='$usuario'";

        $resp = $banco->query($q);
        
        if($debug){
            echo "Query: $q";
            echo var_dump($resp);
        }
    }

    function deleteUsuario(string $usuario){
        global $banco;

        //deleteFromDB("usuario", "usuario='usuario'");
        $q = "DELETE FROM usuario WHERE usuario='$usuario'";

        $resp = $banco->query($q);
        echo "Query: $q";
        echo var_dump($resp);

    }
    
    //atualizarUsuario("joaozinho", "joao", "", true);

?>
</pre>