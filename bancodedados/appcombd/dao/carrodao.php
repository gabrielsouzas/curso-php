<?php 
    include "./conexao.php";
    include_once "./bean/carro.php";

    function alterar($carro_salvar){
        $con = conectarbdpdo();

        $statement = $con->prepare("INSERT INTO carro(
            carro_codigo, carro_marca, carro_cor, carro_aro, carro_conversivel, 
            carro_placa, carro_tipo, carro_preco, carro_motor, carro_velocidademax)
          VALUES (:carro_codigo, :carro_marca, :carro_cor, :carro_aro, :carro_conversivel, 
            :carro_placa, :carro_tipo, :carro_preco, :carro_motor, :carro_velocidademax);");


        $statement->bindParam(':carro_codigo', $carro_salvar['carro_codigo']);
        $statement->bindParam(':carro_marca', $carro_salvar['carro_marca']);
        $statement->bindParam(':carro_cor', $carro_salvar['carro_cor']);
        $statement->bindParam(':carro_aro', $carro_salvar['carro_aro']);
        $statement->bindParam(':carro_conversivel', $carro_salvar['carro_conversivel']);
        $statement->bindParam(':carro_placa', $carro_salvar['carro_placa']);
        $statement->bindParam(':carro_tipo', $carro_salvar['carro_tipo']);
        $statement->bindParam(':carro_preco', $carro_salvar['carro_preco']);
        $statement->bindParam(':carro_motor', $carro_salvar['carro_motor']);
        $statement->bindParam(':carro_velocidademax', $carro_salvar['carro_velocidademax']);

        if ($statement->execute()) {
          echo "New record created successfully";
        } else {
          echo "Unable to create record";
        }

        pg_close($con);
    }

    function buscar_por_atributo($atributo, $conteudo){
        $con = conectarbd();
        $query = "SELECT * FROM carro WHERE $atributo LIKE '$conteudo';";
        $carros = pg_query($con, $query) or die(pg_last_error());

        return $carros;

    }

    function selecionar($codigo){
        $con = conectarbd();
        $query = "SELECT * FROM carro WHERE carro_codigo = $codigo;";
        $retorno = pg_query($con, $query) or die(pg_last_error());
        $dados = pg_fetch_assoc($retorno);

        $carro = new Carro();
        $carro->setCodigo($dados['carro_codigo']);
        $carro->setMarca($dados['carro_marca']);
        $carro->setCor($dados['carro_cor']);
        $carro->setAro($dados['carro_aro']);
        $carro->setConversivel($dados['carro_conversivel']);
        $carro->setPlaca($dados['carro_placa']);
        $carro->setTipo($dados['carro_tipo']);
        $carro->setPreco($dados['carro_preco']);
        $carro->setMotor($dados['carro_motor']);
        $carro->setVelocidademax($dados['carro_velocidademax']);

        return $carro;
    }
?>