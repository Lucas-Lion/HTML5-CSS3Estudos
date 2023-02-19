const I_PESQUISA = document.getElementById('ipesquisa');
const TABELA = document.getElementById('tabela');

I_PESQUISA.addEventListener('keyup', () => { // evento de clicar e tirar o dedo
    let expressao = I_PESQUISA.value.toLowerCase(); // para captrurar o valor que usúario digitar

    if (expressao.length === 1) { //se o usuário digitar apenas uma letra, ele não irá buscar
        return;
    }

    let linhas = TABELA.getElementsByTagName('tr'); // ele vai filtrar os dados da tr

    for (let posicao in linhas) { // para percorrer as linhas e conseguir pegar uma posição e trabalhar nela
        if (true === isNaN(posicao)) { // se a posição não for numérica, ele vai pular e continuar o "for"
            continue;
        }

        let conteudoDaLinha = linhas[posicao].innerHTML.toLowerCase(); // recupera o conteúdo de cada uma das linhas de cada rodada do "for"

        if(true === conteudoDaLinha.includes(expressao)) { // se dentro do conteúdo da linha incluir a expressão que o usuário digitar ele irá:
            linhas[posicao].style.display = ''; // irão se manter visíveis
        } else {
            linhas[posicao].style.display = 'none'; // irão se manter invisíveis
        }
    }
});