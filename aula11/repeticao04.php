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
        div.secundaria {
            margin: 80px;
            background: gray;
            border: 2px solid black;
            border-radius: 2%;
        }

        .btn {
            color: white;
            background-color: rgba(40, 47, 82, 0.829);
            margin-top: 5px;
        }
        h1 {
            text-align: center;
            background: aquamarine;
        }
        p {
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="principal">
        <div class="secundaria">
            <?php
            $num = $_GET["sel"];
            echo "<h1>Tabuada do $num</h1>";
            for ($i=1; $i < 10; $i++) { 
                echo "<p>$num X $i = ". ($i *$num) ."</p>";
            }
            ?>
        </div>
        <div>
            <a class="btn" href="javascript:history.go(-1)">Voltar</a>
        </div>
    </div>
</body>

</html>