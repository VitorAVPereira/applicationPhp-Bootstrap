<h1 class="fw-bolder fs-2 text-center mb-4 text-info">Cadastre um novo veículo</h1>
<?php 
    $sql = "SELECT * FROM veiculos WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="crud" value="update">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3 d-grid gap-2 col-6 mx-auto">
        <label>Modelo do veículo</label>
        <input type="text" name="modelo" class="form-control border-info" value="<?php print $row->modelo; ?>"/>
    </div>
    <div class="mb-3 d-grid gap-2 col-6 mx-auto">
        <label>Peso</label>
        <input type="text" name="peso" class="form-control border-info" value="<?php print $row->peso; ?>" />
    </div>
    <div class="mb-3 d-grid gap-2 col-6 mx-auto">
        <label>Altura</label>
        <input type="text" name="altura" class="form-control border-info" value="<?php print $row->altura; ?>" />
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" class="btn btn-outline-info fw-bold">Enviar</button>
    </div>
</form>
