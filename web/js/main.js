var map;
var circle;
var arrMarkers = new Array(0);
var bounds;
var zoom = 14;
var labels;
var labels2;
var labels3;
var label_submit;
var markers = [];           // array to hold markers
var kmRadius1 = {'min': 5, 'max': 10};
var kmRadius2 = {'min': 0.5, 'max': 1};
var last_point;
var height = 450;
var primary_domain = "http://geosignal.spraystudio.com.mx/";

if (bowser.mobile) {
    height = 700;
}

var fancyObject = {
    'width': 820,
    'height': height,
    'padding': 10,
    'href': '#mainContent',
    'transitionIn': 'elastic',
    'transitionOut': 'elastic',
    'closeBtn': false,
    'closeClick': false,
    'autoSize': false,
    keys: {
        close: null
    },
    helpers: {
        overlay: {closeClick: false} // prevents closing when clicking OUTSIDE fancybox
    }
};
var i = 0,
        delay = 500,
        animate = 200;
var registrandoPosicion = false, idRegistroPosicion, ultimaPosicionUsuario, marcadorUsuario;
google.maps.event.addDomListener(window, 'load', initialize);

$(document).ready(function () {
    if (bowser.mobile) {
        $("html").addClass('mobile');
    }

    if ($('body').hasClass('homepage')) {
        doStart($('#mainContent'), showButton, labels, label_submit);
    }

    $(".btn-full").click(function () {
        $("html").toggleClass('full-screen');
    });

    $(".ico-menu").click(function () {
        $(".header-wrap .nav-main").toggleClass('active');
    });

});

function showResult() {
    var latitude = $.cookie('user_latitude');
    var longitude = $.cookie('user_longitude');
    var lt = new google.maps.LatLng(latitude, longitude);

    map.panTo(lt);
    createMarker(lt);

}

function doStart(element, funcToExecute, array, label) {
    setTimeout(function () {
        $.fancybox(fancyObject);
    }, 1000);

    $('form.register').unbind();
    $('form.register').submit(function () {
        i = 0;
        var ul = $('<ul class="steps"></ul>');
        element.html(ul);
        element.append("<form class='do'><input type='submit' value='" + label + "' class='btn-locate'></form>");

        $.each(array, function (index, value) {
            ul.append('<li>' + value + '</li>');
        });
        animateList(funcToExecute);
        return false;
    });
}

function animateList(funcToExecute) {
    var list = $('ul.steps');
    var imax = list.find("li").length - 1;
    list.find("li:eq(" + i + ")")
            .show()
            .animate({"fontSize": "2.5rem"}, animate)
            .animate({"fontSize": "2.5rem"}, delay)
            .animate({"fontSize": "1.9rem"}, animate, function () {
                i++;
                if (i <= imax) {
                    animateList(funcToExecute);
                } else {
                    funcToExecute();
                }
            });
}

function toPaypal() {
    //

    showResult();
    $('#paypalContent').fadeOut('fast', function () {
        $('.paypalForm').show();
    });

    $('#paypalContent').delay(1200).fadeIn();

    $('.fancybox-overlay').delay(1600 * 2).css({'background-color': "rgb(0,0,0,.1)"});
    $('.fancybox-overlay').delay(1600 * 2).animate({'background-color': "rgb(0,0,0,.6)"}, 1200);
}

