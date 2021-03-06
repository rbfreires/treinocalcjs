<?php

include('includes/header.php');

?>

<div class="content container-fluid">
    <div class="container box">
        <h1 class="tituloform">Cálculo de Fretes</h1>
        <form class="principal row g-3 form-control d-flex justify-content-between">
            <div class="mb-3 col-sm-2">
                <label for="data" class="form-label">Origem da Coleta</label>
                <input type="date" class="form-control form-control-sm" name="data" id="data" aria-describedby="helpId" placeholder="Informe a data...">
            </div>
            <div class="mb-3 col-sm-5">
                <label for="origem" class="form-label">Origem da Coleta</label>
                <input type="text" class="form-control form-control-sm" name="origem" id="origem" aria-describedby="helpId" placeholder="Informe a origem da coleta...">
            </div>
            <div class="mb-3 col-sm-5">
                <label for="destino" class="form-label">Destino da Coleta</label>
                <input type="text" class="form-control form-control-sm" name="destino" id="destino" aria-describedby="helpId" placeholder="Informe o destino da entrega...">
            </div>
            <div class="mb-3 col-sm-6">
                <label for="carreteiro" class="form-label">Motorista (Carreteiro)</label>
                <input type="text" class="form-control form-control-sm" name="carreteiro" id="carreteiro" aria-describedby="helpId" placeholder="Informe o motorista que cotou o frete...">
            </div>
            <form class="principal row g-3 form-control d-flex justify-content-between">
                <div class="mb-3 col-sm-2">
                    <label for="custofrete" class="form-label">Custo Frete</label>
                    <input type="text" class="custofrete form-control form-control-sm" name="custofrete" id="custofrete" aria-describedby="helpId" placeholder="Informe o custo do frete...">
                </div>
                <div class="mb-3 col-sm-2">
                    <label for="margemlucro" class="form-label">Margem de Lucro</label>
                    <input type="text" class="form-control form-control-sm" name="margemlucro" id="margemlucro" aria-describedby="helpId" placeholder="Informe a margem de lucro..." onkeyup="clucro()" required>
                </div>
                <div class="mb-3 col-sm-2">
                    <label for="lucro" class="form-label">Lucro</label>
                    <input type="text" class="form-control form-control-sm" name="lucro" id="lucro" aria-describedby="helpId" placeholder="Valor do lucro..." readonly>
                </div>
                <div class="mb-3 col-sm-2">
                    <label for="custopedagio" class="form-label">Pedágios</label>
                    <input type="text" class="form-control form-control-sm" name="custopedagio" id="custopedagio" aria-describedby="helpId" placeholder="Informe os pedágios...">
                </div>
                <div class="mb-3 col-sm-2">
                    <label for="cargadescarga" class="form-label">Carga/Descarga</label>
                    <input type="text" class="form-control form-control-sm" name="cargadescarga" id="cargadescarga" aria-describedby="helpId" placeholder="Informe a carga/descarga...">
                </div>
                <div class="mb-3 col-sm-2">
                    <label for="valorcarga" class="form-label">Valor da mercadoria</label>
                    <input type="text" class="form-control form-control-sm" name="valorcarga" id="valorcarga" aria-describedby="helpId" placeholder="Informe o valor da mercadoria..." required>
                </div>
                <div class="mb-3 col-sm-2">
                    <label for="taxaseguro" class="form-label">Taxa de Seguro</label>
                    <input type="text" class="form-control form-control-sm" name="taxaseguro" id="taxaseguro" aria-describedby="helpId" placeholder="Informe a taxa de seguro..." onkeyup="cseguro()" required>
                </div>
                <div class="mb-3 col-sm-4">
                    <label for="valorseguro" class="form-label">Valor do Seguro</label>
                    <input type="text" class="form-control form-control-sm" name="valorseguro" id="valorseguro" aria-describedby="helpId" placeholder="Valor do seguro" readonly>
                </div>
                <div class="mb-3 col-sm-4">
                    <label for="taxaimposto" class="form-label">Alíquota Imposto</label>
                    <input type="text" class="form-control form-control-sm" name="taxaimposto" id="taxaimposto" aria-describedby="helpId" placeholder="Informe a taxa de imposto..." required>
                </div>
                <div class="mb-3 col-sm-4">
                    <label for="valorimposto" class="form-label">Valor Imposto</label>
                    <input type="text" class="form-control form-control-sm" name="valorimposto" id="valorimposto" aria-describedby="helpId" placeholder="Valor imposto..." readonly>
                </div>
                <div class="mb-3 col-sm-4">
                    <label for="totalservico" class="form-label">Total dos Serviços</label>
                    <input type="text" class="form-control form-control-sm" name="totalservico" id="totalservico" aria-describedby="helpId" placeholder="Valor total..." readonly>
                </div>
                <div class="botao">
                    <button type="button" class="btn calc btn-outline-primary" id="calculo" onclick="cimposto()">Calcular Frete</button>
                    <button class="btn btn-outline-primary">Limpar</button>
                </div>
            </form>
    </div>
</div>
<?php

include('includes/footer.php');

?>
