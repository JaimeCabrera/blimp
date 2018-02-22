/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * api key  AIzaSyBjPZ7jAEFCjZInh-HdL4S3O75-iH9ccJc 
 */

//function Localizar() {
//    if($("#lugarLocalizacion").val().length < 1) {  
//        $('#alertaLugar').show();
//        return false; 
//       
//    }
//    return false;
//    alert(sss);
//    
//
//}
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
        $('input[type="text"]').val('');
        $('#alertaLugar').hide();
}