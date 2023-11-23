// Obter o elemento do título
var titulo = document.querySelector(".title h1");

// Obter a data atual
var dataAtual = new Date();

// Obter o mês atual (vale a pena notar que os meses em JavaScript são baseados em zero,
// onde janeiro é 0 e dezembro é 11, então adicionamos 1 para obter o mês atual)
var mesAtual = dataAtual.getMonth() + 1;

// Atualizar o texto do título com o mês atual
titulo.innerHTML = `🎈 Aniversariantes do mês de <strong>${getNomeMes(mesAtual)}</strong> 🎈`;

// Função auxiliar para obter o nome do mês
function getNomeMes(mes) {
  var meses = [
    "janeiro",
    "fevereiro",
    "março",
    "abril",
    "maio",
    "junho",
    "julho",
    "agosto",
    "setembro",
    "outubro",
    "novembro",
    "dezembro"
  ];
  return meses[mes - 1];
}
