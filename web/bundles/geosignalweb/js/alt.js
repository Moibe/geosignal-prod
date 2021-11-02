var registrandoPosicion = false, idRegistroPosicion, ultimaPosicionUsuario, marcadorUsuario;
var primary_domain = "https://geopositioningservices.com/";
var sliders;
var slider;
var zoom = 14;
google.maps.event.addDomListener(window, 'load', initialize);
$(document).ready(function () {
    sliders = new Array();
    if ($(".slider-content").length) {
        $(".slider-content").each(function () {
            var slider = $(this).bxSlider({
                slideMargin: $(this).data('slide-margin') || 0,
                moveSlides: $(this).data('move-slides') || 1,
                mode: $(this).data('mode') || 'horizontal',
                slideWidth: $(this).data('slide-width') || 0,
                maxSlides: $(this).data('max-slides') || 1,
                minSlides: $(this).data('max-slides') || 1,
                auto: hasData($(this).data('auto')) ? $(this).data('auto') : true,
                pager: hasData($(this).data('pager')) ? $(this).data('pager') : false || true,
                controls: hasData($(this).data('controls')) ? $(this).data('controls') : false || true,
                speed: $(this).data('speed') || 800,
                responsive: hasData($(this).data('responsive')) ? $(this).data('responsive') : false || true,
                infiniteLoop: hasData($(this).data('infinite-loop')) ? $(this).data('infinite-loop') : false || true,
                onSlideAfter: changeSlider
            });
            sliders.push(slider);
        });
    }




    $(document).on('click', '.btn-next-slide', function () {

        slider = sliders[0];
        if (slider.getCurrentSlide() === 1) {
            $(this).unbind();
            $(this).attr('disabled', 'disabled');
            registrarPosicion();
        } else if (slider.getCurrentSlide() === 3) {
            $('.map-container').append($('#map-canvas'));
            slider.goToNextSlide();
        } else if (slider.getCurrentSlide() === 4) {
            $('.map-container2').append($('#map-canvas'));
            $('#map-canvas').css('height', '200px');
            slider.goToNextSlide();
        } else if (slider.getCurrentSlide() === 5) {
            $('.map-container3').append($('#map-canvas'));
            $('#map-canvas').css('width', '200px');
            $('#map-canvas').css('height', '150px');
            slider.goToNextSlide();
        } else {
            slider.goToNextSlide();
        }

        return false;
    });



});

function registrarPosicion() {
    
    $('.loader').removeClass('hidden');
    
    if (registrandoPosicion) {
        registrandoPosicion = false;
        navigator.geolocation.clearWatch(idRegistroPosicion);
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
        var iconFile = primary_domain + 'images/ico-cel.png';
        registrandoPosicion = true;
        ultimaPosicionUsuario = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
        marcadorUsuario = new google.maps.Marker({
            position: ultimaPosicionUsuario,
            map: map,
            icon: iconFile
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
    var slider = sliders[0];

    navigator.geolocation.clearWatch(idRegistroPosicion);
    slider.goToNextSlide();

    $('span.position').text(ultimaPosicionUsuario);

}

function initialize() {
    var mapOptions = {
        center: {lat: 42.755080, lng: -75.27832},
        zoom: 4
    };
    map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);



}

function falloRegistroPosicion() {
    alert('No se pudo determinar la ubicación');
}

function changeSlider() {
    if (slider.getCurrentSlide() === 3 || slider.getCurrentSlide() === 5 || slider.getCurrentSlide() === 6) {
        google.maps.event.trigger(map, "resize");
    }

    if (slider.getCurrentSlide() === 5) {
        showFinalResult();
    }

    if (slider.getCurrentSlide() === 6) {
        map.panTo(ultimaPosicionUsuario);
    }
}

function showFinalResult() {
    map.setZoom(zoom);
    map.panTo(ultimaPosicionUsuario);
}

function hasData(data) {
    return  typeof (data) !== undefined && data !== null ? true : false;
}