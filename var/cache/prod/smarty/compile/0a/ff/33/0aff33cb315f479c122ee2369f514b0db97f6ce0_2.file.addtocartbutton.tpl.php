<?php
/* Smarty version 3.1.33, created on 2020-11-24 23:46:44
  from '/var/www/html/modules/hiaddtocartbutton/views/templates/hook/addtocartbutton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fbd7f44e9d8a0_11801053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0aff33cb315f479c122ee2369f514b0db97f6ce0' => 
    array (
      0 => '/var/www/html/modules/hiaddtocartbutton/views/templates/hook/addtocartbutton.tpl',
      1 => 1606219766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbd7f44e9d8a0_11801053 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" class="hiaddtocart">
    <?php if ($_smarty_tpl->tpl_vars['customizable']->value) {?>
        <a 
            href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_url']->value, ENT_QUOTES, 'UTF-8');?>
" 
            class="btn btn-primary"
        >
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customize','mod'=>'hiaddtocartbutton'),$_smarty_tpl ) );?>

        </a>
    <?php } else { ?>
        <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_poduct']->value, ENT_QUOTES, 'UTF-8');?>
" class="product_page_product_id">
        <input type="hidden" name="id_customization" value="0" class="product_customization_id">
        <?php if ($_smarty_tpl->tpl_vars['quantity_block']->value) {?>
            <div class="product-quantity">
              <input
                type="text"
                name="qty"
                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['minimal_qty']->value, ENT_QUOTES, 'UTF-8');?>
"
                class="input-group hi-quantity"
                min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['minimal_qty']->value, ENT_QUOTES, 'UTF-8');?>
"
                aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','mod'=>'hiaddtocartbutton'),$_smarty_tpl ) );?>
"
                available-qty="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['available_qty']->value, ENT_QUOTES, 'UTF-8');?>
"
              >
            </div>
        <?php }?>
        <button 
            class="btn btn-primary add-to-cart" 
            data-button-action="add-to-cart" 
            type="submit"
            <?php if ($_smarty_tpl->tpl_vars['availability']->value != 'available' && $_smarty_tpl->tpl_vars['availability']->value != 'last_remaining_items') {?>
                disabled
            <?php }?>>
            <i class="material-icons shopping-cart"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add To Cart','mod'=>'hiaddtocartbutton'),$_smarty_tpl ) );?>

        </button>

        <span class="product-availability">
            <i class="material-icons product-unavailable"></i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are not enough products in stock','mod'=>'hiaddtocartbutton'),$_smarty_tpl ) );?>

        </span>
    <?php }?>
</form>

<?php }
}
