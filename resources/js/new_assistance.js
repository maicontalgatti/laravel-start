
$(document).ready(function() {
    // Inicializar o Select2
    $('.js-example-basic-multiple').select2();

    let tecnicosSelecionados = [];
    const idParam = $("input[name='idParam']").val();
    //console.log(idParam);


    // Adicionar ou remover pessoas na div ao selecionar/deselecionar na lista
    $('.js-example-basic-multiple').on('change', function() {
        // Limpar o conteúdo do array de técnicos selecionados
        tecnicosSelecionados = [];

        // Iterar sobre as opções selecionadas e adicionar objetos ao array
        $(this).find(':selected').each(function() {
            const id = $(this).val();
            const nome = $(this).text();
            tecnicosSelecionados.push({assistencia: idParam, id: id, nome: nome, dataInicial: null, dataFinal: null });
        });

        // Imprimir no console os IDs e NOMES dos técnicos selecionados
        console.log('Técnicos Selecionados:', tecnicosSelecionados);

        // Atualizar a exibição na tela
        atualizarTecnicosNaTela();
    });

    window.gerarCalendario = function(element) {

        const tecnicoId = $(element).attr('id').replace('cliente-', '');
        const tecnico = tecnicosSelecionados.find(t => t.id === tecnicoId);
        //console.log(tecnico);

        const dataInicial = $(element).find('.data-inicial').val();
        const dataFinal = $(element).find('.data-final').val();

        tecnico.dataInicial = dataInicial ? new Date(dataInicial) : null;
        tecnico.dataFinal = dataFinal ? new Date(dataFinal) : null;
        const diasDiferenca = calcularDiferencaDias(tecnico.dataInicial, tecnico.dataFinal);
        const tabela = criarTabela(diasDiferenca,tecnico.dataInicial, tecnico.dataFinal,tecnico.id, tecnico.nome);

        // Use SweetAlert2 para exibir a tabela em um modal
        Swal.fire({
            width: '1600px', // Defina o tamanho desejado aqui
            title: 'Calendário',
            html: tabela[0].outerHTML, // Obtenha o HTML da tabela
            showCloseButton: true,
            showConfirmButton: false,
        });
    }

    function atualizarTecnicosNaTela() {
        // Limpar o conteúdo da div antes de recriar
        $('#abdfeg').empty();

        // Iterar sobre os técnicos selecionados e adicionar na tela
        tecnicosSelecionados.forEach(function(tecnico) {
            const id = tecnico.id;
            const nome = tecnico.nome;
            const dataInicial = '2023-12-01';
            const dataFinal = '2023-12-10';

            // Criar a div do técnico
            const divTecnico = $("<div class='w-full flex justify-between items-center px-4 mb-4 sm:mb-0 bg-gray-200 dark:bg-gray-700' id='cliente-" + id + "'>" +
                "<p class='text-4xl  font-medium dark:text-gray-300 text-gray-900'>" + nome + "</p>" +
                "<div class='flex items-center'>" +
                "<input type='date' class='data-inicial' id='data1-" + id + "' value='" + dataInicial + "'>" +
                "<span class='mx-2'>-</span>" +
                "<input type='date' class='data-final' id='data2-" + id + "'value='" + dataFinal + "'>" +
                "<button type='button' style='padding-left:20px;color:white' onClick='gerarCalendario(this.parentNode.parentNode)'>Gerar Calendário</button>"+
                "</div></div>");

            // Adicionar a div do técnico à div principal
            $('#abdfeg').append(divTecnico);
        });
    }

    function calcularDiferencaDias(dataInicial, dataFinal) {
        if (dataInicial && dataFinal) {
            const diffEmMilissegundos = Math.abs(dataFinal - dataInicial);
            const diffEmDias = Math.ceil(diffEmMilissegundos / (1000 * 60 * 60 * 24));
            return diffEmDias + 1; // Adicione 1 para incluir a última data
        }
        return null;
    }

    function criarTabela(diasDiferenca,dataInicial,dataFinal,idTecnico,nomeTecnico) {
        //alert(dataInicial + ' --- ' + dataFinal);
        const tabelaExistente = $('#tabelaTecnicos');
        if (tabelaExistente.length) {
            return tabelaExistente;
        }

        const container = $('<div>');
        container.attr('id', 'tabelaTecnicos');

        const tabela = $('<table>').addClass('w-auto text-center border-collapse border  bg-gray-100 dark:bg-gray-700');

        // Cabeçalho da tabela
        const cabecalho = $('<thead>');
        const cabecalhoLinha = $('<tr>');
        const colunas = [
            'data', 'feriado', 'h_inicio_m', 'h_fim_m', 'h_total_m', 'h_inicio_t', 'h_fim_t', 'h_total_t',
            'h_inicio_n', 'h_fim_n', 'h_total_n', 'h_totais', 'h_normais', 'h_50', 'h_100', 'h_noturnas'
        ];
        const colunas_cabecalho = [
            'data', 'feriado', 'H Início M', 'H Fim M', 'Total M', 'H Início T', 'H Fim T', 'Total T',
            'H Início N', 'H Fim N', 'Total N', 'H Totais', 'H Norm', 'H 50%', 'H 100%', 'H Adicionais/Noturnas'
        ];
        colunas_cabecalho.forEach(coluna => {
            cabecalhoLinha.append($('<th>').text(coluna).addClass('border border-gray-400 text-white'));
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
                    //const data = new Date();
                    const data = new Date(dataInicial);
                    data.setDate(data.getDate() + i );
                    const diaMesFormatado = `${data.getDate()}/${data.getMonth() + 1}`;

                    // Adicionar classe para sábado (6) ou domingo (0)
                    const diaSemana = data.getDay();
                    const classeDiaSemana = (diaSemana === 0 || diaSemana === 6) ? 'dia-fim-de-semana' : '';

                    linha.append($('<td>').text(diaMesFormatado).addClass(`border border-gray-400 text-white ${classeDiaSemana}`).css('min-width', '60px'));

                } else if (j === 1) {
                    // Adicionar select para a coluna 'Feriado'
                    const selectFeriado = $('<select>')
                        .addClass('border border-gray-400 w-full')
                        .css('padding', '0')
                        .attr('name', `feriado_${i}`)
                        .css('min-width', '70px');
                    selectFeriado
                        .append($('<option>').text('Não').val('nao'))
                        .append($('<option>').text('Sim').val('sim'));
                    linha.append($('<td>').append(selectFeriado).addClass('border border-gray-400'));
                } else {
                    // Adicionar input para as demais colunas
                    const inputHora = $('<input>')
                        .addClass('border border-gray-400 w-full')
                        .attr('type', 'time')
                        .css('padding', '0')
                        .attr('name', `${colunas[j].toLowerCase()}_${i}`)
                        .attr('value', '00:00'); // Definir o valor padrão como '00:00'
                    linha.append($('<td>').append(inputHora).addClass('border border-gray-400'));
                }
            }
            corpo.append(linha);
        }
        tabela.append(corpo);

        const botaoSalvar = $('<button>')
            .attr({
                type: 'button',
                id: 'btnSalvar',
                onclick: 'salvarDados()' // Adicione o evento onclick aqui
            })
            .addClass('mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded')
            .text('Salvar');

        // Adicionar evento de clique ao botão "Salvar"
        window.salvarDados = function () {
            // Coletar os dados da tabela
            const dados = [];
            tabela.find('tbody tr').each(function () {
                const linha = $(this);
                const diaElement = linha.find('td:eq(0)').text();
                const dadosLinha = {
                    dia: formatarData(diaElement)
                    //dia: diaElement,
                };
                colunas.slice(2).forEach((coluna, index) => {
                    const inputName = `${coluna.toLowerCase()}_${linha.index() + 1}`;
                    const valorInput = document.querySelector(`input[name="${inputName}"]`).value;
                    const feriadoElement = `feriado_${linha.index() + 1}`;
                    let feriadoVal = document.querySelector(`select[name="${feriadoElement}"]`).value;
                    if (feriadoVal == 'sim') {
                        feriadoVal = 1;
                    }else{
                        feriadoVal = 0;
                    }

                    dadosLinha[coluna.toLowerCase()] = valorInput;
                    dadosLinha['Feriado'] = feriadoVal;
                    dadosLinha['id_tecnico'] = idTecnico;
                    dadosLinha['id_assistencia'] = idParam;

                });
                //console.log('Dados da Linha:', dadosLinha);
                dados.push(dadosLinha);
            });
            console.log('Dados enviados :', dados);

            // Enviar dados via AJAX
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            console.log('idTecnico: '+idTecnico);

            $.ajax({
                method: 'POST',
                url: '/ajax/salvarDados',
                data: {
                    dados: JSON.stringify(dados),
                }, // Converta os dados para uma string JSON
                dataType: 'json', // Indica ao jQuery que a resposta esperada é JSON
                success: function (response) {
                    Swal.fire({
                        icon: 'success', // Ícone de sucesso
                        title: 'Horários cadastrados com sucesso!',
                        text: response.mensagem,
                    });

                    //console.log('Dados enviados com sucesso:', response);
                    //alert('Horários cadastrados com sucesso!')
                    if (response && response.mensagem) {
                        console.log('Mensagem do servidor:', response.mensagem);
                    }
                },
                error: function (xhr, status, error) {
                    Swal.fire({
                        icon: 'error', // Ícone de erro
                        title: 'Erro ao cadastrar horários',
                        text: 'Ocorreu um erro ao cadastrar os horários. Por favor, tente novamente mais tarde.',
                    });
                    console.error('Erro ao enviar dados:', error);
                    console.log('Resposta completa:', xhr.responseText);
                }
            });

        };

        container.append(tabela, botaoSalvar); // Adicionar tabela e botão ao contêiner
        return container; // Retornar o contêiner em vez da tabela

    }
    // Função para formatar a data no formato 'Y-m-d'
    function formatarData(dataString) {
        const partes = dataString.split('/');
        const ano = new Date().getFullYear();  // Assumindo que você quer o ano atual
        const mes = partes[1].padStart(2, '0');  // Preencher com zero à esquerda, se necessário
        const dia = partes[0].padStart(2, '0');
        return `${ano}-${mes}-${dia}`;
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




