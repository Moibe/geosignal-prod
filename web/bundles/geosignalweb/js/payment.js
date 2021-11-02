
$(document).ready(function () {

    if (locale_path === "br") {
        locale_path = 'pt';
    }

    if (locale_path === "uk" || locale_path === "en") {

    } else {
        $.ajaxSetup({cache: true});
        $.getScript('/bundles/geosignalweb/validate/localization/messages_' + locale_path + '.js');
    }

    Conekta.setPublishableKey(conekta_public_key);

    $(function () {
        // jQuery(function($){

        if ($('#myCCForm').length) {
            $('.btn-payment-step-forward').click(function () {
                var f = $('.payment-content-wrap form');

                var fvalid = f.validate({
                    submitHandler: function (form) {
                        currentForm = $(form);
                        // tokenRequest();
                    }

                });


                if (fvalid.form()) {
                    if ($('.payment-wrap').find('.step1').is(':visible')) {



                        var current_step = $(this).parents('.step1');
                        current_step.fadeOut('fast', function () {
                            current_step.next('.step2').fadeIn();
                        });
                        $('.payment-wrap').removeClass('payment-step-1');
                        $('.payment-wrap').addClass('payment-step-2');



                    } else {
                        var current_step = $(this).parents('.step2');
                        current_step.fadeOut('fast', function () {
                            current_step.prev('.step1').fadeIn()
                        });
                        $('.payment-wrap').removeClass('payment-step-2');
                        $('.payment-wrap').addClass('payment-step-1');
                    }
                } else {

                    if (!$('.payment-wrap').find('.step1').is(':visible')) {
                        var current_step = $(this).parents('.step2');
                        current_step.fadeOut('fast', function () {
                            current_step.prev('.step1').fadeIn()
                        });
                        $('.payment-wrap').removeClass('payment-step-2');
                        $('.payment-wrap').addClass('payment-step-1');
                    }
                }

                return false;
            });
        }



        $("#myCCForm").submit(function (event) {
            var $form = $(this);
            window.onbeforeunload = null;



            $form.find("#pay-button").prop("disabled", true);
            Conekta.token.create($form, conektaSuccessResponseHandler, conektaErrorResponseHandler);
            return false;
        });
    });



    var conektaSuccessResponseHandler = function (token) {
        var $form = $("#myCCForm");


        $form.append($("<input type='hidden' name='conektaTokenId'>").val(token.id));
        console.log(token.id);
        console.log("Token de la tarjeta, generado");
        $form.get(0).submit();


    };

    var conektaErrorResponseHandler = function (response) {
        var $form = $("#myCCForm");

        /* Muestra los errores en la forma */
        $form.find(".card-errors").text(response.message_to_purchaser);
        $form.find("#pay-button").prop("disabled", false);


    };


    // FIN DE LA CONFIGURACIÓN DE CONEKTA
});

$.validator.addMethod("cvc", function (value, element) {
    return this.optional(element) || /^(?!000)\d{3,4}$/.test(value);
}, "Proporciona un CVC válido");