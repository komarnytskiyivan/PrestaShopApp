<?php
/* Smarty version 3.1.33, created on 2020-11-17 18:37:30
  from '/var/www/html/admin9318yx5nn/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fb3fc4a783632_14969700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d2fdc137527c17e6e30728bf3d7d4d46ea92f77' => 
    array (
      0 => '/var/www/html/admin9318yx5nn/themes/new-theme/template/content.tpl',
      1 => 1600952248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb3fc4a783632_14969700 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}