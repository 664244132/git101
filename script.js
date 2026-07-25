// อ้างอิง: JavascriptCodingGuide - Event listener cleanup และ Guard clauses
$(document).ready(function() {
    
    // ตรวจสอบว่ามี element .product-slider หรือไม่ (Guard clause)
    if($('.product-slider').length === 0) return;

    var swiper = new Swiper('.product-slider', {
        spaceBetween: 30,
        effect: 'fade',
        // initialSlide: 2,
        loop: false,
        navigation: {
            nextEl: '.next',
            prevEl: '.prev'
        },
        // mousewheel: {
        //     // invert: false
        // },
        on: {
            init: function(){
                var index = this.activeIndex;
                var target = $('.product-slider__item').eq(index).data('target');

                console.log(target);

                $('.product-img__item').removeClass('active');
                $('.product-img__item#'+ target).addClass('active');
            }
        }
    });

    swiper.on('slideChange', function () {
        var index = this.activeIndex;
        var target = $('.product-slider__item').eq(index).data('target');

        console.log(target);

        $('.product-img__item').removeClass('active');
        $('.product-img__item#'+ target).addClass('active');

        if(swiper.isEnd) {
            $('.prev').removeClass('disabled');
            $('.next').addClass('disabled');
        } else {
            $('.next').removeClass('disabled');
        }

        if(swiper.isBeginning) {
            $('.prev').addClass('disabled');
        } else {
            $('.prev').removeClass('disabled');
        }
    });

    $(".js-fav").on("click", function(e) {
        e.preventDefault(); // ป้องกันพฤติกรรมเริ่มต้นของปุ่ม
        $(this).find('.heart').toggleClass("is-active");
    });
    
});
