var map;
var fancyObject = {
    'width': 700,
    'height': 500,
    'padding': 10,
    'href': '#mainContent',
    'transitionIn': 'elastic',
    'transitionOut': 'elastic',
    'closeBtn': false,
    'closeClick': false,
    'autoSize': false,
    helpers: {
        overlay: {closeClick: false} // prevents closing when clicking OUTSIDE fancybox
    }
};
var i = 0,
        delay = 1000,
        animate = 200;
var registrandoPosicion = false, idRegistroPosicion, ultimaPosicionUsuario, marcadorUsuario;
google.maps.event.addDomListener(window, 'load', initialize);

$(document).ready(function() {
    setTimeout(function() {
        $.fancybox(fancyObject);
    }, 1000);


    $('form.register').submit(function() {
        i = 0;
        var ul = $('<ul></ul>');

        $('#mainContent').html(ul);
        $('#mainContent').append("<form class='do'><input type='submit' value='enviar'></form>");

        ul.append('<li>Buscando</li>');

        var labels = ["Saab", "Volvo", "BMW"];

        $.each(labels, function(index, value) {

            ul.append('<li>' + value + '</li>');
        });

        animateList(showButton);

        return false;
    });

});


function animateList(funcToExecute) {

    var list = $('ul');
    var imax = list.find("li").length - 1;
    list.find("li:eq(" + i + ")")
            .show()
            .animate({"fontSize": "80px"}, animate)
            .animate({"fontSize": "80px"}, delay)
            .animate({"fontSize": "30px"}, animate, function() {
                i++;
                if (i <= imax) {
                    animateList(funcToExecute);
                } else {
                    funcToExecute();
                }
            });

}
;

function showButton() {
    $('form.do').show();

    $('form.do').submit(function() {
        i = 0;
        var ul = $('<ul></ul>');

        $('#mainContent').html(ul);


        var labels = ["Saab", "Volvo", "Generando Mapa"];

        $.each(labels, function(index, value) {

            ul.append('<li>' + value + '</li>');
        });

        animateList(registrarPosicion);

        return false;
    });
}


function initialize() {
    var mapOptions = {
        center: {lat: -34.397, lng: 150.644},
        zoom: 8
    };
    map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);

    //registrarPosicion();
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
    firstResult();

}

function firstResult() {
    map.setZoom(17);
    navigator.geolocation.clearWatch(idRegistroPosicion);
    $.fancybox.close();
    setTimeout(function() {
        fancyObject.content = $("#paypalContent");
        fancyObject.helpers = {
            overlay: {
                opacity: 1,
                css: {'background-color': '#ffffff'}
            }
        };
console.log(fancyObject);
        $.fancybox(fancyObject);
    }, 5000);
}

function falloRegistroPosicion() {
    alert('No se pudo determinar la ubicación');
    limpiarUbicacion();
}