function showButton() {
    $('form.do').show();
    $('form.do').submit(function () {
        i = 0;
        var ul = $('<ul class="steps"></ul>');

        $('#mainContent').html(ul);

        $.each(labels2, function (index, value) {
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

    if ($('body').hasClass('result')) {
        google.maps.event.addListenerOnce(map, 'idle', showResult);
    }
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
        var iconFile = primary_domain + 'images/ico-cel.png';

        registrandoPosicion = true;
        ultimaPosicionUsuario = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
        marcadorUsuario = new google.maps.Marker({
            position: ultimaPosicionUsuario,
            map: map,
            icon: iconFile
        });

        $.cookie('user_latitude', position.coords.latitude, {expires: 7, path: '/'});
        $.cookie('user_longitude', position.coords.longitude, {expires: 7, path: '/'});
    } else {
        var posicionActual = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
        ultimaPosicionUsuario = posicionActual;
        marcadorUsuario.setPosition(posicionActual);
        $.cookie('user_latitude', position.coords.latitude, {expires: 7, path: '/'});
        $.cookie('user_longitude', position.coords.longitude, {expires: 7, path: '/'});
    }
    map.panTo(ultimaPosicionUsuario);
    firstResult();

}

function firstResult() {
    map.setZoom(zoom);
    navigator.geolocation.clearWatch(idRegistroPosicion);


    var latitude = $.cookie('user_latitude');
    var longitude = $.cookie('user_longitude');
    var lt = new google.maps.LatLng(latitude, longitude);

    addRadious(Math.random() * (kmRadius2.max - kmRadius2.min) + kmRadius2.min, 10, lt, '#FFF68F');

    $.fancybox.close();

    setTimeout(function () {
        prevFancy();
    }, 2000);
}

function prevFancy() {
    fancyObject.content = $("#paypalContent");
    $('#paypalContentInner').hide();
    $('body').append($('#paypalContentInner'));
    $('#paypalContentInner').fadeIn();



    $('form.register').unbind();
    $('form.register').submit(function () {
        $('ul.steps').remove();
        $('#paypalContentInner').fadeOut();
        fancyObject.href = '#paypalContent';

        var element = $('#paypalContent');

        $.fancybox(fancyObject);

        i = 0;
        var ul = $('<ul class="steps"></ul>');
        element.prepend(ul);

        $.each(labels3, function (index, value) {
            ul.append('<li>' + value + '</li>');
        });
        animateList(toPaypal);

        return false;
    });
}

function falloRegistroPosicion() {
    alert('No se pudo determinar la ubicación');
    limpiarUbicacion();
}


function createMarker(coord, current) {
    var pos = new google.maps.LatLng(coord.lat(), coord.lng());

    var iconFile = primary_domain + 'images/ico-cel.png';
    if (current) {
        var marker = new google.maps.Marker({
            position: pos,
            map: map,
            icon: iconFile
        });
        markers.push(marker);
    }

    addRadious(Math.random() * (kmRadius1.max - kmRadius1.min) + kmRadius1.min, 1, map.getCenter(), '#088DA5');


    if (!current) {
        var marker = new google.maps.Marker({
            position: last_point,
            map: map,
            icon: iconFile
        });
        markers.push(marker);
    }

    addRadious(Math.random() * (kmRadius2.max - kmRadius2.min) + kmRadius2.min, 10, last_point, '#FFF68F');
}

function addRadious(kmR, maxPoints, center, hexa) {
    circle = new google.maps.Circle({
        center: center,
        radius: kmR * 1000, // meters
        strokeColor: "#0000FF",
        strokeOpacity: 0,
        strokeWeight: 2,
        fillColor: hexa,
        fillOpacity: 0
    });

    circle.setMap(map);

    var bounds = circle.getBounds();
    map.fitBounds(bounds);
    var sw = bounds.getSouthWest();
    var ne = bounds.getNorthEast();
    for (var i = 0; i < maxPoints; i++) {
        var ptLat = Math.random() * (ne.lat() - sw.lat()) + sw.lat();
        var ptLng = Math.random() * (ne.lng() - sw.lng()) + sw.lng();
        var point = new google.maps.LatLng(ptLat, ptLng);
        last_point = point;
        if (google.maps.geometry.spherical.computeDistanceBetween(point, circle.getCenter()) < circle.getRadius() && maxPoints > 1) {
            addMarker(map, point, "marker " + i);
        } else if (maxPoints > 1) {
            i--;
        }
    }
}

function addMarker(map, point, content) {
    var iconFile = primary_domain + 'images/ico-antenas.png';


    var marker = new google.maps.Marker({
        position: point,
        map: map,
        icon: iconFile
    });
    google.maps.event.addListener(marker, "click", function (evt) {
        infowindow.setContent(content + "<br>" + marker.getPosition().toUrlValue(6));
        infowindow.open(map, marker);
    });
    return marker;
}