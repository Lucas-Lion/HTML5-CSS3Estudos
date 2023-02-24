    const opcaoSim = document.getElementById('opcao-sim')
    const resposta = document.getElementById('resposta-texto')

    // RUN 0
        
    opcaoSim.addEventListener('change', function() {
        if (opcaoSim.checked) {
        resposta.required = true
        } else {
        resposta.removeAttribute('required')
        }
    })

    const opcaoNao = document.getElementById('opcao-nao')
              
    opcaoNao.addEventListener('change', function() {
        if (opcaoNao.checked) {
        resposta.removeAttribute('required')
        }
    })

    const opcaoSim1 = document.getElementById('opcao-sim1')
    const resposta1 = document.getElementById('resposta-texto1')

    // RUN 1

    opcaoSim1.addEventListener('change', function() {
        if (opcaoSim1.checked) {
        resposta1.required = true
        } else {
        resposta1.removeAttribute('required')
        }
    })

    const opcaoNao1 = document.getElementById('opcao-nao1')
              
    opcaoNao1.addEventListener('change', function() {
        if (opcaoNao1.checked) {
        resposta1.removeAttribute('required')
        }
    })

    // RUN 2

    const opcaoSim2 = document.getElementById('opcao-sim2')
    const resposta2 = document.getElementById('resposta-texto2')

    opcaoSim2.addEventListener('change', function() {
        if (opcaoSim2.checked) {
        resposta2.required = true
        } else {
        resposta2.removeAttribute('required')
        }
    })

    const opcaoNao2 = document.getElementById('opcao-nao2')
              
    opcaoNao2.addEventListener('change', function() {
        if (opcaoNao2.checked) {
        resposta2.removeAttribute('required')
        }
    })

    // RUN 3

    const opcaoSim3 = document.getElementById('opcao-sim3')
    const resposta3 = document.getElementById('resposta-texto3')

    opcaoSim3.addEventListener('change', function() {
        if (opcaoSim3.checked) {
        resposta3.required = true
        } else {
        resposta3.removeAttribute('required')
        }
    })

    const opcaoNao3 = document.getElementById('opcao-nao3')
              
    opcaoNao3.addEventListener('change', function() {
        if (opcaoNao3.checked) {
        resposta3.removeAttribute('required')
        }
    })