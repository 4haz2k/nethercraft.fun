/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/shop.js ***!
  \******************************/
$(document).ready(function () {
  $.ajax({
    url: "/ajax/getCart",
    type: 'POST',
    data: {
      _token: _token
    },
    success: function success(response) {
      console.log(response);
      $("#item-count").html(response.totalCount);
      $("#total-price").html(response.totalPrice);
    }
  });
});
var ItemsShop = {
  addQuantities: function addQuantities(element) {
    var field = $(element).parents().eq(1).find($('.field_button')).val();

    if (field === '') {
      $(element).parents().eq(1).find($('.field_button')).val(1);
    } else if (parseInt(field) >= 9999) {
      $(element).parents().eq(1).find($('.field_button')).val(9999);
    } else {
      $(element).parents().eq(1).find($('.field_button')).val(parseInt(field) + 1);
    }
  },
  lessQuantities: function lessQuantities(element) {
    var field = $(element).parents().eq(1).find($('.field_button')).val();

    if (field === '') {
      $(element).parents().eq(1).find($('.field_button')).val(1);
    } else if (parseInt(field) >= 2) {
      $(element).parents().eq(1).find($('.field_button')).val(parseInt(field) - 1);
    } else {
      $(element).parents().eq(1).find($('.field_button')).val(1);
    }
  },
  buyItem: function buyItem(element) {
    var field = $(element).parents().eq(1).find($('.field_button')).val();

    if (field === '') {
      $(element).parents().eq(1).find($('.field_button')).val(1);
    } else if (parseInt(field) < 1) {
      $(element).parents().eq(1).find($('.field_button')).val(1);
    }

    $.ajax({
      url: "/ajax/addItem",
      type: 'POST',
      data: {
        _token: _token,
        id: $(element).parents().eq(1).attr('id'),
        qty: $(element).parents().eq(1).find($('.field_button')).val()
      },
      success: function success(response) {
        console.log(response);
        var that = $(element).closest('.item-block').find('img');
        var cart = $(".cart-total-title");
        var w = that.width();
        that.clone().css({
          'width': w,
          'position': 'absolute',
          'z-index': '9999',
          top: that.offset().top,
          left: that.offset().left
        }).appendTo("body").animate({
          opacity: 0.05,
          left: cart.offset()['left'],
          top: cart.offset()['top'],
          width: 20,
          height: 20
        }, 1000, function () {
          $(this).remove();
        });
        $("#item-count").html(response.totalCount);
        $("#total-price").html(response.totalPrice);
      }
    });
  }
};
$("#see-more").click(function () {
  var $div = $($(this).data('div')); //div to append

  var $link = $(this).data('link'); //current URL

  var $category = "&category=" + $(".selected").data("category");
  var $page = $(this).data('page'); //get the next page #

  var $href = $link + $page + $category; //complete URL

  $.get($href, function (response) {
    //append data
    var $html = $(response).find("#items").html();
    $div.append($html);
    var $count = $(response).find("#items").children().length;
    if ($count < 20) $("#see-more").hide();else $("#see-more").show();
  });
  $(this).data('page', parseInt($page) + 1); //update page #
});
$(".category-button").click(function () {
  $see_more = $("#see-more");
  $see_more.show();
  var $link = $(this).data('link'); //current URL

  $(".selected").removeClass("selected");
  $(this).addClass("selected");
  var $category = "&category=" + $(this).data("category");
  var $page = 1;
  var $href = $link + $page + $category; //complete URL

  $.get($href, function (response) {
    //append data
    var $html = $(response).find("#items").html();
    $("#items").html($html);
    var $count = $(response).find("#items").children().length;
    if ($count < 20) $("#see-more").hide();else $("#see-more").show();
  });
  $see_more.data('page', 2);
}); //Events add, less, buy

$(document).on("click", "#addQuantities", function () {
  ItemsShop.addQuantities(this);
});
$(document).on("click", "#lessQuantities", function () {
  ItemsShop.lessQuantities(this);
});
$(document).on("click", "#buy_item", function () {
  ItemsShop.buyItem(this);
}); //particles

particlesJS.load('particles-js', 'config/particlesjs-config-two.json'); //cart card
// let cartWrap = $('#cartWrap'),
//     cartCard = $('.cartCard'),
//     startPosition = cartWrap.offset().top,
//     // stopPosition = $('#stickyStop').offset().top - cartCard.outerHeight();
//     stopPosition = $('.cart').offset().top - cartCard.outerHeight();
//
// $(document).scroll(function () {
//     //stick nav to top of page
//     let y = $(this).scrollTop()
//
//     if (y > startPosition) {
//         cartCard.addClass('sticky');
//         if (y > stopPosition) {
//             cartCard.css('top', stopPosition - y);
//         } else {
//             cartCard.css('top', "50%");
//         }
//     } else {
//         cartCard.removeClass('sticky');
//     }
// });

jQuery('.cartCard').stickyfloat({
  duration: 400
});
/******/ })()
;