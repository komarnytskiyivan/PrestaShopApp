<?php
/* Smarty version 3.1.33, created on 2020-12-21 00:46:34
  from 'module:iowishlistviewstemplatesf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdfd44a541782_17810630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '789c4fe9c9a2b4c77d60bf3567870100bcd0dc7e' => 
    array (
      0 => 'module:iowishlistviewstemplatesf',
      1 => 1608503516,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/productGrid.tpl' => 1,
  ),
),false)) {
function content_5fdfd44a541782_17810630 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

\
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9267908695fdfd44a528a10_43852204', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'product_miniature'} */
class Block_6539089575fdfd44a538374_43314365 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/productGrid.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'product_list'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration'] : null)), 0, true);
?>
                    <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'page_content'} */
class Block_9267908695fdfd44a528a10_43852204 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_9267908695fdfd44a528a10_43852204',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_6539089575fdfd44a538374_43314365',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="wishlist-products">
        <div class="row">
            <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'product_list', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration']++;
?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6539089575fdfd44a538374_43314365', 'product_miniature', $this->tplIndex);
?>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </div>
    </div>
<?php
}
}
/* {/block 'page_content'} */
}
