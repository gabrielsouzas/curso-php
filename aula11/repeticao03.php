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
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="principal">
        <?php
        $incr = $_GET["inc"];
        $fina = $_GET["fim"];
        $inic = $_GET["ini"];
        for ($i = $inic; $i <= $fina; $i+=$incr) {
            echo "$i ";
        }
        ?>
        <div>
            <a class="btn" href="javascript:history.go(-1)">Voltar</a>
        </div>
</body>

</html>