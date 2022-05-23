<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Venda Automotiva</title>
    
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">    
    
    <!-- Estilo customizado para esse template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
  <?php
      include "conexao.php";
    /* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
    simplesmente não fazer o login e digitar na barra de endereço do seu navegador
    o caminho para a página principal do site (sistema), burlando assim a obrigação de
    fazer um login, com isso se ele não estiver feito o login não será criado a session,
    então ao verificar que a session não existe a página redireciona o mesmo
    para a index.php.*/
    session_start();
    if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
    {
      header('location:index.php');
      }

    $logado = $_SESSION['usuario'];
?>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Venda de Carros</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Buscar" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logoff.php">Sair</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home" class="align-text-bottom"></span>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file" class="align-text-bottom"></span>
              Ordens
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Produtos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users" class="align-text-bottom"></span>
              Clientes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Relatórios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers" class="align-text-bottom"></span>
              Integrações
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Relatórios Salvos</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Mês atual
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Última Semana
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Engajamento Social
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Venda de Fim de Ano
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Carros</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Compartilhar</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Exportar</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            Esta Semana
          </button>
        </div>
      </div>

      <!--<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>-->

      
      <div class="table-responsive">
        <table class="table table-secondary table-striped table-sm">
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
                

                $dados = buscar_carros();
                // transforma os dados em um array
                $linha = pg_fetch_assoc($dados);
                // calcula quantos dados retornaram
                $total = pg_num_rows($dados);

	            // se o número de resultados for maior que zero, mostra os dados
	            if($total > 0) {
		        // inicia o loop que vai mostrar todos os dados
		        do {
            ?>
            <tr>
                <td><a href="#" class="linktabela"><?=$linha['carro_codigo']?></a></td>
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
      </div>
    </main>
  </div>
</div>


    <script src="js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
      <script src="js/dashboard.js"></script>
  </body>
</html>
