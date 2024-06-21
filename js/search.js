const inputBusca = document.getElementById('input-busca');
const tabelaFuncionarios = document.getElementById('tabela');

inputBusca.addEventListener('keyup', () => {
    let expressao = inputBusca.value;

    let linhas = tabelaFuncionarios.getElementsByTagName('tr');

    console.log(linhas)
    for (let posicao in linhas){
        if (true === isNaN(posicao)) {
            continue;
        }

        let conteudoDalinha = linhas[posicao].innerHTML;

        if (true === conteudoDalinha.includes(expressao)) {
            linhas[posicao].style.display = '';
        } else {
            linhas[posicao].style.display = 'none';
        }
    }
});