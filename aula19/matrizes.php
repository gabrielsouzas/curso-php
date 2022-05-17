<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores e Matrizes em PHP</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div>
        <pre>
            <?php
                //Vetores

                $v = array(1,2,3,4); // Cria um array
                $v[] = 7; // Adiciona o numero 7  ultima posição do array criado
                print_r($v);
                echo "</br>";
                
                // cria um vetor que começa com 5, vai até 20 e pula os valores de 5 em 5
                $c = range(5, 20, 5);
                print_r($c);
                foreach ($c as $v) {
                    echo "<td> $v ";
                }

                echo "</br>";

                $v2 = array(1 => "A", 
                            2 => "B", 
                            3 => "C", 
                            4 => "D",);

                print_r($v2);

                echo "</br>";

                // Remove o valor e o indice
                unset($v2[3]);

                print_r($v2);

                $v3 = array(
                    "nome" => "Ana",
                    "idade" => 23,
                    "peso" => 78.5
                );
                
                $v3["fuma"] = true;

                foreach ($v3 as $campo => $valor) {
                    echo "<p>O campo $campo tem o valor $valor</p>";
                }

                echo "</br>";

                //Matrizes

                $n = array(array(2,3),
                           array(4,5),
                           array(7,9));

                print_r($n)
            ?>
        </pre>
    </div>
</body>
</html>