<?php
    //acessa 'crud' pelo name do inplut 'hidden' "escondido" para não passa pela url; 
    switch($_REQUEST['crud']){
        case 'create':
            $tipo = $_POST['tipo'];
            $modelo = $_POST['modelo'];
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];

            $sql = "INSERT INTO veiculos (tipo, modelo, peso, altura) VALUES ('{$tipo}', '{$modelo}', '{$peso}', '{$altura}')"; 
            //leva a conexão com o db a query;
            $res = $conn->query($sql);
            if($res == true){
                print "<script>location.href='?page=listar'</script>";
            }else{
                print "<script>alert('erro ao cadastrar')</script>";
                print "<script>location.href='?page=listar'</script>";

            }
            break;
        case 'update':
            $modelo = $_POST['modelo'];
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];

            $sql = "UPDATE veiculos SET modelo='{$modelo}', peso='{$peso}', altura='{$altura}' WHERE id=".$_REQUEST["id"]; 

            $res = $conn->query($sql);

            if($res == true){
                print "<script>location.href='?page=listar'</script>";
            }else{
                print "<script>alert('erro ao editar')</script>";
                print "<script>location.href='?page=listar'</script>";
            }
        break;
        case 'delete':
            $sql = "DELETE FROM veiculos WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res == true){
                print "<script>location.href='?page=listar'</script>";
            }else{
                print "<script>alert('erro ao excluir')</script>";
                print "<script>location.href='?page=listar'</script>";
            }
        break;
    }