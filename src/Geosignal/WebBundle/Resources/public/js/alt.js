$(document).ready(function () {
    var sliders = new Array();
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
                infiniteLoop: hasData($(this).data('infinite-loop')) ? $(this).data('infinite-loop') : false || true
            });
            sliders.push(slider);
        });
    }

    $(document).on('click', '.btn-next-slide', function () {
        sliders[0].goToNextSlide();
        return false;
    });
});
function hasData(data) {
    return  typeof (data) !== undefined && data !== null ? true : false;
}