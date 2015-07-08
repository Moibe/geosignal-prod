var map;
var registrandoPosicion = false, idRegistroPosicion, ultimaPosicionUsuario, marcadorUsuario;
google.maps.event.addDomListener(window, 'load', initialize);


function initialize() {
    var mapOptions = {
        center: {lat: -34.397, lng: 150.644},
        zoom: 8
    };
    map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);

    registrarPosicion();
}
function registrarPosicion() {
    if (registrandoPosicion) {
        registrandoPosicion = false;
        navigator.geolocation.clearWatch(idRegistroPosicion);
        limpiarUbicacion();
    } else {
        idRegistroPosicion = navigator.geolocation.watchPosition(exitoRegistroPosicion, falloRegistroPosicion, {
            enableHighAccuracy: true,
            maximumAge: 30000,
            timeout: 27000
        });
    }
}

function exitoRegistroPosicion(position) {
    if (!registrandoPosicion) {
        // Es la primera vez 
        registrandoPosicion = true;
        ultimaPosicionUsuario = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
        marcadorUsuario = new google.maps.Marker({
            position: ultimaPosicionUsuario,
            map: map
        });
    } else {
        var posicionActual = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
        ultimaPosicionUsuario = posicionActual;
        marcadorUsuario.setPosition(posicionActual);
    }
    map.panTo(ultimaPosicionUsuario);
}

function falloRegistroPosicion() {
    alert('No se pudo determinar la ubicación');
    limpiarUbicacion();
}