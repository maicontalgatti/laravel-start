


//adc select2
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});


// new_assistance.js

$(document).ready(function() {
    // Inicializar o Select2
    $('.js-example-basic-multiple').select2();

    // Adicionar ou remover pessoas na div ao selecionar/deselecionar na lista
    $('.js-example-basic-multiple').on('change', function() {
        // Limpar o conteúdo da div
        $('#INSEREAQUI').html('');

        // Iterar sobre as opções selecionadas e adicionar o nome na div
        $(this).find(':selected').each(function() {
            var nomePessoa = $(this).text();
            $('#INSEREAQUI').append('<p>' + nomePessoa + '</p>');
        });
    });
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




