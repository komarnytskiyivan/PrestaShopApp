$(document).ready(function () {
    IoWishListEvents();

    prestashop.on('updateProductList', function () {
        IoWishListEvents();
    });

    prestashop.on('updatedProduct', function () {
        IoWishListEvents();
    });
});

function IoWishListEvents() {
    $('.io-wishlist__button').on('click', function (event) {
        var item = $(this);
        if(item.hasClass('added'))
            IoWishListRemoveProduct(item);
        else
            IoWishListAddProduct(item);
    });
}

function IoWishListAddProduct(item) {
    var id_product = item.data('id-product');
    var id_product_attribute = item.data('id-product-attribute');

    $.ajax({
        type: 'POST',
        headers: {"cache-control": "no-cache"},
        url: wishlist_url + '?rand=' + new Date().getTime(),
        async: true,
        cache: false,
        data: {
            "ajax": 1,
            "action": "create",
            "id_product": id_product,
            "id_product_attribute": id_product_attribute,
            "quantity": 1,
            "token": io_token
        },
        success: function (result) {
            var obj = JSON.parse(result);
            if(obj.errors.length === 0) {
                item.addClass('added');
                IoWishListUpdateNavQuantity(obj.nav_quantity);
            } else {
                $.each(obj.errors, function (key, value) {
                    alert(value);
                });
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert('Technical error');
        }
    });
}

function IoWishListRemoveProduct(item) {
    var id_product = item.data('id-product');
    var id_product_attribute = item.data('id-product-attribute');

    $.ajax({
        type: 'POST',
        headers: {"cache-control": "no-cache"},
        url: wishlist_url + '?rand=' + new Date().getTime(),
        async: true,
        cache: false,
        data: {
            "ajax": 1,
            "action": "delete",
            "id_product": id_product,
            "id_product_attribute": id_product_attribute,
            "token": io_token
        },
        success: function (result) {
            var obj = JSON.parse(result);
            if(obj.errors.length === 0) {
                item.removeClass('added');
                IoWishListUpdateNavQuantity(obj.nav_quantity);
                if($('#module-io_wishlist-wishlist').length > 0) {
                    item.closest('.item-inner').remove();
                }
            } else {
                $.each(obj.errors, function (key, value) {
                    console.log(value);
                });
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert('Technical error');
        }
    });
}

function IoWishListUpdateNavQuantity(quantity = 0) {
    if(quantity > 0)
        $('.io-wishlist__navigation').addClass('added');
    else
        $('.io-wishlist__navigation').removeClass('added');
}