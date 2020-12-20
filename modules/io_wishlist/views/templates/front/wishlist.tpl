{extends file='customer/page.tpl'}
\
{block name='page_content'}
    <div class="wishlist-products">
        <div class="row">
            {if $products}
                {foreach from=$products item="product" name=product_list}
                    {block name='product_miniature'}
                        {include file='catalog/_partials/miniatures/productGrid.tpl' product=$product product_list=$smarty.foreach.product_list.iteration}
                    {/block}
                {/foreach}
            {/if}
        </div>
    </div>
{/block}
