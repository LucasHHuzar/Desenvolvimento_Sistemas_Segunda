<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13 - Telefones</title>
</head>
<body>

    <h1>SMARTPHONES</h1>

    <pre>
    <?php

        require_once "banco.php";

        $q = "SELECT * FROM smartphone";
        //$q = "SELECT * FROM empresa";

        $busca = $banco->query($q);
        var_dump($busca);

        // $obj_smartphone = $busca->fetch_object();
        // echo print_r($obj_smartphone);

    ?>
    </pre>

    <table>
        
        <tr>
            <th>COD</th>
            <th>NOME</th>
            <th>EMPRESA</th>
        </tr>
        <tr>
            <?php

                while($obj_smartphone = $busca->fetch_object()){
                    echo "<tr>";
                    echo "<td>$obj_smartphone->cod</td>";
                    echo "<td>$obj_smartphone->nome</td>";
                    echo "<td>$obj_smartphone->empresa</td>";
                    echo "</tr>";
                }

            ?>
        </tr>
  
    </table>

</body>
</html>