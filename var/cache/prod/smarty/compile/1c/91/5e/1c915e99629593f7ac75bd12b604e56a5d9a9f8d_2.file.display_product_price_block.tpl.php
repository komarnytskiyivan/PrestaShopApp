<?php
/* Smarty version 3.1.33, created on 2020-12-15 13:40:19
  from '/var/www/html/modules/wishlist/views/templates/hook/display_product_price_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd8a0a325e883_50596131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c915e99629593f7ac75bd12b604e56a5d9a9f8d' => 
    array (
      0 => '/var/www/html/modules/wishlist/views/templates/hook/display_product_price_block.tpl',
      1 => 1608032198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd8a0a325e883_50596131 (Smarty_Internal_Template $_smarty_tpl) {
?><style type="text/css">
.product-list-wishlist {
    border: 1px solid red;
    position: absolute;
    top: -26px;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: center;
    width: 100%;
    background: rgba(255, 255, 255, 0.5);
    padding: 4px 0;
}
</style>
<div class="product-list-wishlist">
<form action='../modules/wishlist/addtowishlist.php' method='POST'>

<input type='text' value='' style='display:none'>

<button type='submit'>&#128420;</button>

</form>
</div><?php }
}
