<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Idade em PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <?php 
    $nome = "";
    if ($_GET["txtnome"] != null) {
        $nome = $_GET["txtnome"];
    } else {
        $nome = "[NOME NÃO INFORMADO]";
    }
        
        $ano = isset($_GET["txtanonasc"])?$_GET["txtanonasc"]:0; // Não funciona pq ele passa o null automatico que é zero
        $sexo = $_GET["rdsexo"];
        $idade =  date("Y") - $ano; // Y Ano com 4 digitos
        echo "$nome nasceu em $ano, tem $idade anos e é $sexo.";
    ?>
    <div>
        <a href="ex02.html">Voltar</a>
    </div>
</body>
</html>