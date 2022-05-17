<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções em Vetores PHP</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div>
        <pre>
            <?php
            echo "<h1>Imprimir vetor com o var_dump</h1>";
            $v = array("A", "J", "M", "X", "K");
            $tot = count($v);
            echo "O vetor tem $tot elementos <br/>";
            var_dump($v);

            echo "</br>";

            echo "<h1>Colocar um elemento no final do vetor</h1>";
            // Colocar um elemento no final do vetor
            array_push($v, "L");
            print_r($v);

            echo "</br>";

            echo "<h1>Remover o ultimo elemento do vetor</h1>";
            // Remover o ultimo elemento do vetor
            array_pop($v);
            print_r($v);

            echo "</br>";

            echo "<h1>Colocar um elemento no inicio do vetor</h1>";
            // Colocar um elemento no inicio do vetor
            array_unshift($v, "Y");
            print_r($v);

            echo "</br>";

            echo "<h1>Remover o primeiro elemento do vetor</h1>";
            // Remover o primeiro elemento do vetor
            array_shift($v);
            print_r($v);

            echo "</br>";

            echo "<h1>Ordenar vetor</h1>";

            sort($v);
            print_r($v);

            echo "</br>";

            echo "<h1>Ordenar vetor de forma reversa</h1>";

            rsort($v);
            print_r($v);

            echo "</br>";

            echo "<h1>Ordenar vetor de forma associativa (Ordena e leva os indices juntos)</h1>";

            asort($v);
            print_r($v);

            echo "</br>";

            echo "<h1>Ordenar vetor de forma associativa reversa (Ordena e leva os indices juntos)</h1>";

            arsort($v);
            print_r($v);

            echo "</br>";

            echo "<h1>Ordenar vetor pelo indice</h1>";

            ksort($v);
            print_r($v);

            echo "</br>";

            echo "<h1>Ordenar vetor pelo indice reverso</h1>";

            krsort($v);
            print_r($v);


            ?>
        </pre>
    </div>
</body>
</html>