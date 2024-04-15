<form method="GET">

    <label for="nome">Qual seu nome?</label><br>
    <input name="nome" id="nome" type="text"><br><br>

    <button type="submit">Enviar</button>

</form>

<?php 

    echo "<h1>Aula 07</h1>";

    function quebra(){
        echo "\n<br>\n";
    }

    $str = "Janela";
    echo $str[-1];

    quebra();

    $str[2] = "O";
    echo $str;

    quebra();

    echo $str[0] . "oão";

    quebra();
    $tamanho = strlen($str);
    echo "Tamanho STR: " . $tamanho;

    quebra();

    for ($i=0; $i < $tamanho; $i++) { 
        echo "<br>" . $str[$i];
    }

    //diferença entre "" e ''
    quebra();
    echo "<br> um teste legal";
    echo '<br> outro teste legal';
    
    echo "<br> olha \n essa string";
    echo '<br> olha \n essa outra string';

    echo "<br>olha essa \\n barra";
    echo '<br>olha essa \ barra';

    $teste = "Jean";
    echo "O {$teste} agora parou de falar";
    echo 'O {$teste} agora parou de falar';

    quebra();

    echo "<br>this isn't";
    echo '<br>this isn\'t';

    quebra();
    echo "<br> Deletar C:\\usuario\nateus ?";
    echo '<br> Deletar C:\usuario\nateus ?';

    quebra();

    function soma($a, $b){
        return $a + $b;
    }

    $num = 55;
    echo "<br>O resultado é: $num.";
    echo "<br>O resultado é: {$num}.";
    echo "<br>O resultado é: " . $num . ".";
    echo '<br>O resultado é: {$num}.';
    
    echo "<br>O resultado é: " . soma(10,15) . ".";
    echo "<br>O resultado é: {soma(10, 15)}.";
    
    $array = ["Azul", "Amarelo", "Verde"];
    echo "<br>Valor do array: {$array[0]}.";
    echo "<br>O resultado é: " . $array[0] . ".";

    quebra();
    $a = 10;
    $$a = 20;

    echo "<br>Valor 1: {$a} - Valor 2: {$$a}";
    echo $a;
    echo $$a;

    quebra();
    //heredoc
    $novaVar = 80;
    $heredoc = <<<Teste

        <h2>O Titulo da página</h2>
        <p>Texto da página</p>
        <p>{$novaVar}</p>

    Teste;

    echo $heredoc;

    //nowdoc

    $nowdoc = <<<'outroTeste'

        <h2>O Titulo da página</h2>
        <p>Texto da página</p>
        <p>{$novaVar}</p>
        
    outroTeste;

    echo $nowdoc;

    quebra();
    $tamanho = strlen("123nasoid");
    echo "Tamanho: " . $tamanho;

    $str = "McDonauilds";
    $parte = substr($str, 2, 8);
    echo "<br>Str: {$str}";
    echo "<br>Parte: {$parte}";
    
    echo "<br>Maiusculo: " . strtoupper($parte);
    echo "<br>Minusculo: " . strtolower($parte);

    $nova = str_replace("ui", "", $parte);
    echo "<br>Nova: {$nova}"; 

    /*

        number_format() // formatar um número
        printf() // imprimir e formatar
        print_r() // mostrar array

        var _dump() // mostra array e tipo de variáveis

        trim() // remove espaço antes e depois da string
        ltrim() // só remove oq vem antes da string
        rtrim() // só remove oq vem depois da string

        str_word_count() // contagem de palavras
        explode() // quebra elas em array ["eu", "estou", "cansado"]
        str_split() // faz a mesma que a de cima
        implode()
        join()

        strtoupper() // TUDO MAIUSCULOS
        strtulower() // tudo minusculo
        ucfirst() // Só essa maiuscula
        ucwords() // As Palavras Ficam Assim

        strrev() // retorna a string ao contrário - nome = emon
        strpos() // Janela - ela -> 3
        stripos() // Janela - ELa -> 3
        
        str_pad($input, 10) // preenche sempre com a quantidade de caracteres que você quer
        
        */

        $input = "Alien";
        echo str_pad($input, 10);                      // produces "Alien     "
        echo str_pad($input, 10, "-=", STR_PAD_LEFT);  // produces "-=-=-Alien"
        echo str_pad($input, 10, "_", STR_PAD_BOTH);   // produces "__Alien___"
        echo str_pad($input,  6, "___");               // produces "Alien_"
        echo str_pad($input,  3, "*");                 // produces "Alien"  

        function titulo($texto){
            $tamanho = 10 + strlen($texto);

            echo "\n<br>";
            echo str_pad("", $tamanho, "*");
            echo "\n<br>";
            $a = ($tamanho - 6);
            echo str_pad($texto, $a, "*", STR_PAD_BOTH);
            echo "\n<br>";
            echo str_pad("", $tamanho, "*");
            echo "\n<br>";

        }

        titulo($tamanho);

        function exercicio1(){
            $str = "Brasil Hexa 2006";
            $str2 = "Brasil! Hexa 2006!";
            
            $tamanho = strlen($str);
            $tamanho2 = strlen($str2);
            
            quebra();

            echo "Tamanho de {$str}: " . $tamanho;

            quebra();

            echo "Tamanho de {$str2}: " . $tamanho2;

            quebra();

            if ($tamanho == $tamanho2) 
                echo "\nAs duas strings são de tamanhos diferentes.";
            else 
                echo "\nAs duas strings possuem conteúdo diferente.";
            
        }

        strings();

        function nome(){

            $nome = $_GET['nome'];

            

        }
        
?>
