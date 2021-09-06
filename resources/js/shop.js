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
            success: function(data) {
                var data = JSON.parse(data);
                console.log(data);
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
