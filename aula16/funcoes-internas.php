<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções internas do PHP</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div>
        <?php
            //PRINTF
            printf("<h1>PRINTF</h1>");

            $prod = "Leite";
            $preco = 4.5;
            echo "<p>O $prod custa R$ ". number_format($preco, 2) ."</p>";
            printf("<p>O %s custa R$ %.2f</p>", $prod, $preco);
            /*
            Parâmentros printf
            %d - valor decimal (positivo ou negativo)
            %u - valor decimal sem sinal (apenas positivos)
            %f - valor real
            %s - string
            */

            //PRINTR
            printf("<h1>PRINTR</h1>");

            $vetor[0] = 4;
            $vetor[1] = 8;
            $vetor[2] = 3;
            print_r($vetor);

            echo "</br>";

            $vetor2 = array (1, 2, 3, 4, 5);
            print_r($vetor2);
            echo "</br>";
            echo "<strong>VAR_DUMP: </strong>";
            var_dump($vetor2);
            echo "</br>";
            echo "<strong>VAR_EXPORT: </strong>";
            var_export($vetor2);

            //WORDWRAP
            printf("<h1>WORDWRAP</h1>");

            $t = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função worwrap";
            $r = wordwrap($t, 5, "</br>\n", false);
            echo $r;

            //STRLEN
            printf("<h1>STRLEN</h1>");

            $txt = "Curso em Video";
            $tamanho = strlen($txt);
            echo "<p>O tamanho da String $txt é $tamanho!</p>";

            //TRIM
            printf("<h1>TRIM</h1>");
    
            $nome = "   José  da Silva   ";
            echo "<p>O tamanho da String $nome é ". strlen($nome). "!</p>";

            $novo = trim($nome);
            echo "<p>O tamanho da String $novo é ". strlen($novo). "!</p>";

            // LTRIM - Tira os espaços da esquerda (inicio do texto)
            //RTRIM - Tira os espaços da direita (fim do texto)

            //STR_WORD_COUNT
            printf("<h1>STR_WORD_COUNT</h1>");

            $frase = "Eu vou estudar PHP";
            $cont = str_word_count($frase, 0);
            
            // 0 - Conta as palavras
            echo "<p>A frase $frase tem $cont palavras</p>";
            
            // 1 - Separa em um vetor
            $cont = str_word_count($frase, 1);
            print_r($cont);

            //EXPLODE
            printf("<h1>EXPLODE</h1>");

            $site = "Curso em Video";
            $vetor = explode(" ", $site);
            print_r($vetor);

            //STR_SPLIT
            printf("<h1>STR_SPLIT</h1>");

            $nome_m = "Maria";
            $vetor_m = str_split($nome_m);
            print_r($vetor_m);

            //IMPLODE OU JOIN
            printf("<h1>IMPLODE OU JOIN</h1>");

            $vetor_imp[0] = "Curso";
            $vetor_imp[1] = "em";
            $vetor_imp[2] = "Video";
            $texto = implode("#", $vetor);
            print($texto);

            //CHR
            printf("<h1>CHR</h1>");

            $letra = chr(67);
            echo "<p>A letra de código 67 é $letra<p/>";

            //ORD
            printf("<h1>ORD</h1>");

            $letra_b = "C";
            $cod = ord($letra);
            echo "<p>A letra $letra_b tem código $cod<p/>";

            //STRTOLOWER
            printf("<h1>STRTOLOWER</h1>");

            $nome = "Gabriel Souza da Silva";
            $nome_2 = strtolower($nome);
            echo "<p>Seu nome em letras minusculas é $nome_2<p/>";

            //STRTOUPPER
            printf("<h1>STRTOUPPER</h1>");

            $nome = "Gabriel Souza da Silva";
            $nome_2 = strtoupper($nome);
            echo "<p>Seu nome em letras maiusculas é $nome_2<p/>";

            //UCFIRST
            printf("<h1>UCFIRST</h1>");

            $nome = "gabriel souza da silva";
            $nome_2 = ucfirst($nome);
            echo "<p>Seu nome com a primeira letra em maiuscula é $nome_2<p/>";

            //UCWORDS
            printf("<h1>UCWORDS</h1>");

            $nome = "gabriel souza da silva";
            $nome_2 = ucwords($nome);
            echo "<p>Seu nome com as primeiras letras em maiusculas é $nome_2<p/>";

            //STRREV
            printf("<h1>STRREV</h1>");

            $nome = "gabriel souza da silva";
            $nome_2 = strrev($nome);
            echo "<p>Seu nome ao contrario é $nome_2<p/>";

            //STRPOS
            printf("<h1>STRPOS</h1>");

            $frase = "Estou aprendendo PHP";
            $pos = strpos($frase, "PHP");
            echo "<p>$frase<p/>";
            echo "<p>A string PHP foi encontrada na posição $pos<p/>";

            //STRIPOS
            printf("<h1>STRIPOS</h1>");

            $frase = "Estou aprendendo PHP";
            $pos = stripos($frase, "php");
            echo "<p>$frase<p/>";
            echo "<p>A string php foi encontrada na posição $pos<p/>";

            //SUBSTR_COUNT
            printf("<h1>SUBSTR_COUNT</h1>");

            $frase = "Estou aprendendo PHP no curso em video de PHP";
            $cont = substr_count($frase, "PHP");
            echo "<p>$frase<p/>";
            echo "<p>A string PHP foi encontrada $cont vezes<p/>";

            //SUBSTR
            printf("<h1>SUBSTR</h1>");

            $frase = "Curso em Video";
            $sub = substr($frase, 0, 5);
            //substr($frase, 5) - da quinta letra até o final
            //substr($frase, 0, -5) - as ultimas 5 letras
            //substr($frase, 0, -5, 2) - as ultimas 5 letras e pega as duas primeiras
            echo "<p>$frase<p/>";
            echo "<p>A frase foi recortada nas posições de 0 a 5 e encontrou a string $sub<p/>";

            //STR_PAD
            printf("<h1>STR_PAD</h1>");

            $nome = "Gabriel";
            $novo = str_pad($nome, 30, "#", STR_PAD_RIGHT);
            // STR_PAD_CENTER - Espaços a direita e a esquerda
            echo "<p>O nome $nome adicionando # para completar e ficar com 30 caracteres é $novo<p/>";

            //STR_REPEAT
            printf("<h1>STR_REPEAT</h1>");

            $txt = "PHP";
            $repetir = str_repeat($txt, 5);
            echo "<p>A string $txt repetida 5 vezes fica: $repetir<p/>";

            //STR_REPLACE
            printf("<h1>STR_REPLACE</h1>");

            $frase = "Gosto de estudar Matematica";
            $novafrase = str_replace("Matematica", "PHP", $frase);
            echo "<p>A frase $frase substituindo a palavra Matematica por PHP fica $novafrase<p/>";

        ?>
    </div>
</body>
</html>