<h1 class="mt-5 fs-1 fw-bolder text-info text-center">Veículos disponiveis:</h1>
<?php
    $sql = "SELECT * from veiculos";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped'>";

            print "<tr>";
            print "<th>#</th>";
            print "<th>Tipo</th>";
            print "<th>Modelo</th>";
            print "<th>Peso</th>";
            print "<th>Altura</th>";
            print "<th>Editar</th>";
            print "<th>Excluir</th>";
            print "</tr>";
        //recebe todos os objetos do resulto e jogar na variavel 'row'
            while($row = $res->fetch_object()){
                print "<tr>";
                print "<td>".$row->id."</td>";
                print "<td>".$row->tipo."</td>";
                print "<td>".$row->modelo."</td>";
                print "<td>".$row->peso." Kg</td>";
                print "<td>".$row->altura." m</td>";
                print "<td>
                        <button onclick=\"location.href='?page=editar&id=".$row->id."'\" class='btn btn-success'>Editar</button>
                        </td>";
                print "<td>
                        <button class='btn btn-danger' onclick=\"if(confirm('Deseja realmente excluir?')){location.href='?page=salvar&crud=delete&id=".$row->id."';}else{false;}\">Exluir</button>
                        </td>";
                print "</tr>";
            }
            print "</table>";
    }else{
        print "<a href=?page=novo><p class='fs-3 text-center fw-bold text-info'>Ainda nada por aqui. <br> Cadastre novos veículos!</p></a>";
    }
?>