function validar() {
    if ($('#valor').val().length < 1) {
        $('#alertaLugar').show();

        return false;
    } else {
        $('#pagina1').show();
        $('#pagina').hide();
        return false;
    }
}
function limpiar() {
        $('#limpiar').click(function () {
        $('input[type="text"]').val('');
        $('#alertaLugar').hide();
    });
}