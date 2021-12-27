function clucro() {
  const custofrete = document.querySelector("#custofrete");
  const mlucro = document.querySelector("#margemlucro");
  const valorCusto = custofrete.value;
  const valorMlucro = mlucro.value;
  const result = (valorCusto * valorMlucro) / 100;
  const vLucro = "R$" + result.toFixed(2);
  document.querySelector("#lucro").value = vLucro;
}

function cseguro() {
  const txseguro = document.querySelector("#taxaseguro");
  const valCarga = document.querySelector("#valorcarga");
  const taxaSeguro = txseguro.value;
  const valorCarga = valCarga.value;
  const calcseguro = (valorCarga * taxaSeguro) / 100;
  const vSeguro = "R$" + calcseguro.toFixed(2);
  document.querySelector("#valorseguro").value = vSeguro;
}
