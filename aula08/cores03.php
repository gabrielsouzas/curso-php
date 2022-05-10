<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
        $txt = $_GET["t"];
        $tam = $_GET["tam"];
        $cor = $_GET["cor"];
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        * {
            margin: 10px;
        }

        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }

        a {
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php 
    
        echo "<span class='texto'>$txt</span>";
    ?>
    <div><a href="ex03.html">Voltar</a></div>
</body>
</html>