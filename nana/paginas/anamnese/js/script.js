const opcaoSim = document.getElementById('opcao-sim')
const resposta = document.getElementById('resposta-texto')

opcaoSim.addEventListener('change', function() {
  if (opcaoSim.checked) {
    resposta.required = true
  } else {
    resposta.required = false
  }
})