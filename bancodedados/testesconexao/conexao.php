<?php
// definições de host, database, usuário e senha
$servidor = "localhost";
$db   = "estudos";
$usuario = "5432";
$senha = "pingaiada";
// conecta ao banco de dados
$con_string = "host=localhost port=5432 dbname=estudos user=postgres password=pingaiada";
$con = pg_connect($con_string) or die ("Nao foi possivel
  estabelecer uma conexao com o servidor PostGreSQL");
// cria a instrução SQL que vai selecionar os dados
$query = "SELECT * FROM carro;";
// executa a query
$dados = pg_query($con, $query) or die(pg_last_error());
// transforma os dados em um array
$linha = pg_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = pg_num_rows($dados);
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Dados em PHP - PostgreSQL</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>


<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Marca</th>
	  <th scope="col">Cor</th>
	  <th scope="col">Aro</th>
	  <th scope="col">Conversivel</th>
	  <th scope="col">Placa</th>
	  <th scope="col">Tipo</th>
	  <th scope="col">Preço</th>
	  <th scope="col">Motor</th>
	  <th scope="col">Velocidade Max.</th>
    </tr>
  </thead>
  <tbody>
  <?php
	// se o número de resultados for maior que zero, mostra os dados
	if($total > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {
?>
    <tr>
      <td><?=$linha['carro_codigo']?></td>
      <td><?=$linha['carro_marca']?></td>
      <td><?=$linha['carro_cor']?></td>
      <td><?=$linha['carro_aro']?></td>
      <td><?=$linha['carro_conversivel']?></td>
      <td><?=$linha['carro_placa']?></td>
      <td><?=$linha['carro_tipo']?></td>
      <td><?=$linha['carro_preco']?></td>
      <td><?=$linha['carro_motor']?></td>
      <td><?=$linha['carro_velocidademax']?></td>
    </tr>
<?php
	// finaliza o loop que vai mostrar os dados
	}while($linha = pg_fetch_assoc($dados));
// fim do if
	}
?>
  </tbody>
</table>



</body>
</html>
<?php
// tira o resultado da busca da memória
pg_free_result($dados);
?>