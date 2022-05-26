<?php 

// Inclui a conexão com o Banco
include_once "../conexao.php";

// Paginação em PHP e Javascript (recebe um parametro numerico pagina atraves do get)
$pagina = filter_input(INPUT_GET, "pagina", FILTER_SANITIZE_NUMBER_INT);

if (!empty($pagina)) {
    
    // Calcular o inicio da visualização
    $qnt_result_pg = 10; // Quantidade de registro por página
    $inicio = ($pagina * $qnt_result_pg) - $qnt_result_pg;

    // Consulta para recuperar os registros do Banco de dados
    $query = "SELECT carro_codigo, carro_marca, carro_cor, carro_aro, carro_conversivel, 
            carro_placa, carro_tipo, carro_preco, carro_motor, carro_velocidademax
    FROM carro
    ORDER BY carro_codigo DESC LIMIT $qnt_result_pg OFFSET $inicio;"; 

    $result_carros = $connpdo->prepare($query);
    $result_carros->execute();

    //Verifica o retorno do banco
    if (($result_carros) and ($result_carros->rowCount() != 0)) {
        $dados = "<div class='table-responsive'>";
        $dados .= "<table class='table table-secondary table-striped table-sm table-hover'>";
        // .= concatenar strings em PHP
        $dados .= "<thead>";
        $dados .= "<tr>";

        $dados .= "<th scope='col'>Código</th>";
        $dados .= "<th scope='col'>Marca</th>";
        $dados .= "<th scope='col'>Cor</th>";
        $dados .= "<th scope='col'>Aro</th>";
        $dados .= "<th scope='col'>Conversivel</th>";
        $dados .= "<th scope='col'>Placa</th>";
        $dados .= "<th scope='col'>Tipo</th>";
        $dados .= "<th scope='col'>Preço</th>";
        $dados .= "<th scope='col'>Motor</th>";
        $dados .= "<th scope='col'>Velocidade Max.</th>";
        $dados .= "<th scope='col'>Visualizar</th>";

        $dados .= "</tr>";
        $dados .= "</thead>";
        $dados .= "<tbody>";
        // Loop para pegar os registros do banco
        // Vai ler o que esta dentro de $result_carros
        // Para ler utiliza o fetch
        // Para resolução de escopo PDO:: (para a conexão que é em PDO)
        // FETCH_ASSOC para imprimir pelo nome da coluna
        while($linha = $result_carros->fetch(PDO::FETCH_ASSOC)){
            // Cria variaveis dos campos da tabela
            extract($linha);
            $dados .= "<tr>";

            $dados .= "<td scope='col'>$carro_codigo</td>";
            $dados .= "<td scope='col'>$carro_marca</td>";
            $dados .= "<td scope='col'>$carro_cor</td>";
            $dados .= "<td scope='col'>$carro_aro</td>";
            $dados .= "<td scope='col'>$carro_conversivel</td>";
            $dados .= "<td scope='col'>$carro_placa</td>";
            $dados .= "<td scope='col'>$carro_tipo</td>";
            $dados .= "<td scope='col'>$carro_preco</td>";
            $dados .= "<td scope='col'>$carro_motor</td>";
            $dados .= "<td scope='col'>$carro_velocidademax</td>";
            $dados .= "<td> 
            <form id='visualizar'>
            <input class='btn btn-outline-secondary' id='btn_tabela' type='submit' name='carro_selec' value='Visualizar'>
            </form>
            </td>";

            $dados .= "</tr>";
        }
        $dados .= "</tbody>";
        $dados .= "</table>";
        $dados .= "</div>";

        // Paginação = Contando a quantidade de linhas
        $query_pg = "SELECT COUNT(carro_codigo) AS num_result FROM carro;";
        $result_pg = $connpdo->prepare($query_pg);
        $result_pg->execute();
        $row_pg = $result_pg->fetch(PDO::FETCH_ASSOC);

        //Quantidade de páginas
        // Pega a qtde de linhas atraves do alias num_result
        $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

        $dados .= "<nav aria-label='Page navigation example'>
        <ul class='pagination justify-content-center'>
          <li class='page-item disabled'>
            <a class='page-link'>Anterior</a>
          </li>
          <li class='page-item'><a class='page-link' href='#'>1</a></li>
          <li class='page-item'><a class='page-link' href='#'>2</a></li>
          <li class='page-item'><a class='page-link' href='#'>3</a></li>
          <li class='page-item'>
            <a class='page-link' href='#'>Próxima</a>
          </li>
        </ul>
      </nav>";
        
        $retorna = ['status' => true, 'dados' => $dados];
    } else {
        $retorna = ['status' => false, 'msg' => "<p style='color:'#f00'>Erro: Nenhum carro encontrado!</p>"];
    }

    // Converte a mensagem para Objeto e retorna para o Javascript
    echo json_encode($retorna);

} else {
    echo "<div class='alert alert-danger' role='alert'>
    Nenhum carro encontrado!
  </div>";
}

?>