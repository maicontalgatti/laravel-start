


//adc select2
/*$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});*/

$(document).ready(function() {
    // Inicializar o Select2
    $('.js-example-basic-multiple').select2();

    // Array para armazenar técnicos selecionados (ID, NOME, DATA_INICIAL, DATA_FINAL)
    let tecnicosSelecionados = [];

    // Adicionar ou remover pessoas na div ao selecionar/deselecionar na lista
    $('.js-example-basic-multiple').on('change', function() {
        // Limpar o conteúdo do array de técnicos selecionados
        tecnicosSelecionados = [];

        // Iterar sobre as opções selecionadas e adicionar objetos ao array
        $(this).find(':selected').each(function() {
            const id = $(this).val();
            const nome = $(this).text();
            tecnicosSelecionados.push({ id: id, nome: nome, dataInicial: null, dataFinal: null });
        });

        // Imprimir no console os IDs e NOMES dos técnicos selecionados
        console.log('Técnicos Selecionados:', tecnicosSelecionados);

        // Atualizar a exibição na tela
        atualizarTecnicosNaTela();
    });

    // Função para atualizar a exibição na tela com base no array tecnicosSelecionados
    function atualizarTecnicosNaTela() {
        // Limpar o conteúdo da div antes de recriar
        $('#abdfeg').empty();

        // Iterar sobre os técnicos selecionados e adicionar na tela
        tecnicosSelecionados.forEach(function(tecnico) {
            const id = tecnico.id;
            const nome = tecnico.nome;
            const dataInicial = tecnico.dataInicial ? tecnico.dataInicial.toISOString().split('T')[0] : '';
            const dataFinal = tecnico.dataFinal ? tecnico.dataFinal.toISOString().split('T')[0] : '';

            // Criar a div do técnico
            const divTecnico = $("<div class='w-full flex justify-between items-center px-4 mb-4 sm:mb-0 bg-gray-200 dark:bg-gray-700' id='cliente-" + id + "'>" +
                "<p class='text-3xl text-sm font-medium dark:text-gray-300 text-gray-900'>" + nome + "</p>" +
                "<div class='flex items-center'>" +
                "<input type='date' class='data-inicial' value='" + dataInicial + "'>" +
                "<span class='mx-2'>-</span>" +
                "<input type='date' class='data-final' value='" + dataFinal + "'>" +
                "<input type='button' class='btnTrocaCor' value='Gera calendário' onclick='trocaCor(this.parentNode.parentNode)'>" +
                "</div></div>");

            // Adicionar a div do técnico à div principal
            $('#abdfeg').append(divTecnico);
        });
    }



    // Função para calcular a diferença em dias entre duas datas
    function calcularDiferencaDias(dataInicial, dataFinal) {
        if (dataInicial && dataFinal) {
            const diffEmMilissegundos = Math.abs(dataFinal - dataInicial);
            const diffEmDias = Math.ceil(diffEmMilissegundos / (1000 * 60 * 60 * 24));
            return diffEmDias;
        }
        return null;
    }


// Função para criar uma tabela com as colunas específicas
    function criarTabela(diasDiferenca) {
        const tabelaExistente = $('#tabelaTecnicos');
        if (tabelaExistente.length) {
            return tabelaExistente;
        }

        const container = $('<div>'); // Criar um contêiner para a tabela e o botão
        container.attr('id', 'tabelaTecnicos'); // Adicionar um ID à tabela para identificação

        const tabela = $('<table>').addClass('w-auto text-center border-collapse border  bg-gray-100 dark:bg-gray-700');


        // Cabeçalho da tabela
        const cabecalho = $('<thead>');
        const cabecalhoLinha = $('<tr>');
        const colunas = ['Data', 'Feriado', 'H Início', 'H Fim', 'Total', 'H Início', 'H Fim', 'Total', 'H Início', 'H Fim', 'Total', 'H Totais', 'H Norm', 'H 50%', 'H 100%', 'H Adicionais/Noturnas'];

        colunas.forEach(coluna => {
            cabecalhoLinha.append($('<th>').text(coluna).addClass('border border-gray-400'));
        });

        cabecalho.append(cabecalhoLinha);
        tabela.append(cabecalho);

        // Corpo da tabela
        const corpo = $('<tbody>');
        for (let i = 1; i <= diasDiferenca; i++) {
            const linha = $('<tr>');
            for (let j = 0; j < colunas.length; j++) {
                // Preencher a primeira coluna com os dias
                if (j === 0) {
                    linha.append($('<td>').text('Dia ' + i).addClass('border border-gray-400'));
                } else if (j === 1) {
                    // Adicionar select para a coluna 'Feriado'
                    const selectFeriado = $('<select>').addClass('border border-gray-400 w-full').css('padding', '0');
                    selectFeriado.append($('<option>').text('Sim').val('sim')).append($('<option>').text('Não').val('nao'));
                    linha.append($('<td>').append(selectFeriado).addClass('border border-gray-400'));
                } else {
                    // Adicionar input para as demais colunas
                    const inputHora = $('<input>').addClass('border border-gray-400 w-full').attr('type', 'time').css('padding', '0');
                    linha.append($('<td>').append(inputHora).addClass('border border-gray-400'));
                }
            }
            corpo.append(linha);
        }
        tabela.append(corpo);

        const botaoSalvar = $('<input>').attr({
            type: 'button',
            value: 'Salvar',
            id: 'btnSalvar'
        }).addClass('mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded');

        // Adicionar evento de clique ao botão "Salvar"
        botaoSalvar.click(function () {
            // Lógica de envio dos dados para o servidor
            console.log('Dados enviados para o servidor.');
        })
        container.append(tabela, botaoSalvar); // Adicionar tabela e botão ao contêiner
        return container; // Retornar o contêiner em vez da tabela
    }


    // Função para atualizar datas e calcular a diferença
    window.trocaCor = function(element) {
        const tecnicoId = $(element).attr('id').replace('cliente-', '');
        const tecnico = tecnicosSelecionados.find(t => t.id === tecnicoId);

        const dataInicial = $(element).find('.data-inicial').val();
        const dataFinal = $(element).find('.data-final').val();

        // Atualizar as datas no objeto tecnicosSelecionados
        tecnico.dataInicial = dataInicial ? new Date(dataInicial) : null;
        tecnico.dataFinal = dataFinal ? new Date(dataFinal) : null;

        // Calcular a diferença em dias entre as datas
        const diferencaEmDias = calcularDiferencaDias(tecnico.dataInicial, tecnico.dataFinal);

        // Imprimir a diferença em dias no console
        console.log('Diferença em dias para ' + tecnico.nome + ':', diferencaEmDias);

        // Adicionar/remover a classe 'texto-vermelho' para alterar a cor
        $('#abdfeg .w-full').removeClass('texto-vermelho');
        $(element).addClass('texto-vermelho');

        // Remover a tabela existente (se houver)
        $('#horas_quadro table').remove();

        // Criar e adicionar a nova tabela à div 'horas_quadro'
        const diasDiferenca = calcularDiferencaDias(tecnico.dataInicial, tecnico.dataFinal);
        const tabela = criarTabela(diasDiferenca);
        $('#horas_quadro').append(tabela);
    };
});




/*
function trocaCor(element) {
    // Remover a classe 'texto-vermelho' de todos os elementos
    $('.w-full p').removeClass('texto-vermelho');

    // Adicionar a classe 'texto-vermelho' apenas ao elemento clicado
    $(element).find('p').addClass('texto-vermelho');
}
*/



if (document.querySelector('#garantia')) {

    //AO ALTERAR UM SELECT, MOSTRAR OU OCULTAR ELEMENTO
    var select = document.getElementById('garantia');
    var input_preco_horas = document.getElementById('preco_hora');

    select.addEventListener('change', function() {

        if (select.value === 'sim') {
            input_preco_horas.disabled = true;
            input_preco_horas.style.opacity = '0.5';


        } else {
            input_preco_horas.disabled = false;
            input_preco_horas.style.opacity = '1';
        }
    });


};




