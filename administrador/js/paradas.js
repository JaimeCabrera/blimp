/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
   
    $('#registroEliminado').hide();
$(document).ready(function () {

        $("#Inicio").click(function () {
                alert("The paragraph was clicked.");
                $('#seccionRecargar1').load('php/verParadassa');
        });
        /*obtener el id de un elemento*/
        $(".editar").click(function(){
            $("#mostrarmodal").modal("show");
        //$('#registroEliminado').show().delay(3000).slideUp(200);
        //alert("El texto del botón es --> " + $(this).attr("name"));
        });
      
        
});
