<form action="" method="get">
    
    <label for="usua">Usuário: </label>
    <input type="text" name="usua" id="id-usua">

    <label for="senhas">Senha: </label>
    <input type="password" name="senhas" id="id-senhas">

    <button type="submit">Enviar</button>
    
</form>

<?php

    $usuarios = [
        ["usu" => "pedroca", "nome" => "pedro", "senha" => "122"],
        ["usu" => "zezinho", "nome" => "arthur", "senha" => "senha47"],
        ["usu" => "joaozinho", "nome" => "joao", "senha" => "AbC1"]
    ];

    $tentativas = 0;

    function verificador($usuarios){

        $usu = $_GET['usua'];
        $senhas = $_GET['senhas'];
        global $tentativas;

        foreach ($usuarios as $usuario) {
            
            if ($usu == $usuario['usu'] && $senhas == $usuario['senha']) {
                
                echo "Muito bem!";

                return;

            } 
            
            $tentativas++;
        }
        
        echo "Usuário ou senha não encontrados!";

        echo "<br>";
        echo "<br>";
        
        echo "Tentativas: " . $tentativas;
        
    }

    verificador($usuarios);


?>