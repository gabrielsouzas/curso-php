<?php
  
function buscar_carros(){
  // conecta ao banco de dados
  $con_string = "host=localhost port=5432 dbname=estudos user=postgres password=pingaiada";
  $con = pg_connect($con_string) or die ("Nao foi possivel estabelecer uma conexao com o servidor PostGreSQL");
  // cria a instrução SQL que vai selecionar os dados
  $query = "SELECT * FROM carro;";
  // executa a query
  $dados = pg_query($con, $query) or die(pg_last_error());
  // transforma os dados em um array
  //$linha = pg_fetch_assoc($dados);
  // calcula quantos dados retornaram
  //$total = pg_num_rows($dados);

  return $dados;
}

// tira o resultado da busca da memória
//pg_free_result($dados);
?>