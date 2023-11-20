
// In your Javascript (external .js resource or <script> tag)



$(document).ready(function() {
    $('#id_cliente').select2();
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

