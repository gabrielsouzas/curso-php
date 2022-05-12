<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch em PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        div.principal {
            margin-top: 9px;
            margin-left: 9px;
        }

        .btn {
            color: white;
            background-color: rgba(40, 47, 82, 0.829);
        }
    </style>
</head>
<body>
    <div class="principal">
        <?php 
            $n = $_GET["ds"];
            switch ($n) {
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Levanta e vai estudar!";
                    break;
                case 7:
                case 8:
                    echo "Descanse pequeno gafanhoto! :)";
                    break;
                default:
                    echo "Dia da semana inválido!";
                    break;
            }
        ?>
        <div>
        <a class="btn" href="javascript:history.go(-1)">Voltar</a>
        </div>
    </div>
</body>
</html>