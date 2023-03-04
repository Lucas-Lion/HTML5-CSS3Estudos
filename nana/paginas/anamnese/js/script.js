function setRequiredStatus(input, required) {
    if (required) {
      input.setAttribute('required', true);
    } else {
      input.removeAttribute('required');
    }
  }
  
  function attachChangeListeners(opcaoSim, opcaoNao, resposta) {
    opcaoSim.addEventListener('change', function() {
      setRequiredStatus(resposta, opcaoSim.checked);
    });
    opcaoNao.addEventListener('change', function() {
      setRequiredStatus(resposta, false);
    });
  }
  
  const perguntas = [
    {simId: 'opcao-sim', naoId: 'opcao-nao', respostaId: 'resposta-texto'},
    {simId: 'opcao-sim1', naoId: 'opcao-nao1', respostaId: 'resposta-texto1'},
    {simId: 'opcao-sim2', naoId: 'opcao-nao2', respostaId: 'resposta-texto2'},
    {simId: 'opcao-sim3', naoId: 'opcao-nao3', respostaId: 'resposta-texto3'},
  ];
  
  perguntas.forEach((pergunta) => {
    const opcaoSim = document.getElementById(pergunta.simId);
    const opcaoNao = document.getElementById(pergunta.naoId);
    const resposta = document.getElementById(pergunta.respostaId);
    attachChangeListeners(opcaoSim, opcaoNao, resposta);
  });
  