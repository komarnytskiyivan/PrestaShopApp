<?php
/* Smarty version 3.1.33, created on 2020-12-21 00:41:32
  from '/var/www/html/modules/io_wishlist/views/templates/front/wishlist-nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdfd31c6ec126_58897699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7480c8fd681977fdfef5aeb9bb713e8d0b690c84' => 
    array (
      0 => '/var/www/html/modules/io_wishlist/views/templates/front/wishlist-nav.tpl',
      1 => 1608503516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdfd31c6ec126_58897699 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="_desktop_wishtlistTop" class="pull-right">
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="io-wishlist__navigation <?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>added<?php }?>">
        <i class="io-wishlist__icon"></i> <span class="hidden-md-up">Lista życzeń</span>
    </a>
</div><?php }
}
