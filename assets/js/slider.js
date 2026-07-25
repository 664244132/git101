// อ้างอิง: JavascriptCodingGuide - Event listener cleanup และ Guard clauses
$(document).ready(function() {
    
    // ตรวจสอบว่ามี element .product-slider หรือไม่ (Guard clause)
    if($('.product-slider').length === 0) return;

    var swiper = new Swiper('.product-slider', {
        spaceBetween: 30,
        effect: 'fade',
        loop: false,
        navigation: {
            nextEl: '.next',
            prevEl: '.prev'
        },
        on: {
            init: function(){
                var index = this.activeIndex;
                var target = $('.product-slider__item').eq(index).data('target');



                $('.product-img__item').removeClass('active');
                $('.product-img__item#'+ target).addClass('active');
            }
        }
    });

    swiper.on('slideChange', function () {
        var index = this.activeIndex;
        var target = $('.product-slider__item').eq(index).data('target');



        $('.product-img__item').removeClass('active');
        $('.product-img__item#'+ target).addClass('active');

        $('.next').toggleClass('disabled', swiper.isEnd === true);
        $('.prev').toggleClass('disabled', swiper.isBeginning === true);
    });
});
