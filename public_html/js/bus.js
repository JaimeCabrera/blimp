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
    $('#limpiar').click(function () {

        $('input[type="text"]').val('');
        $('#alertaLugar').hide();
    });
}
function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 9
    });
    var infoWindow = new google.maps.InfoWindow({map: map});
    // Try HTML5 geolocation.
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            map.setCenter(pos);
        }, function () {
            handleLocationError(true, infoWindow, map.getCenter());
        });
    } else {
// Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
    }
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\'t support geolocation.');
}








