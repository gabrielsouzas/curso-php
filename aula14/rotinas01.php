<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas em PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">

</head>
<body>
    <div>
        <?php 
            echo "<h1>Soma comum com função</h1>";
            function soma($a, $b){
                $s = $a + $b;
                echo "<p>A soma vale $s</p>";
            }   
            soma(1,2);
            soma(5,2);
            soma(7,2);

            echo "<h1>Soma com melhorias na função</h1>";
            // Função soma com melhorias
            function soma_melhorada(){
                $soma = 0;
                
                //func_get_arg(indice) - Pega o parâmetro passado na função de acordo com o índice
                //func_get_args() - Pega todos os parâmetros passados na função e cria um vetor
                //func_num_args() - Pega a quantidade de parâmetros passados na função
                for ($i=0; $i < func_num_args(); $i++) { 
                    $soma+= func_get_arg($i);
                }
                return $soma;
            }

            echo "<p>A soma dos valores melhorada é ". soma_melhorada(5,1,1,1,1) ."</p>";

            echo "<h1>Soma por referencia na função</h1>";
            // Função com passagem por referência
            function soma_referencia(&$x){
                $x+= 5;
                echo "<p>O valor de X é $x</p>";
            }

            $a = 3;
            soma_referencia($a);
            echo "<p>O valor de A é $a</p>";
        ?>
    </div>
</body>
</html>