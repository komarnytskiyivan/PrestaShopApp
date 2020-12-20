<?php
/* Smarty version 3.1.33, created on 2020-12-21 00:44:18
  from '/var/www/html/admin164mibe2c/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdfd3c2291086_22724189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59d8f834700e5658407e134b678f005b65e4287d' => 
    array (
      0 => '/var/www/html/admin164mibe2c/themes/default/template/content.tpl',
      1 => 1600952248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdfd3c2291086_22724189 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
