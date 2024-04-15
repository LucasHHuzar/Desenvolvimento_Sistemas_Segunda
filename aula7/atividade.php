<?php
            
    function formularios($nomes, ...$metodos){
        
        echo '<form method="' . $nomes . '">';

        foreach($metodos as $metodo){

            echo '<label for="' . $metodo . '">' . $metodo . ': </label><br>';
            echo '<input name="' . $metodo . '" id="nome" type="text"><br><br>';
            
        }

        echo '<button type="submit">Enviar</button>';

        echo '</form>';

    }

    formularios("post", "Nome", "Idade");

?>