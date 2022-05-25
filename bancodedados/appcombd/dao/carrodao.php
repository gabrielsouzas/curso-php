<?php 
    include "./conexao.php";
    include_once "./bean/carro.php";

    function inserir($carro){
        $con = conectarbd();


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