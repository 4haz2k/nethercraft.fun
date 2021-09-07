//DOM items: $(element).parents().eq(1).find($('.field_button'))
var ItemsShop = {
    addQuantities: function (element){
        var field = $(element).parents().eq(1).find($('.field_button')).val();
        if(field === ''){
            $(element).parents().eq(1).find($('.field_button')).val(1);
        }
        else{
            $(element).parents().eq(1).find($('.field_button')).val(parseInt(field) + 1);
        }
    },

    lessQuantities: function (element){
        var field = $(element).parents().eq(1).find($('.field_button')).val();
        if(field === ''){
            $(element).parents().eq(1).find($('.field_button')).val(1);
        }
        else if (parseInt(field) >= 2){
            $(element).parents().eq(1).find($('.field_button')).val(parseInt(field) - 1);
        }
        else{
            $(element).parents().eq(1).find($('.field_button')).val(1);
        }
    },

    buyItem: function (element){
        var field = $(element).parents().eq(1).find($('.field_button')).val();
        if(field === ''){
            $(element).parents().eq(1).find($('.field_button')).val(1);
        }
        $.ajax({
            url: "/ajax/addItem",
            type:'POST',
            data: {
                _token: _token,
                id: $(element).parents().eq(1).attr('id'),
                qty: $(element).parents().eq(1).find($('.field_button')).val()
            },
            success: function(response) {
                console.log(response.response);
                var that = $(element).closest('.item-block').find('img');
                var cart = $("#cartt");
                var w = that.width();
                that.clone()
                    .css({'width' : w,
                        'position' : 'absolute',
                        'z-index' : '9999',
                        top: that.offset().top,
                        left:that.offset().left})
                    .appendTo("body")
                    .animate({
                        opacity: 0.05,
                        left: cart.offset()['left'],
                        top: cart.offset()['top'],
                        width: 20,
                        height: 20
                    }, 1000, function() {
                        $(this).remove();
                    });

            }
        });
    }
}

//Events add, less, buy
$(document).on("click","#addQuantities", function () {
    ItemsShop.addQuantities(this);
});

$(document).on("click","#lessQuantities", function () {
    ItemsShop.lessQuantities(this);
});

$(document).on("click","#buy_item", function () {
    ItemsShop.buyItem(this);
});


//particles
particlesJS.load('particles-js', 'config/particlesjs-config.json');