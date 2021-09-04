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
var $container = $('.grid');
$container.masonry({
    itemSelector: '.grid-item',
    columnWidth: 255,
    gutter: 20,
    fitWidth: true
});

particlesJS.load('particles-js', 'config/particlesjs-config.json');

function cropAndCenterImage(el, size) {
    //el = img wrapper
    //img = img element
    if (size === undefined || size === null) {
        size = 154;
    }
    var $el = $(el);
    var $img = $(el + " img");
    //console.log($el);
    //console.log($img);
    $img.width("auto").height("auto");
    var imgWidth = $img.width();
    var imgHeight = $img.height();
    //console.log(imgHeight, imgWidth);

    //hopefully that returns the img to it's default height and width by making the inline style to empty quotes

    if( imgWidth > imgHeight ) {
        //Crop image
        //console.log("width greater than height");
        if ( imgHeight >= size  ) {
            //console.log("hit if");
            $img.height(size);
            imgHeight = $img.height();
            imgWidth = $img.width();
            $el.height(imgHeight).width(imgHeight);
        } else {
            //console.log("hit else");
            $el.height(imgHeight).width(imgHeight);
            $img.height(imgHeight).width(imgWidth);
        }

        //Center image horizontally
        var leftInt = (imgWidth - $el.width()) / 2;
        $img.css({ "margin-left": "-" + leftInt + "px", "margin-top": "0" });
    } else {
        //Crop image
        //console.log("height greater than width");
        if ( imgWidth >= size  ) {
            $img.width(size);
            imgHeight = $img.height();
            imgWidth = $img.width();
            $el.height(imgWidth).width(imgWidth);
        } else {
            $el.height(imgWidth).width(imgWidth);
            $img.height(imgHeight).width(imgWidth);
        }
        imgHeight = $img.height();
        //Center image vertically
        var topInt = (imgHeight - $el.height()) / 2;
        //console.log(topInt);
        $img.css({ "margin-top": "-" + topInt + "px", "margin-left": "0"});
    }

}

$(function() {
    $('#navbutton').click(function() {
        $('#MenuClosed').toggleClass('hidden');
        $('#MenuOpened').toggleClass('hidden');
    });
    // var classes = $('.grid-item').attr('class').split(' ');
    //
    // for(var i=0; i < classes.length; i++){
    //    cropAndCenterImage(".news-img", $('.'+classes[i]).height());
    // }
    // cropAndCenterImage(".news-img", $('.news-img').attr('class').split(' ')[1].height());
});
