<?php
/* Smarty version 3.1.33, created on 2020-12-21 00:46:26
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdfd442e3e876_52353008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1600952248,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_5fdfd442e3e876_52353008 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost:8081/uk/my-account" rel="nofollow">
      Ваш профіль
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Ваш профіль</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="http://localhost:8081/uk/identity" title="Особисті дані" rel="nofollow">
            Особисті дані
          </a>
        </li>
            <li>
          <a href="http://localhost:8081/uk/order-history" title="Замовлення" rel="nofollow">
            Замовлення
          </a>
        </li>
            <li>
          <a href="http://localhost:8081/uk/credit-slip" title="Рахунки" rel="nofollow">
            Рахунки
          </a>
        </li>
            <li>
          <a href="http://localhost:8081/uk/addresses" title="Адреси" rel="nofollow">
            Адреси
          </a>
        </li>
        
	</ul>
</div>
<?php }
}
