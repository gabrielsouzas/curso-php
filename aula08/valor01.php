<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Raiz</title>
</head>
<body>
    <link href="">
    <?php 
        $valor = $_GET["v"];
        echo "<p>A raiz quadrada de $valor é ". (number_format(sqrt($valor), 2)) . "</p>";
        
    ?>
    <a href="ex01.html">Voltar</a>
</body>
</html>