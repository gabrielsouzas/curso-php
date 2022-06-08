<?php
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
$con_string = "host=localhost port=5432 dbname=estudos user=postgres password=pingaiada";
$con = pg_connect($con_string) or die ("Nao foi possivel estabelecer uma conexao com o servidor PostGreSQL");
// cria a instrução SQL que vai selecionar os dados
$query = "SELECT codigo FROM login WHERE usuario LIKE '$usuario' AND senha LIKE '$senha';";
// executa a query
$result = pg_query($con, $query) or die(pg_last_error());

/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi
bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do
resultado ele redirecionará para a página site.php ou retornara  para a página
do formulário inicial para que se possa tentar novamente realizar o login */
if(pg_num_rows ($result) > 0 )
{
$_SESSION['usuario'] = $usuario;
$_SESSION['senha'] = $senha;
header('location:index.php');
}
else{
  unset ($_SESSION['usuario']);
  unset ($_SESSION['senha']);
  header('location:login.html');

  }
?>