<?php
/* Smarty version 3.1.33, created on 2020-12-21 00:44:40
  from '/var/www/html/modules/io_wishlist/views/templates/front/wishlist-btn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdfd3d8064fb8_24271318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7d6a4bb2a40a32bad8b8038627b0dd9c54b2b8b' => 
    array (
      0 => '/var/www/html/modules/io_wishlist/views/templates/front/wishlist-btn.tpl',
      1 => 1608503516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdfd3d8064fb8_24271318 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="io-wishlist">
    <div class="io-wishlist__button<?php if ($_smarty_tpl->tpl_vars['product_exist']->value) {?> added<?php }?>"
            data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['io_wishlist_id_product']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['io_wishlist_id_product_attribute']->value, ENT_QUOTES, 'UTF-8');?>
">
            <i class="io-wishlist__icon"></i>
    </div>
</div><?php }
}
