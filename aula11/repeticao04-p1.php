<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetição em PHP - Tabuada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        div{
            margin-top: 9px;
            margin-left: 9px;
        }

        p {
            margin: 5px;
        }

        input.btn {
            color: white;
            background-color: rgba(40, 47, 82, 0.829);
            margin-top: 10px;
            margin-left: 5px;
        }

    </style>
</head>
<body>
    <div>
        <form action="repeticao04.php" method="get">
            Número: <select name="sel" >
                <?php 
                    for ($i=0; $i <= 10; $i++) { 
                        echo "<option>$i</option>";
                    }
                ?>
                <!--<option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>-->
            </select>
            <input class="btn" type="submit" value="Calcular Tabuada">
        </form>
    </div>
</body>
</html>