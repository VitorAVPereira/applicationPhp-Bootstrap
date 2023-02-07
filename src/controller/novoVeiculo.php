
<h1 class="fw-bolder fs-2 text-center mb-4 text-info">Cadastre um novo veículo</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="crud" value="create">
    <div class="form-floating mb-3 d-grid gap-2 col-6 mx-auto">
        <input type="text" name="modelo" class="form-control border-info bg-light" id="floatCaminhao" placeholder="Modelo do veículo"/>
        <label for="floatCaminhao">Modelo do veículo</label>
    </div>
    <div class="form-floating mb-3 d-grid gap-2 col-6 mx-auto">
        <input type="text" name="peso" class="form-control border-info bg-light" id="floatPeso" placeholder="Peso" />
        <label for="floatPeso">Peso</label>
    </div>
    <div class="form-floating mb-3 d-grid gap-2 col-6 mx-auto">
        <input type="text" name="altura" class="form-control border-info bg-light" id="floatAltura" placeholder="Altura" />
        <label for="floatAltura">Altura</label>
    </div>
    <div class="mb-3 d-grid gap-2 col-6 mx-auto">
        <h1 class="fs-3 text-info fw-bold">Qual o tipo do veículo?</h1>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipo" id="inlineRadio1" value="caminhao">
            <label class="form-check-label" for="inlineRadio1">Caminhão</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipo" id="inlineRadio2" value="trator">
            <label class="form-check-label" for="inlineRadio2">Trator</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipo" id="inlineRadio1" value="outro" checked>
            <label class="form-check-label" for="inlineRadio1">Outro</label>
        </div>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" class="btn btn-outline-info fw-bold border-info">Enviar</button>
    </div>
</form>
