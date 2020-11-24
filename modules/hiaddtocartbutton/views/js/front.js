/**
* 2012 - 2020 HiPresta
*
* MODULE Add to cart button
*
* @author    HiPresta <support@hipresta.com>
* @copyright HiPresta 2020
* @license   Addons PrestaShop license limitation
* @link      http://www.hipresta.com
*/

$(document).ready(function() {
    
    $(document).on('click', '.hiaddtocart button ', function(e){
        e.preventDefault();
    });
    createQuantitySpin();

    prestashop.on('updateFacets', function (param) {
        setTimeout(function(){
            createQuantitySpin();
        }, 2000);
    });

    $(document).on('change keyup', '.hi-quantity', function() {
        var available_qty = parseInt($(this).attr('available-qty'));
        var current_qty = parseInt($(this).val());
        var $add_to_cart_button = $(this).parents('.hiaddtocart').find('.add-to-cart');
        var $availability_txt = $(this).parents('.hiaddtocart').find('.product-availability');
        if(available_qty == -1){
            $add_to_cart_button.removeAttr('disabled');
            $availability_txt.hide();
        } else {
            if(current_qty >  available_qty){
                $add_to_cart_button.attr('disabled', 'disabled');
                $availability_txt.show();
            } else {
                $add_to_cart_button.removeAttr('disabled');
                $availability_txt.hide();
            }
        }
    });

    $(document).on('touchspin.on.startspin', '.hi-quantity', function() {
        var available_qty = parseInt($(this).attr('available-qty'));
        var current_qty = parseInt($(this).val());
        var $add_to_cart_button = $(this).parents('.hiaddtocart').find('.add-to-cart');
        var $availability_txt = $(this).parents('.hiaddtocart').find('.product-availability');
        if(available_qty == -1){
            $add_to_cart_button.removeAttr('disabled');
            $availability_txt.hide();
        } else {
            if(current_qty >  available_qty){
                $add_to_cart_button.attr('disabled', 'disabled');
                $availability_txt.show();
            } else {
                $add_to_cart_button.removeAttr('disabled');
                $availability_txt.hide();
            }
        }
    });

    prestashop.on(
      'updateCart',
      function (event) {
        if (event && event.reason && event.reason.linkAction == 'add-to-cart') {
            console.log(event);
            var id_product_attribute = event.reason.idProductAttribute;
            var id_product = event.reason.idProduct;

            $.ajax({
                type :'POST',
                dataType : "json",
                url : hi_adb_front_controller_url,
                data :{
                    ajax: true,
                    action: 'check_product_qty',
                    id_product_attribute: id_product_attribute,
                    id_product: id_product,
                },
                success: function(response){
                    var $el = $('.hiaddtocart .product_page_product_id[value="'+response.id_product+'"]').parent();
                    if(response.availability && (response.availability != 'available' && response.availability != 'last_remaining_items')) {
                        $el.find('button').attr('disabled', 'disabled');
                    } else {
                        $el.find('.hi-quantity').attr('available-qty', response.available_qty);
                    }
                }
            });
        }

        // $.post(refreshURL, requestData).then(function (resp) {
        //   $('.blockcart').replaceWith($(resp.preview).find('.blockcart'));
        //   if (resp.modal) {
        //     showModal(resp.modal);
        //   }
        // }).fail(function (resp) {
        //   prestashop.emit('handleError', {eventType: 'updateShoppingCart', resp: resp});
        // });
      }
    );
});

function createQuantitySpin() {
    $('.hi-quantity').each(function(){
        var quantityInput = $(this);
        quantityInput.TouchSpin({
          verticalbuttons: true,
          verticalupclass: 'material-icons touchspin-up',
          verticaldownclass: 'material-icons touchspin-down',
          buttondown_class: 'btn btn-touchspin js-touchspin',
          buttonup_class: 'btn btn-touchspin js-touchspin',
          min: parseInt(quantityInput.attr('min'), 10),
          max: 1000000
        });

        quantityInput.on('change', function (event) {
          let $productRefresh = $('.product-refresh');
          $(event.currentTarget).trigger('touchspin.stopspin');
          $productRefresh.trigger('click', {eventType: 'updatedProductQuantity'});
          event.preventDefault();

          return false;
        });
    });
}