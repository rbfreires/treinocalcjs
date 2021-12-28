// declarações globais de variáveis
const custofrete = document.querySelector("#custofrete");
const mlucro = document.querySelector("#margemlucro");
const txseguro = document.querySelector("#taxaseguro");
const vLucro = document.querySelector("#lucro");
const vSeguro = document.querySelector("#valorseguro");
const valCarga = document.querySelector("#valorcarga");
const tximposto = document.querySelector("#taxaimposto");
const valPedagio = document.querySelector("#custopedagio");
const valCargaDescarga = document.querySelector("#cargadescarga");
const processa = document.querySelector("#calculo");

// função clucro
function clucro() {
  if (custofrete.value == "") {
    alert("Informar o custo do frete.");
    custofrete.focus();
    return;
  }
  const valorCusto = custofrete.value;
  const valorMlucro = mlucro.value;
  const result = (valorCusto * valorMlucro) / 100;
  const vLucro = result;
  document.querySelector("#lucro").value = vLucro;
}

// função  cseguro
function cseguro() {
  const taxaSeguro = txseguro.value;
  const valorCarga = valCarga.value;
  const calcseguro = (valorCarga * taxaSeguro) / 100;
  const vSeguro = calcseguro;
  document.querySelector("#valorseguro").value = vSeguro;
}

// função cimposto
function cimposto() {
  if (custofrete.value == "") {
    alert("Informar o custo do frete.");
    custofrete.focus();
    return;
  }

  if (valPedagio.value == "") {
    valPedagio.value = 0;
  }
  if (valCargaDescarga.value == "") {
    valCargaDescarga.value = 0;
  }

  const VcustoFrete = custofrete.value;
  const Vlucro = vLucro.value;
  const Vseguro = vSeguro.value;
  const Vpedagio = valPedagio.value;
  const VcargaEdescarga = valCargaDescarga.value;
  const TXimposto = tximposto.value;

  const soma1 =
    parseFloat(VcustoFrete) +
    parseFloat(Vlucro) +
    parseFloat(Vpedagio) +
    parseFloat(VcargaEdescarga) +
    parseFloat(Vseguro);

  const Vimposto = (soma1 * TXimposto) / 100;

  const TotServ = parseFloat(soma1) + parseFloat(Vimposto);

  document.querySelector("#valorimposto").value = Vimposto.toLocaleString(
    "pt-br",
    { style: "currency", currency: "BRL" }
  );
  document.querySelector("#totalservico").value = TotServ.toLocaleString(
    "pt-br",
    { style: "currency", currency: "BRL" }
  );
}
