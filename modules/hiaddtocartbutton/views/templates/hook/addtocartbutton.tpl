{**
* 2012 - 2020 HiPresta
*
* MODULE Add to cart button
*
* @author    HiPresta <support@hipresta.com>
* @copyright HiPresta 2020
* @license   Addons PrestaShop license limitation
* @link      http://www.hipresta.com
*}

<form action="{$urls.pages.cart}" method="post" class="hiaddtocart">
    {if $customizable}
        <a 
            href="{$product_url}" 
            class="btn btn-primary"
        >
            {l s='Customize' mod='hiaddtocartbutton'}
        </a>
    {else}
        <input type="hidden" name="token" value="{$token}">
        <input type="hidden" name="id_product" value="{$id_poduct}" class="product_page_product_id">
        <input type="hidden" name="id_customization" value="0" class="product_customization_id">
        {if $quantity_block}
            <div class="product-quantity">
              <input
                type="text"
                name="qty"
                value="{$minimal_qty}"
                class="input-group hi-quantity"
                min="{$minimal_qty}"
                aria-label="{l s='Quantity' mod='hiaddtocartbutton'}"
                available-qty="{$available_qty}"
              >
            </div>
        {/if}
        <button 
            class="btn btn-primary add-to-cart" 
            data-button-action="add-to-cart" 
            type="submit"
            {if $availability != 'available' && $availability != 'last_remaining_items'}
                disabled
            {/if}>
            <i class="material-icons shopping-cart"></i> {l s='Add To Cart' mod='hiaddtocartbutton'}
        </button>

        <span class="product-availability">
            <i class="material-icons product-unavailable"></i>
            {l s='There are not enough products in stock' mod='hiaddtocartbutton'}
        </span>
    {/if}
</form>

