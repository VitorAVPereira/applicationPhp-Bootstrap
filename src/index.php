<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <title>Veículos</title>
  </head>
  <body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-info bg-info">
        <div class="container-fluid">
            <a class="navbar-brand text-capitalize fs-3 fw-bolder text-dark" href="index.php">Veículos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link fs-5 text-dark" aria-current="page" href="index.php">Início</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link fs-5 text-dark" href="?page=novo">Novo veículo</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link fs-5 text-dark" href="?page=listar">Veículos disponiveis</a>
                    </li>
                    
                </ul>
                <img src='../images/219793.png' width="55" height="50"> 
            </div>
        </div>
    </nav>
    </div>
    
    <div class="container">
      <div class="row">
        <div class="col mt-5">
           <?php 
              require './database/config.php';
              require './routes/routes.php';
            ?>
        </div>
      </div>
    </div>
    <div>
      <a href='?page=novo'>
        <img src="../images/volante.png" width="300" height="350" class="mt-5 mb-3 d-grid gap-2 col-3 mx-auto">
      </a>
      </div>
    <script src="../js/bootstrap.bundle.min.js"></script>

  </body>
</html>