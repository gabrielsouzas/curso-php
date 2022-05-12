<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média em PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        * {
            margin: 5px;
        }

        strong {
            color: red;
        }
    </style>

</head>
<body>
    <?php 
        $n1 = $_GET["nota1"];
        $n2 = $_GET["nota2"];
        $media = ($n1 + $n2)/2;
        
        echo "<span>A média entre <strong>$n1</strong> e <strong>$n2</strong> é igual a <strong>$media</strong></span>";
        
        echo "<div><span>A situação do aluno é <strong>". cal_media($media) ."</strong></span></div>";

        function cal_media($med){
            if ($med > 7) {
                return "APROVADO";
            } else if ($med >= 4 || $med <= 7){
                return "RECUPERAÇÃO";
            } else {
                return "REPROVADO";
            }
        }
    ?>
    <div>
        <a href="nota01.html">Voltar</a>
    </div>
</body>
</html>