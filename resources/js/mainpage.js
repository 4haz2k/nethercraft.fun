const swiper = new Swiper('.swiper-container', {
    // Optional parameters
    autoplay: true,
    direction: 'vertical',
    effect: 'fade',
    loop: true,
    speed: 400,
    noSwiping: true,
    allowTouchMove: false,


    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
});

swiper.on('slideChange', function() {
    var realIndex = swiper.activeIndex;
    if (realIndex == 1) {
        swiper.allowSlidePrev = false;
        $('.swiper-button-prev').addClass('swiper-button-disabled');
        $('.swiper-button-next').removeClass('swiper-button-disabled');
    } else if(realIndex == 5){
        swiper.allowSlideNext = false;
        $('.swiper-button-next').addClass('swiper-button-disabled');
        $('.swiper-button-prev').removeClass('swiper-button-disabled');
    }
    else {
        swiper.allowSlideNext = true;
        swiper.allowSlidePrev = true;
        $('.swiper-button-prev').removeClass('swiper-button-disabled');
        $('.swiper-button-next').removeClass('swiper-button-disabled');
    }
});
