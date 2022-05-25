<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manutenção de Carros</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .divform {
            margin: 5px;
            padding: 5px;
        }
        #divcarro {
            margin: 10px;
            padding: 10px;
            border: 1px solid black;
            border-radius: 8px;
            max-width: 350px;
        }

        input {
            float: right;
            overflow-x: auto;

        }

        h2 {
            background-color: gray;
            color: white;
            padding: 5px;
        }

        .btn {
            margin: 10px;
            background-color: gray;
            color: white;
        }

        label {
            font-weight: bold;
        }

        #btnsalvar {
            margin: 30px;
        }
        

    </style>
</head>

<body>
    
        <h2>Manutenção de Carros</h2>

        <?php
            include "/bean/carro.php";
            include "/dao/carrodao.php";

            $carro = new Carro();
            $carro = selecionar($_GET["carro_selec"]); /*$_GET($carro_selec)*/

        ?>

    <div id="divcarro">
        <form action="">
            <div class="divform">
                <label for="lbl" class="label">Código:</label>
                <input type="text" class="text" value="<?=$carro->getCodigo() ?>">
            </div>
            <div class="divform">
                <label for="lbl" class="label">Marca:</label>
                <input type="text" class="text" value="<?=$carro->getMarca() ?>">
            </div>
            <div class="divform">
                <label for="lbl" class="label">Cor:</label>
                <input type="text" class="text" value="<?=$carro->getCor() ?>">
            </div>
            <div class="divform">
                <label for="lbl" class="label">Aro:</label>
                <input type="text" class="text" value="<?=$carro->getAro() ?>">
            </div>
            <div class="divform">
                <label for="lbl" class="label">Conversível:</label>
                <input type="text" class="text" value="<?=$carro->getConversivel() ?>">
            </div>
            <div class="divform">
                <label for="lbl" class="label">Placa:</label>
                <input type="text" class="text" value="<?=$carro->getPlaca() ?>">
            </div>
            <div class="divform">
                <label for="lbl" class="label">Tipo:</label>
                <input type="text" class="text" value="<?=$carro->getTipo() ?>">
            </div>
            <div class="divform">
                <label for="lbl" class="label">Preço:</label>
                <input type="text" class="text" value="<?=$carro->getPreco() ?>">
            </div>
            <div class="divform">
                <label for="lbl" class="label">Motor:</label>
                <input type="text" class="text" value="<?=$carro->getMotor() ?>">
            </div>
            <div class="divform">
                <label for="lbl" class="label">Vel. Max:</label>
                <input type="text" class="text" value="<?=$carro->getVelocidademax() ?>">
            </div>
            <input class="btn" id="btnsalvar" type="submit" value="Salvar">
        </form>
    </div>

        <div>
            <a class="btn" href="javascript:history.go(-1)">Voltar</a>
        </div>
        


</body>

</html>