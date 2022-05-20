<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de conexão em PHP</title>
</head>
<body>
    <?php
        print "<h2>CONECTAR AO BANCO NO POSTGRESQL</h2>";
        //$bdcon = pg_connect("dbname=estudos");
        //conecta a um banco de dados chamado "estudos"

        $con_string = "host=localhost port=5432 dbname=estudos user=postgres password=pingaiada";
        if(!$dbcon = pg_connect($con_string)) die ("Erro ao conectar ao banco<br>".pg_last_error($dbcon));
        //coneta a um banco de dados chamado "estudos" na máquina "localhost" com um usuário e senha
    ?>
</body>
</html>