<?php
/* Smarty version 3.1.33, created on 2020-12-21 00:41:57
  from '/var/www/html/admin164mibe2c/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdfd3355e2aa2_71132077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97c1585b1918aa462a20ce0dbe3b0db6b6adb89c' => 
    array (
      0 => '/var/www/html/admin164mibe2c/themes/new-theme/template/content.tpl',
      1 => 1600952248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdfd3355e2aa2_71132077 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
