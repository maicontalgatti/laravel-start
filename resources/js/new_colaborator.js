
$(document).ready(function () {
    $("#exibe_campos").on("click", function () {
        myFunction();
        event.preventDefault(); // Evita o redirecionamento padrão do botão
    });

    function myFunction() {
        var fields = document.querySelectorAll('.responsive-hide');
        fields.forEach(function (field) {
            field.style.display = field.style.display === 'none' ? 'block' : 'none';
        });
    }
});
