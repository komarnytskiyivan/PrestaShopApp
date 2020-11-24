<?php
/* Smarty version 3.1.33, created on 2020-11-24 23:39:16
  from '/var/www/html/modules/hiaddtocartbutton/views/templates/hook/dashboard_zone.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fbd7d84afddf8_71476547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f2fb95006e80c93beabfad801116e542147c329' => 
    array (
      0 => '/var/www/html/modules/hiaddtocartbutton/views/templates/hook/dashboard_zone.tpl',
      1 => 1606219766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbd7d84afddf8_71476547 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['show_module']->value) {?>
    <div class="col-lg-12 hipresta-modules-ad">
        <div class="panel clearfix">
            <div class="panel-heading"> <i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check our modules','mod'=>'hiaddtocartbutton'),$_smarty_tpl ) );?>
</div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules']->value, 'module', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['module']->value) {
?>
                <div class="module-item module-item-grid">
                    <div class="module-item-wrapper-grid">
                        <div class="module-item-heading-grid">
                            <div class="module-logo-thumb-grid">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['module']->value->image_link;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['module']->value->display_name;?>
">
                            </div>
                            <h3 title="<?php echo $_smarty_tpl->tpl_vars['module']->value->display_name;?>
" class="text-ellipsis module-name-grid">
                                <span><?php echo $_smarty_tpl->tpl_vars['module']->value->display_name;?>
</span>
                            </h3>
                        </div>
                        <div class="module-quick-description-grid no-padding mb-0">
                            <?php if (isset($_smarty_tpl->tpl_vars['module']->value->desc_short) && $_smarty_tpl->tpl_vars['module']->value->desc_short) {?>
                                <div class="module-quick-description-text">
                                    <?php echo $_smarty_tpl->tpl_vars['module']->value->desc_short;?>

                                    <span>...</span>
                                </div>
                            <?php }?>
                            <div class="module-read-more-grid">
                                <a href="https://hipresta.com/module/hiprestashopapi/prestashopapi?secure_key=6db77b878f95ee7cb56d970e4f52f095&redirect=1&module_key=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','mod'=>'hiaddtocartbutton'),$_smarty_tpl ) );?>
</a>
                            </div>
                        </div>
                        <div class="module-container module-quick-action-grid clearfix">
                            <div class="badges-container">
                                <div>
                                    <img src="https://hipresta.com/images/hipresta.jpg">
                                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Made by HiPresta','mod'=>'hiaddtocartbutton'),$_smarty_tpl ) );?>
</span></div>
                                </div>
                            <hr>
                            <div class="float-right module-price"><span><?php echo $_smarty_tpl->tpl_vars['module']->value->price;?>
</span></div>
                            <div class="form-action-button-container">
                                <a href="https://hipresta.com/module/hiprestashopapi/prestashopapi?secure_key=6db77b878f95ee7cb56d970e4f52f095&redirect=1&module_key=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" target="_blank" class="btn btn-primary btn-primary-reverse btn-block btn-outline-primary light-button module_action_menu_go_to_addons">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discover','mod'=>'hiaddtocartbutton'),$_smarty_tpl ) );?>
</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php }?>
<div class="clearfix"></div>
<style type="text/css">
    .bootstrap .hipresta-modules-ad .module-sorting-menu {
        margin-bottom: 30px;
    }
    .bootstrap .hipresta-modules-ad .module-item-wrapper-grid {
        border: none;
        border-radius: 0;
        box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        min-height: 415px;
        padding: .625rem;
        position: relative;
        display: block;
        margin-bottom: .625rem;
        background-color: #fff;
    }
    .bootstrap .hipresta-modules-ad .module-item-heading-grid {
        position: relative;
        text-align: center;
    }
    .bootstrap .hipresta-modules-ad .module-logo-thumb-grid {
        width: 55px;
        height: 55px;
        text-align: center;
        margin: 0 auto;
        border-radius: 0;
    }
    .bootstrap .hipresta-modules-ad .module-logo-thumb-grid img {
        max-width: 55px;
        max-height: 55px;
    }
    #content.bootstrap .hipresta-modules-ad h3.module-name-grid {
        border: none;
        font-size: 1.2em;
        padding: 0 0 0 5px;
        position: relative;
        text-align: center;
        font-weight: bolder;
        margin: 1rem 0 .5rem;
        min-height: 24px;
        font-family: Open Sans,Helvetica,Arial,sans-serif;
        line-height: 1.2;
        color: #363a41;
        text-transform: none;
        border-bottom: none;
        height: inherit;
    }
    .bootstrap .hipresta-modules-ad .module-quick-description-grid {
        margin: 15px 0;
        text-align: center;
        min-height: 100px;
    }
    .bootstrap .hipresta-modules-ad .module-read-more-grid {
        display: inline-block;
    }
    .bootstrap .hipresta-modules-ad .module-price {
        right: auto;
        bottom: auto;
        position: relative;
        margin-right: 5px;
        float: right;
        font-size: 14px;
    }
    .bootstrap .hipresta-modules-ad hr {
        margin-top: 1.875rem;
        margin-bottom: 1.875rem;
        border: 0;
        border-top: 1px solid #bbcdd2;
    }
    .bootstrap .hipresta-modules-ad .form-action-button-container {
        display: flex;
        -webkit-box-pack: end;
        justify-content: flex-end;
        position: absolute;
        bottom: 10px;
        width: 100%;
        left: 0;
        padding: 0 10px;
    }
    .bootstrap .hipresta-modules-ad .btn {
        height: 32px;
        font-size: .625rem;
        padding: .5rem;
        float: none;
        margin: 0 auto;
        color: #25b9d7;
        background-color: transparent;
        background-image: none;
        border-color: #25b9d7;
        border-width: 1px;
        font-weight: 600;
        border-radius: .063rem;
        white-space: nowrap;
        display: inline-block;
        text-align: center;
        vertical-align: middle;
        user-select: none;
        text-transform: none;
        border-left: 1px solid #25b9d7;
    }
    .bootstrap .hipresta-modules-ad .btn:hover {
        color: #fff;
        background-color: #19a9c6;
        border-color: #19a9c6;
        box-shadow: none;
    }
    .bootstrap .hipresta-modules-ad .badges-container {
        min-height: 30px;
        font-size: 14px;
        line-height: 50%;
        text-align: center;
    }
    .bootstrap .hipresta-modules-ad .badges-container img {
        width: 22px;
    }
    .bootstrap .hipresta-modules-ad .module-quick-action-grid {
        color: #363a41;
    }
</style>
<?php }
}
