<?php 
    switch(@$_REQUEST["page"]){
        case "novo":
          include("./controller/novoVeiculo.php");
        break;
        case "listar":
          include("./controller/listarVeiculos.php");
        break;
        case "editar":
          include('./controller/editarVeiculo.php');
        break;
        case "salvar":
          include("./controller/salvarVeiculo.php");
        break;
        default:
          print "<div class='container'>
                  <h1 class='mt-2 fs-1 fw-bolder text-info text-center'>Cadastre novos veículos e confira os disponiveis!</h1>
                </div>";
      }