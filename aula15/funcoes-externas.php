<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Externas em PHP</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div>
        <?php 
            //Apenas inclui o arquivo e continua a carga do código
            //include "funcoes.php";
            
            //Inclui o arquivo e se não encontrar ele para toda a aplicação
            require "funcoes.php";
            echo "<h1>Testando Funções Externas</h1>";
            ola();
            mostraValor(5);
        ?>
    </div>
</body>
</html>