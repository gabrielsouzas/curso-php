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
        span {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="principal">
        <?php 
            $est = $_GET["sel"];
            echo "O estado selecionado é o $est!";
            echo "<br>Que fica localizado na região <span>". sel_reg($est) ."</span>";

            function sel_reg($e){
                $ret = "";
                switch ($e) {
                    case "Acre (AC)":
                    case "Amazonas (AM)":
                    case "Roraima (RR)":
                    case "Rondônia (RO)":
                    case "Pará (PA)":
                    case "Tocantins (TO)":
                    case "Amapá (AP)":
                        $ret = "Norte";
                        break;
                    case "Alagoas (AL)":
                    case "Bahia (BA)":
                    case "Ceará (CE)":
                    case "Maranhão (MA)":
                    case "Piauí (PI)":
                    case "Paraíba (PB)":
                    case "Rio Grande do Norte (RN)":
                    case "Sergipe (SE)":
                    case "Pernambuco (PE)":
                        $ret = "Nordeste";
                        break;
                    case "Distrito Federal (DF)":
                    case "Mato Grosso (MT)":
                    case "Goiás (GO)":
                    case "Mato Grosso do Sul (MS)":
                        $ret = "Centro-Oeste";
                        break;
                    case "São Paulo (SP)":
                    case "Espírito Santo (ES)":
                    case "Minas Gerais (MG)":
                    case "Rio de Janeiro (RJ)":
                        $ret = "Sudeste";
                        break;
                    case "Paraná (PR)":
                    case "Rio Grande do Sul (RS)":
                    case "Santa Catarina (SC)":
                        $ret = "Sul";
                        break;
                    default:
                        $ret = "Erro!";
                        break;
                }
                return $ret;
            }
        ?>
        <div>
        <a class="btn" href="javascript:history.go(-1)">Voltar</a>
        </div>
    </div>
</body>
</html>